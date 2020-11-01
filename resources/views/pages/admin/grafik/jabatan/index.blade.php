@extends('layouts.app')
@section('content')
     <!-- Page-Title -->
     <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> Grafik Jabatan</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Grafik Jabatan</a></li>
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
                            <option value="">Unit Cetak Materai (Shift – 1, 2)</option>
                            <option value="">Unit Cetak Dokumen Sekuriti</option>
                            <option value="">Seksi Khazanah Produksi Akhir </option>
                          
                        </select>
                    </div>

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Jabatan</b></h4>
                        

                        <canvas id="jabatan" height="300"></canvas>
                    </div>
                </div>

               <div class="col-4">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Total Karyawan</h4>
                        <table id="" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nama Jabatan</th>
                                <th>total Karyawan</th>  
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Auditor Dasar</td>
                                <td>20</td>
                            </tr>
                            
                            <tr>
                                <td>Sekretaris II</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>Staff Komunikasi II</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Sales Supervisor 1</td>
                                <td>17</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Data Karyawan Jabatan</h4>
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>NP</th>
                                <th>Nama</th>
                                <th>jabtan</th>
                                <th>Job Grade</th>
                                <th>Tanggal Pensiun jabatan</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>5795</td>
                                <td>Fery Gamal</td>
                                <td>Komandan Regu</td>
                                <td>12</td>
                                <td >1-Apr-2039</td>
                            </tr>

                            <tr>
                                <td>6709</td>
                                <td>Nurwandi</td>
                                <td>Auditor Dasar</td>
                                <td>14</td>
                                <td>1-Apr-2037</td>
                            
                            </tr>

                            <tr>
                                <td>6840</td>
                                <td>Srey Mariati Hutabarat</td>
                                <td>Sekretaris II</td>
                                <td>15</td>
                                <td>1-Nov-2039</td>
                            </tr>

                            <tr>
                                <td>6064</td>
                                <td>Rismanda Yazar</td>
                                <td>Staff Komunikasi II</td>
                                <td>16</td>
                                <td>16-Des-2020</td>
                            </tr>

                            <tr>
                                <td>7212</td>
                                <td>pujiyoto</td>
                                <td>Sales Supervisor 1</td>
                                <td>18</td>
                                <td>17-Des-2020</td>
                            </tr> 

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        !function($) {
    "use strict";
    var ChartJs = function() {};
    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    ChartJs.prototype.init = function() {

     //grafik jabatan
            var barChart = {
                labels: ["14", "15", "16", "17", "18"],
                datasets: [
                    {
                        label: "Jumlah",
                        backgroundColor: "rgba(126, 87, 194, 0.3)",
                        borderColor: "#7e57c2",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(126, 87, 194, 0.6)",
                        hoverBorderColor: "#7e57c2",
                        data: [80, 20, 40, 15, 30]
                    }
                ]
            };
            this.respChart($("#jabatan"), "Bar", barChart);

    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs
}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.ChartJs.init()
    }(window.jQuery);
</script>
@endpush