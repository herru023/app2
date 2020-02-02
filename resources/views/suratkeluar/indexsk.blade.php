@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexsk') }}" class="tip-bottom">Surat Keluar</a> </div>
    <h1>Surat Masuk</h1>
  </div>


  <div class="container-fluid"><hr>

  <div class="btn-group">
    <button class="btn btn-info">Aksi</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('suratkeluar') }}"><i class="icon icon-plus"></i> Tambah Surat</a></li>
      <li><a href="{{ route('printsk') }}" target="_blank"><i class="icon icon-print"></i> Print</a></li>
    </ul>
  </div>


    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Surat Keluar</h5>
            
          </div>
<!--           <div class="widget-content nopadding">
            <label>
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
                  <button class="btn btn-mini" type="submit">Cari</button>
                </div>
              </div>
            </form>
            </label> -->

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
              	 	<td class="taskOptions">
                    <a href="{{ route('editsk', $row->id) }}" style="float: left;" class="btn btn-primary btn-mini"><i class="icon icon-edit"></i> Edit</a>
                    <form action="{{ route('deletesk', $row->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button style="float: left" class="btn btn-danger btn-mini" type="submit" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="icon icon-remove"></i> Hapus</button>
                    </form> 
                  </td>
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