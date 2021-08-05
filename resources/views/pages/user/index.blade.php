@extends('layouts.index')

@section('content')
 <div class="container-fluid">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">DATA USER</h1>
            {{-- <a href="{{ route('spka.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data SKPA
            </a> --}}
        </div>

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>email</th>
                            <th>level</th>
                            <th>Akasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->level}}</td>
                                {{-- <td>
                                    <a href="{{ route('spka.edit',$item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('spka.destroy',$item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $items->links() }}
            </div>
        </div>

        </div>
@endsection
