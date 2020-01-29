@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexc') }}" class="tip-bottom">Cuti Tahunan</a> </div>
    <h1>Cuti Tahunan</h1>
  </div>

  <div class="container-fluid"><hr>

    <div class="btn-group">
    <button class="btn btn-info">Aksi</button>
    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="{{ route('cuti') }}">Tambah Cuti</a></li>
      <li><a href="#">Print</a></li>
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
                  <th>Nama</th>
                  <th>nip</th>
                  <th>Pangkat</th>
                  <th>Jabatan</th>
                  <th>Unit Kerja</th>
                  <th>Lamanya</th>
                  <th>Di Jalankn di</th>
                  <th>Tgl Mulai</th>
                  <th>Sampai Tgl</th>
                  <th>Tgl Masuk</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0;?>
                @foreach($cuti as $row)
                <?php $no++;?>
                 <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->nip }}</td>
                  <td>{{ $row->pangkat }}</td>
                  <td>{{ $row->jabatan }}</td>
                  <td>{{ $row->unit }}</td>
                  <td>{{ $row->lamanya }}</td>
                  <td>{{ $row->jalankan }}</td>
                  <td>{{ $row->tgl_mulai }}</td>
                  <td>{{ $row->sampai_tgl }}</td>
                  <td>{{ $row->masuk_tgl }}</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-mini">Aksi</button>
                      <button class="btn btn-mini" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Hapus</a></li>
                      </ul>
                    </div>
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