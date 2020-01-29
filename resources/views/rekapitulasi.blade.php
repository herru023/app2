@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> </div>
    <h1>Rekapitulasi</h1>
  </div>


  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Menu Rekap</h5>
          </div>

	      <ul class="quick-actions">
	        <li class="bg_ly"> <a href="{{ route('indexsm') }}"> <i class="icon-inbox"></i> Surat Masuk </a> </li>
	        <li class="bg_lo"> <a href="{{ route('indexsk') }}"> <i class="icon-inbox"></i> Surat Keluar </a> </li>
          <li class="bg_lb"> <a href="{{ route('indexc') }}"> <i class="icon-inbox"></i>Cuti Tahunan </a> </li>
          <li class="bg_ly"> <a href="{{ route('indexc') }}"> <i class="icon-inbox"></i>Laporan Kasi </a> </li>
	        <li class="bg_ls"> <a href="{{ route('indexjcamat') }}"> <i class="icon-inbox"></i> Camat </a> </li>
	      </ul>

	      <br><br><br><br>

        </div>
      </div>
    </div>
  </div>

</div>



@endsection