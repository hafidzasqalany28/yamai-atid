<?php

namespace App\Http\Controllers;

use TCPDF;
use App\Models\Entity;
use App\Models\Barcode;
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

        $entityName = Entity::where('id', $barcode->entity_id)->pluck('common_name')->first();

        $pdf = new TCPDF();
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();
        $pdf->SetFont('helvetica', 'B', 40);
        $pdf->SetXY(10, 10);
        $pdf->Cell(0, 10, "{$entityName}", 0, 1, 'C');
        $pdf->Image($qrCodePath, $x = 55, $y = 40, $w = 100);

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

                $entityName = Entity::where('id', $barcode->entity_id)->pluck('common_name')->first();

                if (file_exists($qrCodePath)) {
                    $pdf = new TCPDF();
                    $pdf->setPrintHeader(false);
                    $pdf->setPrintFooter(false);

                    $pdf->AddPage();
                    $pdf->SetFont('helvetica', 'B', 40);
                    $pdf->SetXY(10, 10);
                    $pdf->Cell(0, 10, "{$entityName}", 0, 1, 'C');
                    $pdf->Image($qrCodePath, $x = 55, $y = 40, $w = 100);

                    $zip->addFromString("qrcodes/qrcode_entity_{$barcode->entity_id}.pdf", $pdf->Output('qrcode.pdf', 'S'));
                } else {
                    $zip->close();
                    return redirect()->route('admin.barcodes.index')->with('error', 'Error: Invalid file path');
                }
            }

            $zip->close();

            return response()->download($zipFileName, 'all_qrcodes.zip')->deleteFileAfterSend();
        } else {
            return redirect()->route('admin.barcodes.index')->with('error', 'Failed to create ZIP file');
        }
    }
}
