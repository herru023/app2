@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexjcamat') }}" class="tip-bottom">Jadwal Camat</a><a href="" class="tip-bottom">Edit</a> </div>
    <h1>Edit Agenda Camat</h1>
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
	          <form method="post" action="{{ route('simpaneditcamat', $surat->id) }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">Tgl kegiatan :</label>
	              <div class="controls">
	                <input type="date" name="tglkegiatan"  class="datepicker span5" value="{{ $surat->tglkegiatan }}">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Kegiatan :</label>
	              <div class="controls">
	                <input type="text" name="kegiatan" class="span5" value="{{ $surat->kegiatan }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Hari kegiatan :</label>
	              <div class="controls">
	                <select name="hari" class="span5" value="{{ $surat->hari }}">
	                  <option value="Senin">Senin</option>
	                  <option value="Selasa">Selasa</option>
	                  <option value="Rabu">Rabu</option>
	                  <option value="Kamis">Kamis</option>
	                  <option value="Jumat">Jumat</option>
	                  <option value="Sabtu">Sabtu</option>
	                  <option value="Minggu">Minggu</option>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Waktu :</label>
	              <div class="controls">
	                <input type="text" name="waktu" class="span5" value="{{ $surat->waktu }}">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tempat :</label>
	              <div class="controls">
	                <input type="text" name="tempat" class="span5" value="{{ $surat->tempat }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Bertugas :</label>
	              <div class="controls">
	                <input type="text" name="bertugas" class="span5" value="{{ $surat->bertugas }}">
	               </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-success">Save</button>
	              <a href="{{ route('indexjcamat') }}" class="btn btn-danger" onclick="return confirm('Tinggalkan halaman?')">Cancel</a>
	            </div>
	          </form>
		      </div>
		  	</div>
		  </div>
	  </div>
  </div>
</div>

@endsection