@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexsm') }}" class="tip-bottom">Surat Masuk</a> </div>
    <h1>Surat Masuk</h1>
  </div>


  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Surat Masuk</h5>
          </div>
          <div class="widget-content nopadding">
            <table id="table_id" class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Surat dari</th>
                  <th>Tanggal Surat</th>
                  <th>Nomor Surat</th>
                  <th>Tanggal diterima</th>
                  <th>Untuk</th>
                  <th>Prihal</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
              	<?php $no = 0;?>
              	@foreach($suratmasuk as $row)
              	<?php $no++;?>
              	 <tr>
              	 	<td>{{ $no }}</td>
              	 	<td>{{ $row->suratdari }}</td>
              	 	<td>{{ $row->tglsurat }}</td>
              	 	<td>{{ $row->nosurat }}</td>
              	 	<td>{{ date_format ($row->created_at, 'd-m-Y') }}</td>
              	 	<td>{{ $row->untuk }}</td>
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
@endsection