<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Staff Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
                <span style=""><img style="margin: 0px 116px;width: 200px; height:200px; border-radius: 50%;" src="{{ URL::to('') }}/media/staff/{{ $staff -> photo }}" alt=""></span>
				<table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{  $staff -> name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{  $staff -> email }}</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>{{  $staff -> cell }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{  $staff -> uname }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{  $staff -> age }}</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>{{ date('F, d, Y'), strtotime($staff-> created_at) }}</td>
                    </tr>
                </table>
                <a href="{{ route('staff.index') }}" class="btn btn-warning">Back</a>
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
