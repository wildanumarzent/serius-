      <footer class="footer text-right">
                    &copy; 2020 Peruri. Percetakan Uang Republik Indonesia
         </footer>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

         <!-- Chart JS -->
         <script src="{{asset('plugins/chart.js/Chart.bundle.min.js')}}"></script>
         <script src="{{asset('assets/pages/jquery.chartjs.init.js')}}"></script>
       

        {{-- dasboard --}}
        <script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>
            
        <script src="{{asset('plugins/jquery-knob/jquery.knob.js')}}"></script>

        {{-- <script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script> --}}
        {{-- /dashboard --}}
       
        <script src="{{asset('assets/pages/jquery.form-pickers.init.js')}}"></script>
        <!-- Required datatable js -->
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
         <!-- Responsive examples -->
         <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
         <script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

         <script type="text/javascript" src="{{asset('plugins/d3/d3.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('plugins/c3/c3.min.js')}}"></script>
       
           
         <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        

        {{-- dynamic --}}
        {{-- <script src="{{asset('plugins/jquery.ba-hashchange.min.js')}}"></script>
        <script src="{{asset('assets/js/dynamicpage.js')}}"></script> --}}

        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>
        
        
         <!--Form Wizard-->
         <script src="{{asset('plugins/jquery.steps/js/jquery.steps.min.js')}}" type="text/javascript"></script>
         <script type="text/javascript" src="{{asset('plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
 
         <!--wizard initialization-->
         <script src="{{asset('assets/pages/jquery.wizard-init.js')}}" type="text/javascript"></script>
            
        

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.serializeJSON/3.1.0/jquery.serializejson.min.js "></script>  --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    {{-- @if ($url== 'karyawan')
        @include('backup.pages.admin.Karyawan.organik.script') --}}
   {{-- @elseif($url == 'karyawanPkwt')
        @include('pages.admin.Karyawan.pkwt.script') --}}
    {{-- @elseif($url == 'pangkat')
        @include('backup.pages.admin.menej_Pangkat.pangkat.script')
    @elseif($url == 'unit')
        @include('backup.pages.admin.menej_Pangkat.unit.script') --}}
    {{--@elseif($url  =='position')
        @include('pages.admin.menej_Pangkat.Position.script')--}}
    {{-- @elseif($url =='jabatan')
        @include('backup.pages.admin.menej_Pangkat.jabatan.script') --}}
   {{--}} @elseif($url =='grafikJabatan')
        @include('pages.admin.grafik.grafikJabatan.script')
    @elseif($url =='grafikPangkat')
        @include('pages.admin.grafik.grafikPangkat.script')
    @elseif($url =='grafikPkwt')
        @include('pages.admin.grafik.grafikPkwt.script')
    @elseif($url =='home')
        @include('Home.script')
    @elseif($url =='kodeBagan')
        @include('pages.admin.master_pkwt.kodeBagan.script')
    @elseif($url =='nomorSp')
        @include('pages.admin.master_pkwt.nomorSp.script')
    @elseif($url =='statusPkwt')
        @include('pages.admin.master_pkwt.status.script')
    @elseif($url =='unitPkwt')
        @include('pages.admin.master_pkwt.unit.script') --}}

    {{-- @elseif($url=='grafik'){
        @include('pages.admin.grafik.script')
    } --}}
    {{-- @else --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
                $('#responsive-datatable').DataTable();
            } );
        </script>
    {{-- @endif --}}

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });

            $(".knob").knob();

        });
    </script>