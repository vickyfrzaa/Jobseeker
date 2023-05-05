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
                            Edit Candidate
                        </div>
                    </div>
                </h3>
                <div class="card-body">
                    @foreach($editCandidates as $edit)
                    <form method="post" enctype="multipart/form-data" action="{{ url('update', $edit->candidate_id) }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="full_name" id="full_name" value="{{ old('full_name')?? $edit->full_name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                            <div class="col-sm-10" id="datepicker">
                                <input type="date" class="form-control" name="dob" id="dob" value="{{ $edit->dob }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pob" class="col-sm-2 col-form-label">POB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pob" id="pob" value="{{ $edit->pob }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="gender" id="gender" value="{{ $edit->gender }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="year_exp" class="col-sm-2 col-form-label">Year Exp</label>
                            <div class="col-sm-10" id="datepicker">
                                <input type="date" class="form-control" name="year_exp" id="year_exp" value="{{ $edit->year_exp }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="salary" class="col-sm-2 col-form-label">Last Salary</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="last_salary" id="salary" value="{{ $edit->last_salary }}">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto py-3">
                            <button class="btn btn-primary" type="submit">Edit Candidate</button>
                        </div>
                    </form>
                    @endforeach
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
@endsection
