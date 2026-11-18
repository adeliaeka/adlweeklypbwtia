
@extends('layouts.backend')

@section('content')

<div class="container mt-4">

    <h3>Data Mahasiswa</h3>

    <button type="button" class="btn btn-success mb-3">
        Tambah Data
    </button>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->prodi }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->nohp }}</td>

                        <td>
                            @if ($data->foto)
                                <img src="{{ asset('storage/' . $data->foto) }}"
                                     width="60" alt="Foto mahasiswa">
                            @else
                                Belum ada foto
                            @endif
                        </td>

                        <td>
                            <button type="button" class="btn btn-primary">edit</button>

                            <button type="button" class="btn btn-danger">hapus</button>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="8" class="text-center">
                            Data mahasiswa belum tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>

@endsection
