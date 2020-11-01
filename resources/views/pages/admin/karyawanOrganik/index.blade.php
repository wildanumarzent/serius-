@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Organik</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">aryawan Organik</a></li>
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
                    <h4 class="m-t-0 header-title">Data Karyawan Organik</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NP</th>
                            <th>Full Name</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal MPP</th>
                            <th>Tanggal Pensiun</th>
                            <th>Jabatan</th>
                            <th>level</th>
                            <th>Job Grade</th>
                            <th>Kode Bagan</th>
                            <th>Unit Kerja</th>
                            <th>Pangkat</th>
                            <th>Pangkat</th>
                            <th>Grade Pangkat</th>
                            <th>opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>5795</td>
                            <td>Fery Gamal</td>
                            <td>27-Feb-1967</td>
                            <td>1-Feb-1991</td>
                            <td><h6>1-Jan-2020 <span class="badge badge-danger" > Akan Pensiun</span></h6></td>
                            <td>1-Mar-2021</td>
                            <td>Auditor Muda</td>
                            <td>AM</td>
                            <td>14</td>
                            <td>11B00</td>
                            <td>Biro Audit Operasional dan Teknologi Informasi </td>
                            <td>Asisten- Manager</td>
                            <td>AM</td>
                            <td>15</td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                          <tr>
                              <td>2</td>
                            <td>6709</td>
                            <td>Nurwandi</td>
                            <td>29-Mar-1981</td>
                            <td>1-jan-2006</td>
                            <td><h6>1-jan-2037<span class="badge badge-danger" ></span></h6></td>
                            <td>1-Apr-2037</td>
                            <td>Kepala Biro Kebijakan dan Perencanaan Audit</td>
                            <td>KBPA</td>
                            <td>17</td>
                            <td>11C00</td>
                            <td>Biro Audit Operasional dan Teknologi Informasi </td>
                            <td>Asisten- Manager</td>
                            <td>AM</td>
                            <td>15</td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                         <tr>
                             <td>3</td>
                            <td>6840</td>
                            <td>Srey Mariati Hutabarat</td>
                            <td>21-Oct-1983</td>
                            <td>16-jul-2010</td>
                            <td><h6>1-Aug-2039 <span class="badge badge-danger" ></span></h6></td>
                            <td>1-Nov-2039</td>
                            <td>Coordinator of Marketing</td>
                            <td>COM</td>
                            <td>14</td>
                            <td>21C00</td>
                            <td>Marketing Department </td>
                            <td>Asisten- Manager</td>
                            <td>AM</td>
                            <td>15</td>
                            <td><a href="http://localhost:8000/karyawan/edit" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>
                            </td>
                        </tr>

                          <tr>
                              <td>4</td>
                            <td>6064</td>
                            <td>Rismanda Yazar</td>
                            <td>5-Dec-1967</td>
                            <td>1-Jul-1991</td>
                            <td><h6>1-Oct-2020 <span class="badge badge-danger">Akan Pensiun</span></h6></td>
                            <td>16-Des-2020</td>
                            <td>Kepala Biro Kebijakan dan Perencanaan Audit</td>
                            <td>KBPA</td>
                            <td>17</td>
                            <td>11C00</td>
                            <td>Biro Audit Operasional dan Teknologi Informasi </td>
                            <td>Asisten- Manager</td>
                            <td>AM</td>
                            <td>15</td>
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