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



	<div class="wrap-table">
        <a href="{{url('/')}}" class="btn btn-primary btn-sm">Home</a>
        <a href="{{route('staff.create')}}" class="btn btn-primary btn-sm">Add Staff</a>
        <br>
        <br>
        <div class="card shadow
">
			<div class="card-body">
				<h2>All Staff</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Age</th>
							<th>Time</th>
							<th>Date</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                        @foreach( $all_staff as $staff )
						<tr>
							<td>{{ $loop -> index + 1 }}</td>
							<td>{{ $staff->name }}</td>
							<td>{{ $staff->email }}</td>
							<td>{{ $staff->cell }}</td>
							<td>{{ $staff->uname }}</td>
							<td>{{ $staff->age }}</td>
							<td>{{ $staff->created_at -> diffforhumans() }}</td>
                            <td>{{ date('F, d, Y'), strtotime($staff-> created_at) }}</td>
                            <td><img src="media/staff/{{ $staff -> photo }}" alt=""></td>
                            <td>
								<a class="btn btn-sm btn-info" href="{{route('staff.show', $staff->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('staff.edit',$staff ->id) }}">Edit</a>
                                <form style="display: inline;" action="{{ route('staff.delete',$staff ->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
							</td>
						</tr>
                        @endforeach

					</tbody>
				</table>
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
