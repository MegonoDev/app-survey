@extends('layouts/eonesia/b-n/master') 
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Kota</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Event</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('layouts.eonesia.b-n.patrials._flash')
        <div class="row">
            <!-- column -->
            <div class="col-lg-4 col-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kota</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                @foreach ($roles as $role )
                                <tbody>
                                    <tr>
                                        <td>{{  $no++ }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['role.destroy', $role->id], 'method' =>
                                            'DELETE'])!!}
                                            <a
                                                href="{{ route ('role.edit',$role->id) }}"
                                                class="btn btn-success  waves-effect waves-light">
                                                <i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <button type="submit" class="btn btn-danger  waves-effect waves-light">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $roles->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="ccol-lg-8 col-md-6 m-t-20">
                <div class="card">
                    <div class="card-body">
                       @if(empty($rolesedit))
                       @include('backend.role.create')
                       @else
                       @include('backend.role.edit')
                       @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection