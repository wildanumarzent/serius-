@extends('layouts.app')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
            {{-- card --}}
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box fadeInDown animated">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/organik.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{$count_karyawan}}</b></h3>
                            <p class="text-muted mb-0">Total Organik</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/pkwt.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">280</b></h3>
                            <p class="text-muted mb-0">Total PKWT</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/pegawai.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">50</b></h3>
                            <p class="text-muted mb-0">Total pensiun</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="widget-bg-color-icon card-box">
                        <div class="bg-icon bg-icon-purple pull-left">
                            <i class="md md-remove-red-eye text-purple"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">64,570</b></h3>
                            <p class="text-muted mb-0">Today's Visits</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            {{-- /card --}}

            {{-- grafich --}}
            <div class="row">
                    <div class="col-lg-8">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b> GRADE</b></h4>  

                            <canvas id="pie" height="260"></canvas>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b> ORGANIK / PKWT</b></h4>
                          

                            <canvas id="karyawan" height="260"></canvas>
                        </div>
                    </div>
                <!-- End row -->
            </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Grafik Karyawan Yang akan pensiun</b></h4>

                    <canvas id="dashboard" height="300"></canvas>
                </div>
            </div>
            {{-- /grafich --}}

            <div class="col-lg-3">
                <div class="card-box">
                    <h6>Karyawan Yang akan pensiun </h6>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah Pensiun</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>2020</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>2022</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>2023</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2024</td>
                            <td>82</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Grafik Pangkat</b></h4>

                    <canvas id="pangkat" height="300"></canvas>
                </div>
            </div>  
             <div class="col-lg-4">
                <div class="card-box">
                    <h6>Data Pangkat </h6>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Pangkat</th>
                            <th>Jumlah karyawan</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>Staf-3</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>Sub-Manager</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>Supervisor</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Staf-4</td>
                            <td>81</td>
                        </tr>
                        <tr>
                            <td>TPBW</td>
                            <td>56</td>
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
 
    console.log('Home');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    

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
     
     //Pie chart KARYAWAN
     var pieChart = {
                labels: [
                    "Organik",
                    "Pkwt",
                   
                ],
                datasets: [
                    {
                        data: [50, 17],
                        backgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            
                        ],
                        hoverBackgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                           
                        ],
                        hoverBorderColor: "#fff"
                    }]
            };
            this.respChart($("#karyawan"),'Pie',pieChart);
   
            
    //barchart Pensiun
    var barChart = {
                labels: ["2020", "2021", "2023", "2024", "2025", "2026", "2027"],
                datasets: [
                    {
                        label: "Karyawan Pensiun",
                        backgroundColor: "#7e57c2",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#34d3eb",
                        hoverBorderColor: "#34d3eb",
                        data: [65, 59, 80, 81, 56, 55, 40,20]
                    }
                ]
            };
    this.respChart($("#dashboard"),'Bar',barChart);
    //barchart Pangkat
    var barChart = {
                labels: ["Staf-3", "Sub-Manager", "Supervisor", "Staf-4","TPBW"],
                datasets: [
                    {
                        label: "Pangkat",
                        backgroundColor: "#34d3eb",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#7e57c2" ,
                        hoverBorderColor: "#7e57c2",
                        data: [65, 59, 80, 81, 55, 40]
                    }
                ]
            };
    this.respChart($("#pangkat"),'Bar',barChart);
    
    //Pie chart
    var pieChart = {
                labels: [
                    "Junior",
                    "Middle",
                    "Senior"
                ],
                datasets: [
                    {
                        data: [50, 17, 33],
                        backgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            "#ebeff2"
                        ],
                        hoverBackgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            "#ebeff2"
                        ],
                        hoverBorderColor: "#fff"
                    }]
            };
            this.respChart($("#pie"),'Pie',pieChart);
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
