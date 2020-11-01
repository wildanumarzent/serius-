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
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/karyawan/add') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Grade</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Grade Karyawan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NP</th>
                            <th>Full Name</th>
                            <th>Kedisiplinan</th>
                            <th>Hasil Kerja</th>
                            <th>Kolaborasi</th>
                            <th>Interaktif</th>
                            <th>Tanggung Jawab</th>    
                            <th>Nilai NKI</th>
                            <th>setatus Sertifikasi</th>
                            <th>opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>5795</td>
                            <td>Fery Gamal</td>
                            <td>Bagus</td>
                            <td>Bagus</td>
                            <td>bisa</td>
                            <td>interaktif</td>
                            <td>tanggung jawab</td>
                            <td><a href="{{url('nilaiNki')}}" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i>Detail NKI</a></td>
                            <td><a href="{{url('sertifikasi')}}" class="btn btn-info btn-sm"><i class="fa fa-check-square-o"></i> sudah Tersertifikasi</a></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                         <tr>
                             <td>2</td>
                            <td>G482</td>
                            <td>RENY NOVIANTI</td>
                            <td>Bagus</td>
                            <td>Bagus</td>
                            <td>bisa</td>
                            <td>interaktif</td>
                            <td>tanggung jawab</td>
                            <td><a href="{{url('nilaiNki')}}" class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i>Detail NKI</a></td>
                            <td><a href="{{url('sertifikasi')}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Belum Tersertifikasi</a></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
    
@endsection