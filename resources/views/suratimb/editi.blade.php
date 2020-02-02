@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexi') }}" class="tip-bottom">Surat IMB</a><a href="" class="tip-bottom">Edit</a> </div>
    <h1>Edit Surat Masuk</h1>
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
	          <form method="post" action="{{ route('simpanediti', $surat->id) }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">No surat</label>
	              <div class="controls">
	                <input type="text" name="nosurat" class="span4" value="{{ $surat->nosurat }}" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tanggal Surat :</label>
	              <div class="controls">
	                <input type="date" name="tglsurat" class="span4" value="{{ $surat->tglsurat }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Nama :</label>
	              <div class="controls">
	                <input type="text" name="nama" class="span4" value="{{ $surat->nama }}" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Alamat :</label>
	              <div class="controls">
	                <input type="text" name="alamat" class="span4" value="{{ $surat->alamat }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Jenis :</label>
	              <div class="controls">
	                <input type="text" name="jenis" class="span4" value="{{ $surat->jenis }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Luas :</label>
	              <div class="controls">
	                <input type="text" name="luas" class="span4" value="{{ $surat->luas }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Lokasi :</label>
	              <div class="controls">
	                <input type="text" name="lokasi" class="span4" value="{{ $surat->lokasi }}">
	               </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-success">Save</button>
	              <a href="{{ route('indexi') }}" class="btn btn-danger" onclick="return confirm('Tinggalkan halaman?')">Cancel</a>
	            </div>
	          </form>
		      </div>
		  	</div>
		  </div>
	  </div>
  </div>
</div>

@endsection