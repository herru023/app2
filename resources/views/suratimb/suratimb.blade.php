@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('suratimb') }}" class="tip-bottom">Surat IMB</a> </div>
    <h1>Surat IMB</h1>
  </div>

  <div class="container-fluid">
  <hr>
	  <div class="row-fluid">
	    <div class="span6">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Masukkan Surat IMB</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form method="post" action="{{ route('simpani') }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">no Surat :</label>
	              <div class="controls">
	                <input type="text" name="nosurat" class="span11" placeholder="No Surat" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tanggal Surat :</label>
	              <div class="controls">
	                <input type="date" name="tglsurat" class="datepicker span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Nama :</label>
	              <div class="controls">
	                <input type="text" name="nama" class="span11" placeholder="Nama" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Alamat :</label>
	              <div class="controls">
	                <input type="text" name="alamat" class="span11" placeholder="Alamat" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Jenis :</label>
	              <div class="controls">
	                <input type="text" name="jenis" class="span11" placeholder="Jenis" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Luas :</label>
	              <div class="controls">
	                <input type="text" name="luas" class="span11" placeholder="Luas" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Lokasi :</label>
	              <div class="controls">
	                <input type="text" name="lokasi" class="span11" placeholder="Lokasi" />
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
		          <h5>Data Surat IMB</h5>
		        </div>
		        <div class="widget-content nopadding">
		            <table id="table_id" class="table table-bordered data-table">
		              <thead>
		                <tr>
		                  <th>No.</th>
		                  <th>Nama</th>
		                  <th>No surat</th>
		                  <th>Alamat</th>
		                  <th>Tanggal Surat</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php $no = 0;?>
		              	@foreach($surat as $row)
		              	<?php $no++;?>
		              	 <tr>
		              	 	<td>{{ $no }}</td>
		              	 	<td>{{ $row->nama }}</td>
		              	 	<td>{{ $row->nosurat }}</td>
		              	 	<td>{{ $row->alamat }}</td>
		              	 	<td>{{ date_format ($row->created_at, 'd-m-Y') }}</td>
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