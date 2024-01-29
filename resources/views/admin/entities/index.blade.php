@extends('adminlte::page')

@section('content_header')
    <h1>Daftar Entitas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Entitas</h3>
            <div class="card-tools">
                <a href="{{ route('entities.create') }}" class="btn btn-success">Tambah Entitas Baru</a>

                <!-- Tombol untuk menghasilkan semua Kode QR -->
                <form action="{{ route('entities.generate-all-qrcodes') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Hasilkan Semua Kode QR</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($entities as $entity)
                    <tr>
                        <td>{{ $entity->id }}</td>
                        <td>{{ $entity->common_name }}</td>
                        <td>{{ $entity->type }}</td>
                        <td>
                            <a href="{{ route('entities.show', $entity) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('entities.edit', $entity) }}" class="btn btn-primary">Edit</a>

                            <!-- Tombol untuk mengunduh Kode QR -->
                            <a href="{{ route('entities.download-qrcode', $entity->id) }}"
                                class="btn btn-success">Hasilkan Kode QR</a>

                            <!-- Tambahkan tombol Hapus dengan konfirmasi untuk penghapusan -->
                            <form action="{{ route('entities.destroy', $entity) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus entitas ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">Tidak ada entitas ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
