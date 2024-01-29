@extends('adminlte::page')

@section('content_header')
    <h1>Edit Entitas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Entitas</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('entities.update', $entity->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @foreach ([
                    'type' => 'Tipe Entitas',
                    'common_name' => 'Nama Umum',
                    'local_name' => 'Nama Lokal',
                    'latin_name' => 'Nama Latin',
                    'english_translation' => 'Kategori',
                    'biome' => 'Bioma',
                    'description' => 'Deskripsi',
                    'quantity' => 'Kuantitas',
                    'image_name' => 'Gambar',
                ] as $field => $label)
                    <div class="form-group">
                        <label for="{{ $field }}">{{ $label }}</label>
                        @if ($field === 'description')
                            <textarea name="{{ $field }}" id="{{ $field }}" class="form-control"
                                required>{{ $entity->$field }}</textarea>
                        @elseif ($field === 'image_name')
                            <input type="file" name="{{ $field }}" id="{{ $field }}" class="form-control" accept="image/*">
                        @else
                            <input type="{{ $field === 'quantity' ? 'number' : 'text' }}" name="{{ $field }}"
                                id="{{ $field }}" class="form-control" value="{{ $entity->$field }}" required>
                        @endif
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Perbarui Entitas</button>
            </form>
        </div>
    </div>
@stop
