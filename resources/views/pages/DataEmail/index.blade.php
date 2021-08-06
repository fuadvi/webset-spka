@extends('layouts.index')

@section('content')
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                   <!-- Topbar Search -->
          <form action="{{ route('data-email.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

           @if (Auth::user()->level == 'admin')
            <a href="{{ route('data-email.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Email
            </a>
            @endif
        </div>

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Dinas</th>
                            <th>NIP/NHI</th>
                            <th>Nama PenggunaI</th>
                            <th>Gelar Depan</th>
                            <th>Gelar Belakang</th>
                            <th>Nomor HP</th>
                            <th>Nama Email</th>
                            <th>Jabatan Lengkap</th>
                            <th>Gol/Ruang</th>
                            <th>Tanggal Daftar</th>
                             @if (Auth::user()->level == 'admin')
                                <th>Akasi</th>
                             @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->kd_dinas }}</td>
                                <td>{{ $item->ni}}</td>
                                <td>{{ $item->nama_p}}</td>
                                <td>{{ $item->gd}}</td>
                                <td>{{ $item->gb}}</td>
                                <td>{{ $item->hp}}</td>
                                <td>{{ $item->nama_e}}</td>
                                <td>{{ $item->jabatan}}</td>
                                <td>{{ $item->gol}}/{{ $item->jenis }}</td>
                                <td>{{ $item->tanggal}}</td>
                                 @if (Auth::user()->level == 'admin')
                                 <td>
                                     <a href="{{ route('data-email.edit',$item->id) }}" class="btn btn-info">
                                         <i class="fa fa-pencil-alt"></i>
                                     </a>

                                     <form action="{{ route('data-email.destroy',$item->id) }}" method="post" class="d-inline">
                                         @csrf
                                         @method('delete')

                                         <button class="btn btn-danger">
                                             <i class="fa fa-trash"></i>
                                         </button>
                                     </form>
                                 </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="11">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $items->links() }}
        </div>

    </div>
@endsection
