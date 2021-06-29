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



	<div class="wrap">
		<div class="card shadow">
			<div class="card-body">
				<h2>Update Staff</h2>

                {{--validation file include--}}
                @include('validation')

				<form action="{{ route('staff.update', $edit_data -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="{{ $edit_data -> name }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{ $edit_data -> email }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="{{ $edit_data -> cell }}" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" value="{{ $edit_data -> uname }}" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" value="{{ $edit_data -> age }}" type="text">
                    </div>
                    <div class="form-group">
                        <img style="width: 200px; height: 200px; border-radius: 50%" src="{{ URL::to('/media/staff/'. $edit_data -> photo) }}" alt=""><br>
                        <label for="">Upload a photo</label>
                        <input name="old_photo" class="form-control" value="{{ $edit_data -> photo }}" type="hidden">
                        <input name="new_photo" class="form-control" type="file">
                    </div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Update">
                        <a class="btn btn-warning" href="{{ route('staff.index') }}">Back</a>
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
