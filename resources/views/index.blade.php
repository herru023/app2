@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="{{ route('index') }}"> <i class="icon-dashboard"></i>My Dashboard </a> </li>
        <li class="bg_ly"> <a href="{{ route('suratmasuk') }}"> <i class="icon-inbox"></i> Surat Masuk </a> </li>
        <li class="bg_lo"> <a href="{{ route('suratkeluar') }}"> <i class="icon-pencil"></i> Surat Keluar </a> </li>
        <li class="bg_ls"> <a href="{{ route('rekap') }}"> <i class="icon-th"></i> Rekapitulasi</a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-th-list"></i> Jadwal Camat</a> </li>   
<!--         <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li> -->
      </ul>
    </div>
    <hr>
    <div class="container-fluid">

    </div>
  </div>
</div>


@endsection