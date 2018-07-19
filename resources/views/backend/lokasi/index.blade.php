@extends('layouts/eonesia/b-n/master') 
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Lokasi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Lokasi</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('layouts.eonesia.b-n.patrials._flash')
        <div class="row">
            <div class="col-lg-7 col-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Lokasi Test Drive</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                @foreach ($locations as $location )
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $location->nama }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['lokasi-kota.destroy', $location->id], 'method' =>'DELETE'])!!}
                                            <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route ('lokasi-kota.edit',$location->id) }}" class="btn btn-success  waves-effect waves-light">
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
                            <hr>
                    <div class="float-left"> {{ $locations->links() }}</div><div class="float-right"><span class="badge badge-dark"> Jumlah Data : <b>{{ $totalLokasi }} </b></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ccol-lg-4 col-md-5 m-t-20">
                <div class="card">
                    <div class="card-body">
                        @if(!empty($edit))
                        @include('backend.lokasi.edit') 
                        @else
                        @include('backend.lokasi.create') 
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection