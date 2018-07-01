@extends('layouts/eonesia/b-n/master') 
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Event Eonesia</h4>
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
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="{{ route('search') }}">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Verifikasi Kode</label>
                            <div class="col-md-12">
                                <input type="text" name="kode" placeholder="Masukan Kode & Enter" class="form-control form-control-line">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Event Eonesia</h4>
                        <h6 class="card-subtitle">
                                <a href="{{ route('event.create') }}" class="btn btn-primary btn-md waves-effect waves-light">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Tambah Kegiatan</a>
                        </h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Penyelenggara</th>
                                        <th>Nama Event</th>
                                        <th>Start</th>
                                        <th>Finish</th>
                                        <th>keterangan</th>
                                        <th>Register Member</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                @foreach ($activities as $event )
                                <tbody>
                                    <tr>
                                        <td>{{  $no++ }}</td>
                                        <td>{{ $event->penyelenggara }}</td>
                                        <td>{{ $event->nama_event }}</td>
                                        <td>{{ $event->MulaiEvent }}</td>
                                        <td>{{ $event->BerakhirEvent }}</td>
                                        <td>
                                        <span class="label label-warning">{{ $event->keterangan }}</span>
                                        </td>
                                        <td>
                                            <a href="{{ route ('event.show',$event->id) }}">
                                            <span class="label label-info">{{ $event->members->count() }} member</span>
                                            </a>
                                        </td>
                                        <td>
                                            {!! Form::open(['route' => ['event.destroy', $event->id], 'method' => 'DELETE'])!!}
                                            <a href="{{ route ('event.edit',$event->id) }}" class="btn btn-success  waves-effect waves-light">
                                            <i class="fa fa-edit" aria-hidden="true"></i>Edit</a>
                                            <button type="submit" class="btn btn-danger  waves-effect waves-light">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                              Delete
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    {{ $activities->links() }}
                                </tbody>
                                @endforeach
                            </table>
                            {{ $activities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection