@extends('layouts/eonesia/b-n/master')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('layouts.eonesia.b-n.patrials._flash')
        <div class="row">
            <div class="col-lg-8 col-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data User</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Handphone</th>
                                        <th>Dealer</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                @foreach ($users as $user )
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->no_handphone }}</td>
                                        <td>{{ $user->dealereo->kode_dealer }}</td>
                                        <td>{{ $user->role->nama }}</td>
                                        </td>
                                        <td>
                                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' =>'DELETE'])!!}
                                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route ('users.edit',$user->id) }}" class="btn btn-success  waves-effect waves-light">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <button type="submit" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger  waves-effect waves-light">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="ccol-lg-4 col-md-4 m-t-20">
                <div class="card">
                    <div class="card-body">
                        @if(!empty($edit))
                        @include('backend.user.edit')
                        @else
                        @include('backend.user.create')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
