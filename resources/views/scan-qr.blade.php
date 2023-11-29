@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="mb-4">Pemindai QR Code</h2>

            <div class="video-container" style="border: 2px solid #ccc; padding: 10px; box-sizing: border-box;">
                <video id="scanner" class="mx-auto" style="width: 100%; max-width: 400px; height: auto;"></video>
            </div>

            <button id="scanButton" class="btn btn-primary mt-4">
                Scan QR Code
            </button>
        </div>

    </div>
</div>

<!-- Instascan Library -->
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script>
    // Buat instance Instascan
    let scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });

    // Callback yang akan dijalankan ketika QR Code terdeteksi
    scanner.addListener('scan', function (content) {
        console.log('Scan result:', content);
        window.location.href = content; // Arahkan ke URL yang sesuai dengan hasil pemindaian
    });

    // Tombol Scan
    document.getElementById('scanButton').addEventListener('click', function () {
        // Menggunakan perintah getUserMedia untuk mengaktifkan kamera
        Instascan.Camera.getCameras().then(function (cameras) {
            // Pilih kamera belakang jika tersedia
            const backCameras = cameras.filter(camera => camera.name.toLowerCase().includes('back'));
            
            if (backCameras.length > 0) {
                const selectedCamera = backCameras[0];
                scanner.start(selectedCamera);
            } else if (cameras.length > 0) {
                // Jika tidak ada kamera belakang, gunakan kamera depan pertama yang ditemukan
                const selectedCamera = cameras[0];
                scanner.start(selectedCamera);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (error) {
            console.error("Error accessing the camera:", error);
        });
    });
</script>
@endsection