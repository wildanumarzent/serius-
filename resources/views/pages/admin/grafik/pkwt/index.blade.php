@extends('layouts.app')
@section('content')
     <!-- Page-Title -->
     <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Grafik Pkwt</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Grafik Pkwt</a></li>
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
                        <h4 class="m-t-0 header-title"><b>Grafik Pkwt</b></h4>
                        

                        <canvas id="PKWT" height="300"></canvas>
                    </div>
                </div>

               <div class="col-4">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Total Pkwt</h4>
                        <table id="" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Status Pkwt</th>
                                <th>Total PKWT</th>  
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>PKWT</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>PKWT 2</td>
                                <td>30</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Data Grafik Pkwt</h4>
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>NP</th>
                                <th>Nama</th>
                                <th>status Pkwt</th>
                                <th>Kontrak Ke</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Berakhir</th>
                                <th>Setatus perpanjang</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>5795</td>
                                <td>Fery Gamal</td>
                                <td>PKWT</td>
                                <td>2</td>
                                <td>1-Apr-2020</td>
                                <td>6-desember-2020</td>
                                <td><span class="badge badge-danger" > Belum Diperpanjang</span></td>
                            </tr>

                            <tr>
                                <td>H699</td>
                                <td>ARIF PERMANA</td>
                                <td>PKWT 2</td>
                                <td>1</td>
                                <td>1-Apr-2018</td>
                                <td>6-desember-2020</td>
                                <td><span class="badge badge-success" > Sudah DiPerpanjang</span></td>
                            </tr>

                            <tr>
                                <td>H701</td>
                                <td>DEDY HARISMAN SUHENDY</td>
                                <td>PKWT 2</td>
                                <td>1</td>
                                <td>8/14/2020</td>
                                <td>8/18/2020</td>
                                <td><span class="badge badge-danger" > Belum Diperpanjang</span></td>
                            </tr>

                            <tr>
                                <td>H703</td>
                                <td>DIAN EKA PERMANA</td>
                                <td>PKWT</td>
                                <td>2</td>
                                <td>8/14/2020</td>
                                <td>8/18/2020</td>
                                <td><span class="badge badge-danger" > Belum Diperpanjang</span></td>
                            </tr>
                            <<tr>
                                <td>H706</td>
                                <td>EKA IRHAM MAULANA</td>
                                <td>PKWT</td>
                                <td>3</td>
                                <td>8/14/2020</td>
                                <td>8/18/2020</td>
                                <td><span class="badge badge-success" > sudah Diperpajang</span></td>
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
                labels: ["PKWT", "PKWT 2", "PKWT KCA 2", "PKWT Sekretaris", "PKWT (NP lama)"],
                datasets: [
                    {
                        label: "Grade Pangkat",
                        backgroundColor: "rgba(126, 87, 194, 0.3)",
                        borderColor: "#7e57c2",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(126, 87, 194, 0.6)",
                        hoverBorderColor: "#7e57c2",
                        data: [70, 50, 40, 60, 80]
                    }
                ]
            };
            this.respChart($("#PKWT"), "Bar", barChart);

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