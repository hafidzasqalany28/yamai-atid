@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>Our Fauna</p>
                <h1 class="display-5 mb-0">Let's See Our <span class="text-primary">Zoofari</span> Awesome Fauna</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="#">Explore More Fauna</a>
            </div>
        </div>
        <div class="row g-4">
            @foreach($faunaData as $fauna)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="animal-item" href="{{ route('fauna.show', $fauna->id) }}">
                    <div class="position-relative">
                        <img class="img-fluid img-equal img-border"
                            src="{{ asset($fauna->image_path . $fauna->image_name) }}" alt="{{ $fauna->common_name }}">
                        <div class="animal-text p-4">
                            <p class="text-white small text-uppercase mb-0">{{ $fauna->english_translation }}</p>
                            <h5 class="text-white mb-0">{{ $fauna->common_name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection