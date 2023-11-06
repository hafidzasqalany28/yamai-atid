@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Pemindai QR Code</h2>
    <div id="reader" class="mx-auto" style="width: 400px; height: 400px;"></div>
</div>

<!-- Font Awesome untuk ikon kamera -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/gh/mebjas/html5-qrcode@latest/dist/html5-qrcode.min.js"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
        // Handle on success condition with the decoded text or result.
        console.log(`Scan result: ${decodedText}`, decodedResult);

        // Arahkan ke URL yang sesuai dengan hasil pemindaian
        window.location.href = decodedText;
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 30, qrbox: 250 });
    
    // Callback yang akan dijalankan ketika kamera telah diinisialisasi
    html5QrcodeScanner.render(onScanSuccess);

    // Menggunakan perintah getUserMedia untuk mengaktifkan kamera
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
            // Hubungkan aliran video kamera dengan elemen pemindai
            var videoElement = document.getElementById("reader");
            videoElement.srcObject = stream;
        })
        .catch(function (error) {
            console.error("Error accessing the camera: " + error);
        });
</script>
@endsection