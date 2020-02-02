@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexi') }}" class="tip-bottom">Surat IMB</a> </div>
    <h1>Surat IMB</h1>
  </div>


  <div class="container-fluid"><hr>

  <div class="btn-group">
    <button class="btn btn-info">Aksi</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('suratimb') }}"><i class="icon icon-plus"></i> Tambah Surat</a></li>
      <li><a href="{{ route('printi') }}" target="_blank"><i class="icon icon-print"></i> Print</a></li>
    </ul>
  </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Surat IMB</h5>
          </div>
          <div class="widget-content nopadding">
            <table id="table_id" class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No Surat</th>
                  <th>Tanggal Surat</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Jenis</th>
                  <th>Luas</th>
                  <th>Lokasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              	<?php $no = 0;?>
              	@foreach($surat as $row)
              	<?php $no++;?>
              	 <tr>
              	 	<td>{{ $no }}</td>
              	 	<td>{{ $row->nosurat }}</td>
              	 	<td>{{ $row->tglsurat }}</td>
              	 	<td>{{ $row->nama }}</td>
              	 	<td>{{ $row->alamat }}</td>
              	 	<td>{{ $row->jenis }}</td>
              	 	<td>{{ $row->luas }}</td>
              	 	<td>{{ $row->lokasi }}</td>
              	 	<td class="taskOptions">
                    <a href="{{ route('editi', $row->id) }}" style="float: left;" class="btn btn-primary btn-mini"><i class="icon icon-edit"></i> Edit</a>
                    <form action="{{ route('deletei', $row->id) }}" method="post">
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