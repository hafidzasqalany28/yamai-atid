<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateAllQRCodes()
    {
        $entities = Entity::all();

        foreach ($entities as $entity) {
            $routeName = $entity->type === 'Fauna' ? 'fauna.show' : 'flora.show';
            $url = route($routeName, $entity->id);

            $filename = "qrcode_entity_{$entity->id}.png";
            $path = public_path("qrcodes/{$filename}");

            $qrcode = QrCode::format('png')->size(500)->generate($url);
            File::put($path, $qrcode);

            if (!Barcode::where('entity_id', $entity->id)->exists()) {
                Barcode::create([
                    'entity_type' => $entity->type,
                    'entity_id' => $entity->id,
                    'url' => $url,
                    'image_path' => "qrcodes/{$filename}",
                ]);
            }
        }

        return redirect()->route('entities.index')->with('success', 'All QR Codes generated successfully');
    }
}
