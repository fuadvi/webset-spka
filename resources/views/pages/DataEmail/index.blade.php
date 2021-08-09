@extends('layouts.index')

@push('style')
         <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
@endpush

@section('content')
    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

                   <!-- Topbar Search -->
          {{-- <form action="{{ route('data-email.index') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}

           @if (Auth::user()->level == 'admin')
            <a href="{{ route('data-email.create') }}" class="btn btn-sm btn-primary shadow-sm mr-2">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Email
            </a>
            <a href="{{ route('view') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Download PDF
            </a>
            @endif
        </div>

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered" id="email-table"  width="100%" cellspacing="0">
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
                            <th>Status</th>
                             @if (Auth::user()->level == 'admin')
                                <th>Akasi</th>
                             @endif
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
@endsection


@push('script')
    <script>
$(function() {
    $('#email-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'list',
        columns: [
            { data: 'kd_dinas', name: 'kd_dinas' },
            { data: 'ni', name: 'ni' },
            { data: 'nama_p', name: 'nama_p' },
            { data: 'gd', name: 'gd' },
            { data: 'gb', name: 'gb' },
            { data: 'hp', name: 'hp' },
            { data: 'nama_e', name: 'nama_e' },
            { data: 'jabatan', name: 'jabatan' },
            { data: 'gol', name: 'gol' },
            { data: 'tanggal', name: 'tanggal' },
            { data: 'status', name: 'status' }
        ]
    });
});
</script>
@endpush

