@extends('layouts.dashboardindex')
@section('viewindex')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ route('index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="{{ route('suratmasuk') }}" class="tip-bottom">Surat Masuk</a> </div>
    <h1>Surat Masuk</h1>
  </div>

  <div class="container-fluid">
  <hr>
	  <div class="row-fluid">
	    <div class="span6">
	      <div class="widget-box">
	        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
	          <h5>Masukkan Disposisi</h5>
	        </div>
	        <div class="widget-content nopadding">
	          <form method="post" action="{{ route('simpansm') }}" class="form-horizontal">
	          	{{ csrf_field() }}
	            <div class="control-group">
	              <label class="control-label">Surat Dari :</label>
	              <div class="controls">
	                <input type="text" name="suratdari" class="span11" placeholder="Surat Dari" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Tanggal Surat :</label>
	              <div class="controls">
	                <input type="date" name="tglsurat" class="datepicker span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">No Surat :</label>
	              <div class="controls">
	                <input type="text" name="nosurat" class="span11" placeholder="Nomor Surat" />
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Diterima Tanggal :</label>
	              <div class="controls">
	                <input type="date" name="tglditerima" class="datepicker span11">
	               </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label">Diberikan ke :</label>
	              <div class="controls">
	                <select name="untuk">
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
		            <table id="table_id" class="table table-bordered data-table">
		              <thead>
		                <tr>
		                  <th>No.</th>
		                  <th>Surat Dari</th>
		                  <th>Tanggal Diterima</th>
		                  <th>Prihal</th>
		                  <th>aksi</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php $no = 0;?>
		              	@foreach($datasurat as $row)
		              	<?php $no++;?>
		              	 <tr>
		              	 	<td>{{ $no }}</td>
		              	 	<td>{{ $row->suratdari }}</td>
		              	 	<td>{{ date_format ($row->created_at, 'd-m-Y') }}</td>
		              	 	<td>{{ $row->prihal }}</td>
		              	 	<td><a class="tip" href="" title="Lihat"><i class="icon-eye-open"></i></a> </td>
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

@section('script')

<script>
	
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>

@endsection