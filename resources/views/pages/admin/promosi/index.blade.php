@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Promosi Karyawan</h4>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Jabatan</a></li> --}}
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/karyawan/add') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Promosi</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Promosi Karyawan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Np</th>
                            <th>Nama</th>
                            <th>Nilai NKI</th>
                            <th>Cuti Dokter</th>
                            <th>Sertifikasi</th>
                            <th>Setatus Promosi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>7314</td>
                            <td>Galih Firman Maulana</td>
                            <td><span class="badge badge-primary">20</span></td>
                            <td><span class="badge badge-info">7</span></td>
                            <td><span class="badge badge-success">OP 1</span></td>
                            <td><span class="badge badge-danger">blum di promosikan</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                         <tr>
                             <td>2</td>
                            <td>7463</td>
                            <td>Yusroni</td>
                            <td><span class="badge badge-primary">10</span></td>
                            <td><span class="badge badge-info">6</span></td>
                            <td><span class="badge badge-success">Petugas Dasar</span></td>
                            <td><span class="badge badge-bakan">Sudah di promosikan</span></td>
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