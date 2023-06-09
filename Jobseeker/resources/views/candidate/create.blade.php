@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <a href="{{ route('home') }}" class="btn btn-danger fw-bold">
                                <i class="fas fa-chevron-left me-2"></i>
                                Back
                            </a>
                        </div>
                        <div class="col-md-6 pt-2 fw-bold">
                            New Candidate
                        </div>
                    </div>
                </h3>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="{{ route('save') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="full_name" id="full_name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                            <div class="col-sm-10" id="datepicker">
                                <input type="date" class="form-control" name="dob" id="dob">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pob" class="col-sm-2 col-form-label">POB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pob" id="pob">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gender" id="gender">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="year_exp" class="col-sm-2 col-form-label">Year Exp</label>
                            <div class="col-sm-10" id="datepicker">
                                <input type="date" class="form-control" name="year_exp" id="year_exp">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="salary" class="col-sm-2 col-form-label">Last Salary</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="last_salary" id="salary">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto py-3">
                            <button class="btn btn-success fw-bold" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#datepicker').datepicker();
    $('#datepicker').on('changeDate', function() {
        $('#dob').val(
            $('#datepicker').datepicker('getFormattedDate')
        );
    });

</script>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
