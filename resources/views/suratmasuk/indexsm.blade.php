@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexsm') }}" class="tip-bottom">Surat Masuk</a> </div>
    <h1>Surat Masuk</h1>
  </div>


  <div class="container-fluid"><hr>

  <div class="btn-group">
    <button class="btn btn-info">Aksi</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('suratmasuk') }}"><i class="icon icon-plus"></i> Tambah Surat</a></li>
      <li><a href="{{ route('printsm') }}" target="_blank"><i class="icon icon-print"></i> Print</a></li>
    </ul>
  </div>

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
              	 	<td class="taskOptions">
                    <a href="{{ route('editsm', $row->id) }}" style="float: left;" class="btn btn-primary btn-mini"><i class="icon icon-edit"></i> Edit</a>
                    <form action="{{ route('deletesm', $row->id) }}" method="post">
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