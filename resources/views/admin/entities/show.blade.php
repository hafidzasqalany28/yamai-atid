@extends('adminlte::page')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Entity Details</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="entity-details">
                    @foreach ([
                    'ID' => $entity->id,
                    'Type' => $entity->type,
                    'Common Name' => $entity->common_name,
                    'Local Name' => $entity->local_name,
                    'Latin Name' => $entity->latin_name,
                    'English Translation' => $entity->english_translation,
                    'Biome' => $entity->biome,
                    'Description' => $entity->description,
                    'Quantity' => $entity->quantity,
                    'Created At' => $entity->created_at->format('F d, Y H:i A'),
                    'Updated At' => $entity->updated_at->format('F d, Y H:i A'),
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
                            <p><strong>Image:</strong></p>
                            <img src="{{ $entity->image_url }}" alt="{{ $entity->image_name }} Image"
                                class="img-fluid img-thumbnail">
                        </div>
                    </div>
                    @else
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Image:</strong></p>
                            <p>No Image Available</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop