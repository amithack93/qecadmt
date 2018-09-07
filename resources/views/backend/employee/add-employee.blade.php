@extends('layouts.backendlayout')

@section('title','Add Employee')

@section('page-title','Add Employee')
@section('css')
@endsection
@section('content')
<div class="page-body">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Employee Detail</h5>
					<div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>
					<div class="card-header-right">
						<i class="icofont icofont-spinner-alt-5"></i>
					</div>
				</div>
				<div class="card-block">
					<form method="POST" action="{{ url('backend/employee/store') }}" >
						{{  csrf_field() }}
						<h4 class="sub-title">Basic detail</h4>
						<div class="row">
							<div class="col-sm-4">
								<label >Full Name</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" name="full_name" placeholder="Full Name">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Email-ID</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Type your title in Placeholder">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Password</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="password" class="form-control" placeholder="Password input">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Birth Date</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input id="dropper-default" class="form-control" type="text" placeholder="Select your date" />
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Primary Contact-No</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input id="dropper-default" class="form-control" type="number" placeholder="Primary Contact-No" />
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Secondary Contact-No</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input id="dropper-default" class="form-control" type="number" placeholder="Secondary Contact-No" />
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Nationality</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Nationality">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="">Gender</label>
								<div class="form-radio">
									<div class="radio radio-inline">
										<label>
											<input type="radio" name="male" checked="checked">
											<i class="helper"></i>Male
										</label>
									</div>
									<div class="radio radio-inline">
										<label>
											<input type="radio" name="female">
											<i class="helper"></i>Female
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="">Marital Status</label>
								<div class="form-radio">
									<div class="radio radio-inline">
										<label>
											<input type="radio" name="radio" checked="checked">
											<i class="helper"></i>Single
										</label>
									</div>
									<div class="radio radio-inline">
										<label>
											<input type="radio" name="radio">
											<i class="helper"></i>Married
										</label>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6">
								<label>Permanent Address</label>
								<div class="form-group row">
									<div class="col-sm-12">
										<textarea class="form-control" id="exampleTextarea" rows="3"></textarea> 
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label>Temporary Address</label>
								<div class="form-group row">
									<div class="col-sm-12">
										<textarea class="form-control" id="exampleTextarea" rows="3"></textarea> 
									</div>
								</div>
							</div>
						</div>
						<br>
						<h4 class="sub-title">Qualification Details</h4>
						<div class="row">
							<div class="col-sm-4">
								<label for="">Educational Qualification</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Educational Qualification">	
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="">Professional Qualification</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Professional Qualification">	
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label for="">Total Experience</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Total Experience">	
									</div>
								</div>
							</div>
						</div>
						<h4 class="sub-title">Company Profile</h4>
						<div class="row">
							<div class="col-sm-4">
								<label>Join Date</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input id="dropper-default1" class="form-control" type="text" placeholder="Select your date" />
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Designation</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" class="form-control" placeholder="Designation">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Job Type</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<select name="select" class="form-control">
											<option value="opt1">Select One Value Only</option>
											<option value="opt2">Type 2</option>
											<option value="opt3">Type 3</option>
											<option value="opt4">Type 4</option>
											<option value="opt5">Type 5</option>
											<option value="opt6">Type 6</option>
											<option value="opt7">Type 7</option>
											<option value="opt8">Type 8</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Fix Salary</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control" placeholder="Fix Salary">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>BI</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control" placeholder="BI">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>LI</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control" placeholder="LI">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Total Salary</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" class="form-control" placeholder="Total Salary">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<label>Releaving Date</label>
								<div class="form-group row">
									<div class="col-sm-10">
										<input id="dropper-default" class="form-control" type="text" placeholder="Select your date" />
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('js')
<script type="text/javascript" src="{{ asset('assets/bower_components/datedropper/js/datedropper.min.js') }}"></script>
<script>
	$(function() {
		$("#dropper-default").dateDropper({
			dropWidth: 200,
			animate:false,
			dropPrimaryColor: "#1abc9c",
			dropBorder: "1px solid #1abc9c"
		});	
		$("#dropper-default1").dateDropper({
			dropWidth: 200,
			animate:false,
			dropPrimaryColor: "#1abc9c",
			dropBorder: "1px solid #1abc9c"
		});	
	});
</script>
@endsection