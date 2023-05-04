@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">
                    <form method="post" enctype = "multipart/form-data" action="{{ url('create') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </h5>
                <div class="card-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">POB</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Year Exp</th>
                                <th scope="col">Last Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1
                            ?>
                            @foreach($candidates as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->full_name }}</td>
                                <td>{{ $data->dob }}</td>
                                <td>{{ $data->pob }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->year_exp }}</td>
                                <td>{{ $data->last_salary }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
