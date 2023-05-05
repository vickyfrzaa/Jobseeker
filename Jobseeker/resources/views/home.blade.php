@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="btn-add py-3">
                <a href="{{ route('create') }}" class="btn btn-primary">Add Candidate</a>
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
                            <?php $no = 1; ?>
                            {{-- @foreach ($candidates as $item) --}}
                            <tr class="text-center">
                                <th>{{ $no++ }}</th>
                                <td>Vicky Fahreza Racasiwi</td>
                                <td>12-12-1997</td>
                                <td>Batam</td>
                                <td>Male</td>
                                <td>01-02-2023</td>
                                <td>7500000</td>
                                {{-- <td>{{ $item->full_name }}</td>
                                <td>{{ date('d-m-y', strtotime($item->dob)) }}</td>
                                <td>{{ $item->pob }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ date('d-m-y', strtotime($item->year_exp)) }}</td>
                                <td>{{ $item->last_salary }}</td> --}}
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
            <div class="card-footer">
                {{-- {{ $candidates->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
