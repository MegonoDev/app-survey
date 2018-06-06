@extends('layouts/eonesia/b-n/master')
@section('content') 
<div id = "page-wrapper" > 
 <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                    <form method="POST" action="{{ route('search') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Verifikasi Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="Verifikasi Kode ......">
                    </div>
                        <a href="#" class="btn btn-primary">GOooo ... Ooo ...</a>
                    </form>
                </p>
            </div>
        </div>    
        <hr>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">

                    <div class="white-box analytics-info">
                        <h3 class="box-title">EVENT TERSEDIA</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right">
                                <i class="ti-arrow-up text-success"></i>
                                <span class="counter text-success">659</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">EVENT SELESAI</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right">
                                <i class="ti-arrow-up text-purple"></i>
                                <span class="counter text-purple">869</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">REGISTER EVENT</h3>
                        <ul class="list-inline two-part">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right">
                                <i class="ti-arrow-up text-info"></i>
                                <span class="counter text-info">911</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection