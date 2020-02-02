@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('rekap') }}" class="tip-bottom">Rekap</a> <a href="{{ route('indexsk') }}" class="tip-bottom">Surat Keluar</a><a href="" class="tip-bottom">Edit</a> </div>
    <h1>Edit Surat Keluar</h1>
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
	          <form method="post" action="{{ route('simpaneditsk', $surat->id) }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">No Berkas :</label>
	              <div class="controls">
	                <input type="text" name="noberkas" class="span4" value="{{ $surat->noberkas }}" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Alamat Penerima :</label>
	              <div class="controls">
	                <input type="text" name="alamatpenerima" class="span4" value="{{ $surat->alamatpenerima }}" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tanggal Surat :</label>
	              <div class="controls">
	                <input type="date" name="tglsurat" class="span4" value="{{ $surat->tglsurat }}">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Dari :</label>
	              <div class="controls">
	                <select name="dari" class="span4" value="{{ $surat->dari }}">
	                  <option value="Kasi Trantip">Kasi Trantip</option>
	                  <option value="Kasi Pem">kasi Pem</option>
	                  <option value="Kasi Kessos">kasi Kessos</option>
	                  <option value="Kasi Ekoband">kasi Ekobang</option>
	                  <option value="Kasi Umpag">kasi Umpag</option>
	                  <option value="Kasi Pip">kasi Pip</option>
	                  <option value="Camat">Camat</option>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Prihal :</label>
	              <div class="controls">
	                <textarea name="prihal" class="span6" >{{ $surat->prihal }}</textarea>
	              </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-success">Save</button>
	              <a href="{{ route('indexsk') }}" class="btn btn-danger" onclick="return confirm('Tinggalkan halaman?')">Cancel</a>
	            </div>
	          </form>
		      </div>
		  	</div>
		  </div>
	  </div>
  </div>
</div>

@endsection