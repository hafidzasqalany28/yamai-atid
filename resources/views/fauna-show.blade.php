@extends('layouts.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-7">
            <h1 class=" card-header mb-4">{{ $fauna->common_name }}</h1>
            <div class="card">
                <div class="custom-card-body">
                    <h3 class="custom-card-title mb-3">Quick Info</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            Common Name
                            <span class="badge bg-primary">{{ $fauna->common_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            Local Name
                            <span class="badge bg-primary">{{ $fauna->local_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            Latin Name
                            <span class="badge bg-primary">{{ $fauna->latin_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            English Translation
                            <span class="badge bg-primary">{{ $fauna->english_translation }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            Biome
                            <span class="badge bg-primary">{{ $fauna->biome }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center mb-4">
                            Quantity
                            <span class="badge bg-primary">{{ $fauna->quantity }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-5 mt-4">
            <img class="img-fluid img-thumbnail img-border" src="{{ asset($fauna->image_path . $fauna->image_name) }}"
                alt="{{ $fauna->common_name }}">
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Description:</h3>
                    <p class="card-text custom-paragraph">{{ $fauna->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection