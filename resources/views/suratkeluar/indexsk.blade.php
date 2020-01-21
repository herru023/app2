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
            <form action="{{route('indexsk')}}" method="GET">             
              <div class="control-group">
                <div class="controls">
                  <select name="report">
                    <option value="Kasi Trantip">Kasi Trantip</option>
                    <option value="Kasi Pemqwer">kasi Pem</option>
                    <option value="Kasi Kessos">kasi Kessos</option>
                    <option value="Kasi Ekoband">kasi Ekobang</option>
                    <option value="Kasi Umpag">kasi Umpag</option>
                    <option value="Kasi Pip">kasi Pip</option>
                    <option value="Camat">Camat</option>
                  </select>
                  <button type="submit">Cari</button>
                </div>
              </div>
            </form>
          </div>
          <div class="widget-content nopadding">
            <table id="table_id" class="table table-bordered table-striped">
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

@endsection

@section('script')

<script>
  
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>

@endsection