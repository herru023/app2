@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('agendacamat') }}" class="tip-bottom">Agenda camat</a> </div>
    <h1>Agenda Camat</h1>
  </div>

  <div class="container-fluid">
  <hr>
	  <div class="row-fluid">
	    <div class="span6">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Agenda Camat</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form method="post" action="{{ route('simpanac') }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">Tgl kegiatan :</label>
	              <div class="controls">
	                <input type="date" name="tglkegiatan"  class="datepicker span11">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Kegiatan :</label>
	              <div class="controls">
	                <input type="text" name="kegiatan" class="span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Hari kegiatan :</label>
	              <div class="controls">
	                <select name="hari">
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
	                <input type="text" name="waktu" class="span11">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tempat :</label>
	              <div class="controls">
	                <input type="text" name="tempat" class="span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Bertugas :</label>
	              <div class="controls">
	                <input type="text" name="bertugas" class="span11">
	               </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-success">Save</button>
	            </div>
	          </form>
		      </div>
		  	</div>
		  </div>

		  <div class="span6">
		      <div class="widget-box">
		        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
		          <h5>Data Kegiatan Camat</h5>
		        </div>
		        <div class="widget-content nopadding">
		            <table class="table table-bordered table-striped">
		              <thead>
		                <tr>
		                  <th>No.</th>
		                  <th>Hari, waktu dan Tanggal</th>
		                  <th>Tempat</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php $no = 0;?>
		              	@foreach($agenda1 as $row)
		              	<?php $no++;?>
		              	 <tr>
		              	 	<td>{{ $no }}</td>
		              	 	<td>{{ $row->hari }},{{ $row->waktu }} ,{{ $row->tglkegiatan }}</td>
		              	 	<td>{{ $row->tempat }}</td>
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