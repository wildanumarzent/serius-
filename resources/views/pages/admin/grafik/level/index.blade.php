@extends('layouts.app')
@section('content')
     <!-- Page-Title -->
     <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Grafik Level</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Grafik Level</a></li>
            </ol>

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Unit Kerja</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            {{-- <option value="" selected>Pilih pangkat</option>
                            @foreach ($unit as $units)
                            <option value="{{ $units->id }}" selected>{{ $units->unit_kerja }}</option>
                            @endforeach --}}
                            {{-- <option value="">pilih unit kerja</option> --}}
                            <option value="">Seksi Cetak Pita Cukai</option>
                            <option value="">Unit Cetak Pita Cukai MMEA (Shift - 1,2)</option>
                            <option value="">Unit Cetak Pita Cukai HT (Shift – 1, 2)</option>
                        </select>
                    </div>

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Level</b></h4>
                        

                        <canvas id="level" height="300"></canvas>
                    </div>
                </div>

               <div class="col-4">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Total Karyawan</h4>
                        <table id="" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nama Level</th>
                                <th>Total PKWT</th>  
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>OP 1</td>
                                <td>2</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Data Grafik Level</h4>
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>NP</th>
                                <th>Nama</th>
                                <th>Nama Jabatan</th>
                                <th>Level</th>
                                <th>Masa Jabatan</th>
                                <th>Tanggal Pensiun</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>7159</td>
                                <td>Yanto Gunawan </td>
                                <td>Operator Mesin Cetak Offset Pita Cukai Tingkat I</td>
                                <td>OP 1</td>
                                <td><span class="badge badge-warning">2 tahun</span></td>
                                <td>1-Feb-2031<br> 
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>7403</td>
                                <td>Sadikin </td>
                                <td>Operator Mesin Cetak Offset Pita Cukai Tingkat I</td>
                                <td>OP 1</td>
                                <td><span class="badge badge-warning">2 tahun</span></td>
                                <td>1-May-2038<br> 
                                   
                                </td>
                            </tr>
                           

                            {{-- <tr>
                                <td>6709</td>
                                <td>Nurwandi</td>
                                <td>kadev</td>
                                <td>1-Apr-2037</td>
                            
                            </tr>

                            <tr>
                                <td>6840</td>
                                <td>Srey Mariati Hutabarat</td>
                                <td>Kasek</td>
                                <td>1-Nov-2039</td>
                            </tr>

                            <tr>
                                <td>6064</td>
                                <td>Rismanda Yazar</td>
                                <td>Kaun</td>
                                <td>16-Des-2020</td>
                            </tr>

                            <tr>
                                <td>7212</td>
                                <td>pujiyoto</td>
                                <td>Sekretaris-I</td>
                                <td>16-Des-2020</td>
                            </tr>  --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection