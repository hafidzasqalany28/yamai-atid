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
            $barcode = Barcode::firstOrNew([
                'entity_id' => $entity->id,
            ]);

            if (!$barcode->exists) {
                $routeName = $entity->type === 'Fauna' ? 'fauna.show' : 'flora.show';
                $url = route($routeName, $entity->id);

                $filename = "qrcode_entity_{$entity->id}.png";
                $path = public_path("qrcodes/{$filename}");

                if (!File::exists($path)) {
                    $qrcode = QrCode::format('png')->size(500)->generate($url);
                    File::put($path, $qrcode);
                }

                $barcode->fill([
                    'entity_type' => $entity->type,
                    'url' => $url,
                    'image_path' => "qrcodes/{$filename}",
                ])->save();
            }
        }

        return redirect()->route('entities.index')->with('success', 'All QR Codes generated successfully');
    }
}
