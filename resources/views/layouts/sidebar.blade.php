<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul id="nav">

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="{{url('/home')}}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>
                <li class="text-muted menu-title">Master Data</li>
                {{-- master data organi --}}
                @can('master_data', \App\Models\Jabatan::class)
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog fa-spin"></i><span> Master Data</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                            <li><a href="{{url('/jabatan')}}"><i class="fa fa-black-tie"></i>Jabatan</a></li>
                        <li><a href="{{ url('/pangkat') }}"><i class="fa fa-handshake-o"></i>Pangkat</a></li>
                        <li><a href="{{ url('/unit') }}"><i class="fa fa-building-o"></i>Unit</a></li>
                    </ul>
                </li>
                @endcan

                {{-- master data pkwt --}}
                {{-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog fa-spin"></i><span> Master Data Pkwt </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li class=>
                            <a href="{{url('/status')}}" class="waves-effect"><span><i class="fa fa-venus-mars "></i> Status </span></a>
                        </li>
                        <li><a href="{{ url('/nomorSp') }}"><i class="fa fa-wpforms"></i>Nomor Sp</a></li>
                    </ul>
                </li> --}}

                <li class="text-muted menu-title">More</li>
                {{-- data karyawan --}}
                <li class="has_sub">
                 <a href="javascript:void(0);"  class="waves-effect"><i class="fa fa-vcard-o"></i><span>Data Karyawan</span><span class="menu-arrow"></span></a>
                 <ul class="list-unstyled">
                    <li> <a href="{{ url('/karyawan/show') }}" id="refres" class="waves-effect"><i class="fa fa-id-card-o"></i><span>Karyawan Organik</span></a></li>
                    <li> <a href="{{ url('/karyawan/showPkwt') }}" class="waves-effect"><i class="fa fa-id-card"></i><span>Karyawan PKWT</span></a></li>
                    <li> <a href="{{ url('/gradeKaryawan') }}" class="waves-effect"><i class="fa fa-font"></i><span>Grade Karyawan</span></a></li>
                </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-text-o"></i><span class="menu-arrow"></span><span> Rekapitulasi </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{'/grafikLevel'}}"><i class="ti-bar-chart"></i>Level</a></li>
                        <li><a href="{{'/grafikJabatan'}}"><i class="fa fa-bar-chart-o"></i>Jabatan</a></li>
                        <li><a href="{{'/grafikPangkat'}}"><i class="fa fa-line-chart"></i> Pangkat</a></li>
                        <li><a href="{{'/grafikPkwt'}}"><i class="fa fa-file-text-o"></i>Pkwt</a></li>
                        {{-- <li><a href="{{'/grafikPkwt'}}"><i class="fa fa-line-chart"></i> Data PKWT</a></li> --}}
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="{{url('/promosi')}}" class="waves-effect"><i class="fa fa-bullhorn"></i> <span> Promosi Karyawan </span></a>
                </li>
                 <li class="has_sub">
                    <a href="{{url('/pensiun')}}" class="waves-effect"><i class="fa fa-suitcase"></i> karyawan Pensiun </span></a>
                </li>
               
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>