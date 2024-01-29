@extends('adminlte::page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Entitas</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="entity-details">
                        @foreach ([
                            'ID' => $entity->id,
                            'Tipe' => $entity->type,
                            'Nama Umum' => $entity->common_name,
                            'Nama Lokal' => $entity->local_name,
                            'Nama Latin' => $entity->latin_name,
                            'Kategori' => $entity->english_translation,
                            'Bioma' => $entity->biome,
                            'Deskripsi' => $entity->description,
                            'Kuantitas' => $entity->quantity,
                            'Dibuat Pada' => $entity->created_at->format('F d, Y H:i A'),
                            'Diperbarui Pada' => $entity->updated_at->format('F d, Y H:i A'),
                        ] as $label => $value)
                            <div class="mb-3">
                                <strong>{{ $label }}:</strong>
                                {{ $value }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="entity-image-card">
                        @if ($entity->image_url)
                            <div class="card">
                                <div class="card-body p-2">
                                    <p><strong>Gambar:</strong></p>
                                    <img src="{{ asset($entity->image_path . '/' . $entity->image_name) }}"
                                        alt="{{ $entity->image_name }} Image" class="img-fluid img-thumbnail">
                                </div>
                            </div>
                        @else
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Gambar:</strong></p>
                                    <p>Tidak Ada Gambar Tersedia</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
