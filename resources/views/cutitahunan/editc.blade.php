@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexc') }}" class="tip-bottom">Cuti Tahunan</a><a href="" class="tip-bottom">Edit</a> </div>
    <h1>Edit Cuti Tahunan</h1>
  </div>

  <div class="container-fluid">
  <hr>
	  <div class="row-fluid">
	    <div class="span12">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Edit</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form method="post" action="{{ route('simpaneditc', $surat->id) }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                  <input type="text" name="nama" class="span5" value="{{ $surat->nama }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">NIP :</label>
                <div class="controls">
                  <input type="text" name="nip" class="span5" value="{{ $surat->nip }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pangkat / Golongan Ruangan :</label>
                <div class="controls">
                  <input type="text" name="pangkat" class="span5" value="{{ $surat->pangkat }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Jabatan :</label>
                <div class="controls">
                  <input type="text" name="jabatan" class="span5" value="{{ $surat->jabatan }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Unit Kerja :</label>
                <div class="controls">
                  <select name="unit" class="span5" value="{{ $surat->unit }}">
                    <option value="Kasi Trantip">Kasi Trantip</option>
                    <option value="Kasi Pem">kasi Pem</option>
                    <option value="Kasi Kessos">kasi Kessos</option>
                    <option value="Kasi Ekobang">kasi Ekobang</option>
                    <option value="Kasi Umpag">kasi Umpag</option>
                    <option value="Kasi Pip">kasi Pip</option>
                    <option value="Camat">Camat</option>
                    <option value="Kelurahan Teluk Dalam">Kelurahan Teluk Dalam</option>
                    <option value="Kelurahan Mawar">Kelurahan Mawar</option>
                    <option value="Kelurahan Kertak Baru Ilir">Kelurahan Kertak Baru Ilir</option>
                    <option value="Kelurahan Kertak Baru Ulu">Kelurahan Kertak Baru Ulu</option>
                    <option value="Kelurahan Pasar Lama">Kelurahan Pasar Lama</option>
                    <option value="Kelurahan Seberang Mesjid">Kelurahan Seberang Mesjid</option>
                    <option value="Kelurahan Melayu">Kelurahan Melayu</option>
                    <option value="Kelurahan Gadang">Kelurahan Gadang</option>
                    <option value="Kelurahan Pekapuran Laut">Kelurahan Pekapuran Laut</option>
                    <option value="Kelurahan Sungai Baru">Kelurahan Sungai Baru</option>
                    <option value="Kelurahan Kelayan Luar">Kelurahan Kelayan Luar</option>
                    <option value="Kelurahan Antasan Besar">Kelurahan Antasan Besar</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Lamanya :</label>
                <div class="controls">
                  <input type="text" name="lamanya" class="span5" value="{{ $surat->lamanya }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Di Jalankan di :</label>
                <div class="controls">
                  <input type="text" name="jalankan" class="span5" value="{{ $surat->jalankan }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Terhitung Mulai Tanggal :</label>
                <div class="controls">
                  <input type="date" name="tgl_mulai" class="datepicker span5" value="{{ $surat->tgl_mulai }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Sampai Dengan Tanggal :</label>
                <div class="controls">
                  <input type="date" name="sampai_tgl" class="datepicker span5" value="{{ $surat->sampai_tgl }}">
                 </div>
              </div>
              <div class="control-group">
                <label class="control-label">Masuk Kerja Tanggal :</label>
                <div class="controls">
                  <input type="date" name="masuk_tgl" class="datepicker span5" value="{{ $surat->masuk_tgl }}">
                 </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('indexc') }}" class="btn btn-danger" onclick="return confirm('Tinggalkan halaman?')">Cancel</a>
              </div>
	          </form>
		      </div>
		  	</div>
		  </div>
	  </div>
  </div>
</div>

@endsection