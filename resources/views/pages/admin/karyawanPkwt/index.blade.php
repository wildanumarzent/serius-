@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Pkwt</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Karyawan Pkwt</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/karyawan/add') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Karyawan</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Karyawan Pkwt</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NP</th>
                            <th>Full Name</th>
                            <th>Unit Kerja</th>
                            <th>Kode Unit</th>
                            <th>Setatus Perpanjang</th>
                            <th>Setatus</th>
                            <th>Masa Penugasan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>G482</td>
                            <td>RENY NOVIANTI</td>
                            <td>Risk Management</td>
                            <td>13000</td>
                            <td><span class="badge badge-danger">segera perpanjang</span> <br>ket: 2 minggu lagi akan habis</td>
                            <td>PKWT</td>
                            <td><h6><span class="badge badge-warning" ></span></h6><a href="{{url('/karyawan/detailtugas')}}" class="btn btn-primary btn-sm">Detail Penugasan</a></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>H522</td>
                            <td>SUGIO PRANOTO</td>
                            <td>Seksi Cera</td>
                            <td>32000</td>
                            <td><span class="badge badge-success">sudah di perpanjang</span><br></td>
                            <td>PKWT 2</td>
                            <td><h6><span class="badge badge-warning" ></span></h6><a href="{{url('/karyawan/detailtugas')}}" class="btn btn-primary btn-sm">Detail Penugasan</a></td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>H524</td>
                            <td>BUDIYANTO .</td>
                            <td>Seksi Cera</td>
                            <td>32000</td>
                            <td><span class="badge badge-dark">sedang menjalankan kontrak ke 1</span> </td>
                            <td>PKWT 2  </td>
                            <td><h6><span class="badge badge-warning" ></span></h6><a href="{{url('/karyawan/detailtugas')}}" class="btn btn-primary btn-sm">Detail Penugasan</a></td>
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