@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Grade Karyawan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Grade Karyawan</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
       
        <!-- Basic Form Wizard -->
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Detail Sertifikasi</b></h4>
        
                    <form id="basic-form" action="#">
                        <div>
                            
                            <h3>No Sertifikat LSP</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>No  :</b> 1 </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </section>

                                <h3>Sertifikasi</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>Np : </b> 5795</li>
                                            <br>
                                            <li><b>nama : </b> Fery Gamal</li>
                                            <br>
                                            <li><b>sertifat : </b> OP 1</li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- End row -->
    </div>
</div>
    
@endsection