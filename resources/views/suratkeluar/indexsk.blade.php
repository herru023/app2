@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexsk') }}" class="tip-bottom">Surat Keluar</a> </div>
    <h1>Surat Masuk</h1>
  </div>


  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Surat Keluar</h5>
          </div>
          <div class="widget-content nopadding">
				<div class="widget-box">
		            <table class="table table-bordered table-striped">
		              <thead>
		                <tr>
		                  <th>No.</th>
		                  <th>No Berkas</th>
		                  <th>Alamat Penerima</th>
		                  <th>Tanggal Surat</th>
		                  <th>Dari</th>
		                  <th>Prihal</th>
		                  <th>Aksi</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php $no = 0;?>
		              	@foreach($suratkeluar as $row)
		              	<?php $no++;?>
		              	 <tr>
		              	 	<td>{{ $no }}</td>
		              	 	<td>{{ $row->noberkas }}</td>
		              	 	<td>{{ $row->alamatpenerima }}</td>
		              	 	<td>{{ $row->tglsurat }}</td>
		              	 	<td>{{ $row->dari }}</td>
		              	 	<td>{{ $row->prihal }}</td>
		              	 	<td>asdf</td>
		              	 </tr>
		              	 @endforeach



		              </tbody>
		            </table>
		          </div>
		        </div>

        </div>
      </div>
    </div>
  </div>

</div>

@endsection