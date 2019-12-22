
@extends('layouts.dashboardlogin')
@section('viewlogin')

<div id="loginbox">            
    <form id="loginform" class="form-vertical"  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
         <div class="control-group normal_text"> <h3><img src="{{asset('publicadmin/img/logo.png')}}" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                    <input type="password" name="password" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success">
                Login
            </button>
        </div>
    </form>
</div>

<script src="{{asset('publicadmin/js/jquery.min.js')}}"></script>  
<script src="{{asset('publicadmin/js/matrix.login.js')}}"></script> 

@endsection


