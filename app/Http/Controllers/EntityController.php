<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use App\Models\Barcode;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EntityController extends Controller
{
    public function downloadQRCode($id)
    {
        $entity = Entity::findOrFail($id);
        $entityType = strtolower($entity->type);
        $url = route("{$entityType}.show", $id);
        $filename = "qrcode_entity_{$id}.png";
        $path = public_path("qrcodes/{$filename}");

        // Cek apakah barcode sudah ada
        $barcode = Barcode::where('entity_id', $id)->first();
        if (!$barcode) {
            $qrcode = QrCode::format('png')->size(500)->generate($url);
            File::put($path, $qrcode);

            Barcode::create([
                'entity_type' => $entityType,
                'entity_id' => $id,
                'url' => $url,
                'image_path' => "qrcodes/{$filename}",
            ]);
        }

        return redirect()->route('entities.index')->with('success', 'QR Code downloaded successfully');
    }

    public function index()
    {
        $entities = Entity::all();
        return view('admin.entities.index', compact('entities'));
    }

    public function create()
    {
        return view('admin.entities.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'type' => 'required',
            'common_name' => 'required',
            'local_name' => 'required',
            'latin_name' => 'required',
            'english_translation' => 'required',
            'biome' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'image_name' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];

        $request->validate($rules);

        if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'assets/img';
            $image->move(public_path($imagePath), $imageName);

            Entity::create(array_merge($request->all(), [
                'image_name' => $imageName,
                'image_path' => $imagePath,
            ]));

            return redirect()->route('entities.index')->with('success', 'Entity added successfully!');
        }
    }

    public function show(string $id)
    {
        $entity = Entity::findOrFail($id);
        return view('admin.entities.show', compact('entity'));
    }

    public function edit(string $id)
    {
        $entity = Entity::findOrFail($id);
        return view('admin.entities.edit', compact('entity'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required',
            'common_name' => 'required',
            'local_name' => 'required',
            'latin_name' => 'required',
            'english_translation' => 'required',
            'biome' => 'required',
            'description' => 'required',
            'quantity' => 'required',
        ]);

        $entity = Entity::findOrFail($id);

        if ($request->hasFile('image_name')) {
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);

            $imagePath = 'assets/img/';
            $image = $request->file('image_name');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($imagePath), $imageName);

            File::delete(public_path("{$entity->image_path}/{$entity->image_name}"));

            $entity->update(array_merge($request->all(), [
                'image_name' => $imageName,
                'image_path' => $imagePath,
            ]));
        } else {
            $entity->update($request->all());
        }

        return redirect()->route('entities.index')->with('success', 'Entity updated successfully!');
    }

    public function destroy(string $id)
    {
        $entity = Entity::findOrFail($id);
        $barcodes = Barcode::where('entity_id', $id)->get();

        foreach ($barcodes as $barcode) {
            File::delete(public_path($barcode->image_path));
            $barcode->delete();
        }

        $qrCodePath = public_path("qrcodes/qrcode_entity_{$id}.png");
        if (File::exists($qrCodePath)) {
            File::delete($qrCodePath);
        }

        File::delete(public_path("{$entity->image_path}/{$entity->image_name}"));
        $entity->delete();

        return redirect()->route('entities.index')
            ->with('success', 'Entity, related barcodes, and QR code deleted successfully!');
    }
}
