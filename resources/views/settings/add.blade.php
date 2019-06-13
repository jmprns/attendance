@extends('layouts.app')

{{-- HTML Title --}}
@section('html-title')
Register
@endsection

{{-- Top Css --}}
@section('css-top')

@endsection

{{-- Bottom Css --}}
@section('css-bot')

@endsection

{{-- Page Title --}}
@section('page-title')
Add User
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="active">
	Register
</li>
@endsection

{{-- Main Content --}}
@section('main-content')
<div class="row">
    <div class="col-sm-12">
        <div id="add-user-whirl" class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Add User</b></h4>
            <p class="text-muted font-13 m-b-30">
                Please fill up the form with correct responding value
            </p>
            <form id="add-user-form" class="form-horizontal" role="form">
              
                <div class="form-group">
                    <label class="col-md-2 control-label">Full Name</label>
                    <div class="col-md-2">
                        <input type="text" id="lname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-2">
                        <input type="text" id="fname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-2">
                        <input type="text" id="mname" class="form-control" placeholder="M.I.">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email Address</label>
                    <div class="col-md-6">
                       <input  id="email" type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-3">
                       <input  id="pass" type="password" class="form-control" placeholder="Password" required>
                    </div>
                     <div class="col-md-3">
                       <input  id="cpass" type="password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2"></label>
                    <div class="col-md-10">
                        <button type="reset" class="btn btn-danger btn-bordered waves-effect m-t-10 waves-light">Reset</button>
                        <button type="submit" class="btn btn-success btn-bordered waves-effect m-t-10 waves-light">Save</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection

{{-- Top Page Js --}}
@section('js-top')

@endsection

{{-- Bottom Js Script --}}
@section('js-bot')
<script>
$(document).ready(function(){

    $('#add-user-form').submit(function(e){

	    e.preventDefault();


        if($('#pass').val() !== $('#cpass').val()){
            toastr['error']("Password mismatch!");
            return;
        }

	    $.ajax({
	        url: "/settings/store",
	        type: 'POST',
	        dataType: 'json',
	        data:{
	            '_token' : $("meta[name='_token']").attr("content"),
	            'fname'	: $('#fname').val(),
	            'lname' : $('#lname').val(),
                'mname' : $('#mname').val(),
                'email' : $('#email').val(),
                'pass' : $('#pass').val(),
	            'cpass' : $('#cpass').val()

	        },
	        success:function(Result)
	        {   
            	toastr['success']("User has been registered.");
               	$('#add-user-form').trigger("reset");
	        },
	        error: function(xhr)
	        {
	        	if(xhr.status == 422){
	        		toastr['error']("Certain fields are required!");
	        	}else if(xhr.status == 406){
                    var message_er = JSON.parse(xhr.responseText);
                    toastr['error'](message_er['message']);
                }else if(xhr.status == 500){
	        		toastr['error']("Server error.");
	        	}else{
	        		toastr['error']("Something went wrong.");
	        	}
	            
	        },
	        beforeSend: function(){
	            var element = document.getElementById('add-user-whirl');
	            element.classList.add("whirl", "traditional");
	        },
	        complete: function(){
	            var element = document.getElementById('add-user-whirl');
	            element.classList.remove("whirl", "traditional");
	        }
	    });
	});

});        
</script>
@endsection