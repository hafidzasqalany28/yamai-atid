<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use TCPDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarcodeController extends Controller
{
    public function index()
    {
        $barcodes = Barcode::all();
        return view('admin.barcodes.index', compact('barcodes'));
    }
    public function download($id)
    {
        $barcode = Barcode::findOrFail($id);
        $url = $barcode->url;
        $qrCodePath = public_path("qrcodes/qrcode_entity_{$barcode->entity_id}.png");

        $pdf = new TCPDF();
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->Image($qrCodePath, $x = 15, $y = 15, $w = 180);

        return $pdf->Output('qrcode.pdf', 'I');
    }
    public function downloadAll()
    {
        $barcodes = Barcode::all();
        $zip = new \ZipArchive();
        $zipFileName = public_path('qrcodes/all_qrcodes.zip');

        if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
            foreach ($barcodes as $barcode) {
                $qrCodePath = public_path("qrcodes/qrcode_entity_{$barcode->entity_id}.png");
                $zip->addFile($qrCodePath, "qrcodes/qrcode_entity_{$barcode->entity_id}.png");
            }
            $zip->close();

            return response()->download($zipFileName, 'all_qrcodes.zip')->deleteFileAfterSend();
        } else {
            return redirect()->route('admin.barcodes.index')->with('error', 'Failed to create ZIP file');
        }
    }
}
