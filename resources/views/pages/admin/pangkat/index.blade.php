@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Pangkat</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pangkat</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/karyawan/add') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Pangkat</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Pangkat</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pangkat</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                       <tr>
                           <td>1</td>
                                <td>Asisteb Spv</td>
                                 <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Asisten Manager</td>
                                 <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Senior Spv</td>
                                <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                            <tr>
                                <td>4</td>
                                <td>senior Staff</td>
                               <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Staff-1</td>
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