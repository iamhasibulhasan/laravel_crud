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
    <section class="all-thing w-75 text-center m-auto">
        <section class="all-staff mt-5">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('media/staff/staff.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">All Staff</h5>
                    </div>
                    <div class="card-footer">
{{--                        <button class="btn btn-primary w-100"> All Staff </button>--}}
                        <a class="btn btn-primary w-100" href="{{ route('staff.index') }}">All Staff</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('media/students/student.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">All Students</h5>
                    </div>
                    <div class="card-footer">
{{--                        <button class="btn btn-primary w-100"> All Students </button>--}}
                        <a class="btn btn-primary w-100" href="{{ route('student.index') }}">All Students</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('media/teachers/teacher.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">All Teachers</h5>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary w-100"> All Teachers </button>
                    </div>
                </div>

            </div>
        </section>
    </section>
    <!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
