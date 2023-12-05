@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        @foreach($groupedFlora as $category => $floraItems)
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mt-4">Jelajahi Keindahan Flora <span class="text-primary">{{ $category
                        }}</span> Kami</h1>
            </div>
        </div>
        <div class="row g-4">
            @foreach($floraItems as $flora)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="animal-item" href="{{ route('flora.show', $flora->id) }}">
                    <div class="position-relative">
                        <img class="img-fluid img-equal img-border"
                            src="{{ asset($flora->image_path . $flora->image_name) }}" alt="{{ $flora->common_name }}">
                        <div class="animal-text p-4">
                            <p class="text-white small text-uppercase mb-0">{{ $flora->english_translation }}</p>
                            <h5 class="text-white mb-0">{{ $flora->common_name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection