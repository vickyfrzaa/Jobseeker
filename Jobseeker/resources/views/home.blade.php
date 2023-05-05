@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center pt-3" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" /></svg>
                <ul>
                    @foreach($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="btn-add py-3">
                <a href="{{ route('create') }}" class="btn btn-primary">Add User</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Full Name</th>
                                <th>DOB</th>
                                <th>POB</th>
                                <th>Gender</th>
                                <th>Year Exp</th>
                                <th>Last Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($candidates as $item => $candidate) --}}
                            <tr class="text-center">
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                {{-- <th>{{ $loop->iteration }}</th>
                                <td>{{ $candidate->full_name }}</td>
                                <td>{{ date('d-m-y', strtotime($candidate->dob)) }}</td>
                                <td>{{ $candidate->pob }}</td>
                                <td>{{ $candidate->gender }}</td>
                                <td>{{ date('d-m-y', strtotime($candidate->year_exp)) }}</td>
                                <td>{{ $candidate->last_salary }}</td> --}}
                                <td>
                                    {{-- <a href="{{ url('edit', $item->id) }}" class="btn btn-success me-3"> --}}
                                    <a href="{{ url('edit') }}" class="btn btn-success me-3">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete') }}" class="btn btn-danger ms-3">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center">
                {{ $candidates->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
