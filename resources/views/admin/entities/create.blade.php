@extends('adminlte::page')

@section('content_header')
<h1>Create Entity</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Entity</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('entities.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach ([
            'type' => 'Entity Type',
            'common_name' => 'Common Name',
            'local_name' => 'Local Name',
            'latin_name' => 'Latin Name',
            'english_translation' => 'Category',
            'biome' => 'Biome',
            'description' => 'Entity Description',
            'quantity' => 'Quantity',
            'image_name' => 'Image Name',
            ] as $field => $placeholder)
            <div class="form-group">
                <label for="{{ $field }}">{{ $placeholder }}</label>
                @if ($field === 'quantity')
                <input type="number" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                @elseif ($field === 'image_name')
                <input type="file" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                @else
                <input type="text" name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                @endif
            </div>
            @endforeach
            <button type="submit" class="btn btn-success">Create Entity</button>
        </form>
    </div>
</div>
@stop