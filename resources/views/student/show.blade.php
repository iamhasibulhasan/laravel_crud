<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Student Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
                <span style=""><img style="margin: 0px 116px;width: 200px; height:200px; border-radius: 50%;" src="{{ asset('media/students/student.jpg') }}" alt=""></span>
				<table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{  $student -> name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{  $student -> email }}</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>{{  $student -> cell }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{  $student -> uname }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ date('F, d, Y'), strtotime($student-> created_at) }}</td>
                    </tr>
                </table>
                <a href="{{ route('student.index') }}" class="btn btn-warning">Back</a>
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
