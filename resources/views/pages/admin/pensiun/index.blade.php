@extends('layouts.app')

@section('title')
    pensiun
@endsection


@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Pensiun</h4>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Jabatan</a></li> --}}
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Karyawan Pensiun</h4>
                    <button class="btn btn-primary mb-3" type="button">Kurang dari 3 Bulan</button> 
                    <button class="btn btn-info mb-3" type="button">Kurang dari 1 Tahun</button>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Unit kerja</th>
                            <th>Pangkat</th>
                            <th>Sisa masa Tugas</th>
                            <th>opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>PRAMONO</td>
                            <td>Anak Perusahaan</td>
                            <td><span class="badge badge-primary">Senior VP </span></td>
                            <td><span class="badge badge-success">0</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>SUSATYO ADI</td>
                            <td>Biro Komunikasi Perusahaan</td>
                            <td><span class="badge badge-primary">Asisten Spv (12) </span></td>
                            <td><span class="badge badge-success">0</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>DIAN NURIZA</td>
                            <td>Departemen Pendidikan dan Pelatihan</td>
                            <td><span class="badge badge-primary">Staff-2 (8) </span></td>
                            <td><span class="badge badge-success">0</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>WINARTO</td>
                            <td>Departemen Persiapan,Cetak dan Pemeliharaan Produk Non Uang</td>
                            <td><span class="badge badge-primary">Asisten VP (18) </span></td>
                            <td><span class="badge badge-success">1</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>M.NURDJEHAN A.</td>
                            <td>Program Kemitraan dan Bina Lingkungan</td>
                            <td><span class="badge badge-primary">Sub-manager (14) </span></td>
                            <td><span class="badge badge-success">2</span></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>SUNARYO</td>
                            <td>Seksi  Cetak Nomor</td>
                            <td><span class="badge badge-primary">Deputi Manager (16) </span></td>
                            <td><span class="badge badge-success">3</span></td>
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