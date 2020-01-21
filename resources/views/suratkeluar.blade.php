@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('suratkeluar') }}" class="tip-bottom">Surat Keluar</a> </div>
    <h1>Surat keluar</h1>
  </div>

  <div class="container-fluid">
  <hr>
	  <div class="row-fluid">
	    <div class="span6">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Surat Keluar</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form action="{{ route('simpansk')}}" method="post" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">No Berkas :</label>
	              <div class="controls">
	                <input type="text" name="noberkas" class="span11" placeholder="No Berkas" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Alamat Penerima :</label>
	              <div class="controls">
	                <input type="text" name="alamatpenerima" class="span11" placeholder="Alamat Penerima" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tanggal Surat :</label>
	              <div class="controls">
	                <input type="date" name="tglsurat" class="datepicker span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Dari :</label>
	              <div class="controls">
	                <select name="dari">
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
	                <textarea name="prihal" class="span11" ></textarea>
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
		          <h5>Data Surat Masuk</h5>
		        </div>
		        <div class="widget-content nopadding">
		            <table class="table table-bordered table-striped">
		              <thead>
		                <tr>
		                  <th>No.</th>
		                  <th>Alamat Penerima</th>
		                  <th>Dari</th>
		                  <th>Tanggal Surat</th>
		                  <th>aksi</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php $no = 0;?>
		              	@foreach($suratk as $row)
		              	<?php $no++;?>
		              	 <tr>
		              	 	<td>{{ $no }}</td>
		              	 	<td>{{ $row->alamatpenerima }}</td>
		              	 	<td>{{ $row->dari }}</td>
		              	 	<td>{{ $row->tglsurat }}</td>
		              	 	<td>asdf</td>
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


</div>

@endsection