<!DOCTYPE html>
<html lang="en">
<head>
<title>Disposisi</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('publicadmin/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('publicadmin/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('publicadmin/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('publicadmin/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('publicadmin/css/matrix-media.css')}}" />
<link href="{{asset('publicadmin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('publicadmin/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('publicadmin/css/select2.css')}}" />

<link rel="stylesheet" href="{{asset('publicadmin/css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('time/css/bootstrap-datetimepicker.min.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>



</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Disposisi</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{ Auth::user()->username }}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        	<i class="icon-key"></i> Log Out</a>
        	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          	</form>
        </li>                          
      </ul>
    </li>
  </ul>
</div>

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="{{ route('index') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{ Request::is('index') ? 'active' : '' }}"><a href="{{ route('index') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="{{ Request::is('agendacamat') ? 'active' : '' }}"><a href="{{ route('agendacamat') }}"><i class="icon icon-pencil"></i> <span>Agenda Camat</span></a></li>
    <li class="{{ Request::is('suratmasuk') ? 'active' : '' }}"> <a href="{{ route('suratmasuk') }}"><i class="icon icon-pencil"></i> <span>Surat Masuk</span></a> </li>
    <li class="{{ Request::is('suratkeluar') ? 'active' : '' }}"> <a href="{{ route('suratkeluar') }}"><i class="icon icon-pencil"></i> <span>Surat keluar</span></a> </li>
    <li class="{{ Request::is('cuti') ? 'active' : '' }}"> <a href="{{ route('cuti') }}"><i class="icon icon-pencil"></i> <span>Cuti Tahunan</span></a> </li>
    <li class="{{ Request::is('rekap*') ? 'active' : '' }}"><a href="{{ route('rekap') }}"><i class="icon icon-inbox"></i> <span>Laporan</span></a></li>
    <!-- <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> -->
  </ul>
</div>

@yield('viewindex')


<div class="row-fluid">
  <div id="footer" class="span12"> 2019 &copy; Banjarmasin Tengah </div>
</div>

<!--end-Footer-part-->

<script src="{{asset('time/js/bootstrap-datetimepicker.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/excanvas.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('publicadmin/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.js')}}"></script>
<script src="{{asset('publicadmin/js/matrix.calendar.js')}}"></script>  
<script src="{{asset('publicadmin/js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.gritter.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.interface.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.chat.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.validate.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.wizard.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('publicadmin/js/select2.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.popover.js')}}"></script> 
<script src="{{asset('publicadmin/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('publicadmin/js/matrix.tables.js')}}"></script> 


</body>
</html>
