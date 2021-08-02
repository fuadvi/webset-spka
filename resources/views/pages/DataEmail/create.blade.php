@extends('layouts.index')

@section('content')
        <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data SKPA</h1>
        </div>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('data-email.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Kd_dinas">Kode Dinas</label>
                        <input type="text" name="Kd_dinas" id="Kd_dinas" placeholder="masukan kode dinas" value="{{ old('Kd_dinas') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ni">Nip</label>
                        <input type="number" name="ni" id="ni" placeholder="masukan nama NIP/NHI" value="{{ old('ni') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_p">Nama pengguna</label>
                        <input type="text" name="nama_p" id="nama_p" placeholder="masukan nama pengguna" value="{{ old('nama_p') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gd">Gelar Depan</label>
                        <input type="text" name="gd" id="gd" placeholder="masukan  gelar depan" value="{{ old('gd') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gb">Gelar Belakang</label>
                        <input type="text" name="gb" id="gb" placeholder="masukan  gelar belakang" value="{{ old('gb') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="hp">Nomor Hp</label>
                        <input type="number" name="hp" id="hp" placeholder="masukan  nomor HP" value="{{ old('hp') }}" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="nama_e">Nama Email</label>
                        <input type="email" name="nama_e" id="nama_e" placeholder="masukan  gelar belakang" value="{{ old('nama_e') }}" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" placeholder="masukan jabatan" value="{{ old('jabatan') }}" class="form-control">
                    </div>

                    <div class="form-group d-inline-block col-sm-3">
                        <label for="gol">Golongan/Ruang</label>
                        <input type="text" name="gol" id="gol" placeholder="masukan gololngan" value="{{ old('gol') }}" class="form-control">
                    </div>
                     <div class="form-group d-inline-block col-sm-4">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" class="form-control">
                            <option value="Personal" class="">Personal</option>
                            <option value="Instansi" class="">Instansi</option>
                        </select>
                    </div>
                     <div class="form-group d-inline-block col-sm-4">
                        <label for="status">status</label>
                        <select name="status" class="form-control">
                            <option value="Aktif" class="">Aktif</option>
                            <option value="Non Aktif" class="">Non Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>

                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
