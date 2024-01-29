@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="mb-4">Pemindai QR Code</h2>

            <div class="video-container" style="border: 2px solid #ccc; padding: 10px; box-sizing: border-box;">
                <video id="scanner" class="mx-auto" style="width: 100%; max-width: 400px; height: auto;"></video>
            </div>

            <div class="mt-4">
                <label for="cameraSelect">Pilih Kamera:</label>
                <select id="cameraSelect" class="form-control">
                    <!-- Opsi kamera akan ditambahkan di sini secara dinamis -->
                </select>
            </div>

            <button id="scanButton" class="btn btn-primary mt-2">
                Scan QR Code
            </button>
        </div>
    </div>
</div>

<!-- Instascan Library -->
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script>
    let scanner;

    document.getElementById('scanButton').addEventListener('click', scanQRCode);

    document.addEventListener('DOMContentLoaded', function () {
        Instascan.Camera.getCameras().then(populateCameraOptions).catch(handleError);
    });

    function scanQRCode() {
        const selectedCameraId = document.getElementById('cameraSelect').value;

        Instascan.Camera.getCameras().then(function (cameras) {
            const selectedCamera = cameras.find(camera => camera.id === selectedCameraId);

            if (selectedCamera) {
                initScanner(selectedCamera);
            } else {
                console.error('Selected camera not found.');
            }
        }).catch(handleError);
    }

    function populateCameraOptions(cameras) {
        const cameraSelect = document.getElementById('cameraSelect');

        cameras.forEach(camera => {
            const option = document.createElement('option');
            option.value = camera.id;
            option.text = camera.name;
            cameraSelect.appendChild(option);
        });
    }

    function initScanner(camera) {
        scanner = new Instascan.Scanner({
            video: document.getElementById('scanner'),
            mirror: false,
        });

        scanner.addListener('scan', function (content) {
            console.log('Scan result:', content);
            window.location.href = content;
        });

        scanner.start(camera);
    }

    function handleError(error) {
        console.error('Error:', error);
    }
</script>
@endsection
