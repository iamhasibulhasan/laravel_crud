<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Students Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>



	<div class="wrap-table">
        <a href="{{url('/')}}" class="btn btn-primary btn-sm">Home</a>
        <a href="{{route('student.create')}}" class="btn btn-primary btn-sm">Add Student</a>
        <br>
        <br>
        <div class="card shadow">

			<div class="card-body">
				<h2>All Student</h2>
                @include('validation')
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Time</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                        @foreach( $all_student as $student )
						<tr>
							<td>{{ $loop -> index + 1 }}</td>
							<td>{{ $student->name }}</td>
							<td>{{ $student->email }}</td>
							<td>{{ $student->cell }}</td>
							<td>{{ $student->uname }}</td>
							<td>{{ $student->created_at -> diffforhumans() }}</td>
                            <td>{{ date('F, d, Y'), strtotime($student-> created_at) }}</td>
                            <td>
								<a class="btn btn-sm btn-info" href="{{route('student.show', $student->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit',$student ->id) }}">Edit</a>
                                <form style="display: inline;" action="{{ route('student.destroy',$student ->id) }}" method="POST">
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
