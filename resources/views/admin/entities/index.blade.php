@extends('adminlte::page')

@section('content_header')
<h1>List of Entities</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Entities</h3>
        <div class="card-tools">
            <a href="{{ route('entities.create') }}" class="btn btn-success">Add New Entity</a>

            <!-- Add button to generate all QR Codes -->
            <form action="{{ route('entities.generate-all-qrcodes') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-primary">Generate All QR Codes</button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($entities as $entity)
                <tr>
                    <td>{{ $entity->id }}</td>
                    <td>{{ $entity->common_name }}</td>
                    <td>{{ $entity->type }}</td>
                    <td>
                        <a href="{{ route('entities.show', $entity) }}" class="btn btn-info">View</a>
                        <a href="{{ route('entities.edit', $entity) }}" class="btn btn-primary">Edit</a>

                        <!-- Add button to download QR Code -->
                        <a href="{{ route('entities.download-qrcode', $entity->id) }}" class="btn btn-success">Generate
                            QR Code</a>

                        <!-- Add Delete button with confirmation for deletion -->
                        <form action="{{ route('entities.destroy', $entity) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this entity?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">No entities found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop