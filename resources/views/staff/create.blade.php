<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>

                {{--validation file include--}}
                @include('validation')

				<form action="{{route('staff.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{old('name')}}" type="text">
                        @if ( $errors -> has('name') )
                            <p class="text-danger">{{$errors -> first('name')}}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{old('email')}}" type="text">
                        @if ( $errors -> has('email') )
                            <p class="text-danger">{{$errors -> first('email')}}</p>
                        @endif
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{old('cell')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="{{old('uname')}}" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" class="form-control" value="{{old('password')}}" type="password">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" value="{{old('age')}}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control" value="{{old('photo')}}" type="file">
                    </div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
                        <a href="{{route('staff.index')}}" class="btn btn-warning">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
