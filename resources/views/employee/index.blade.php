@extends('employee.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Laravel 12 CRUD Example from scratch - ItSolutionStuff.com</h2>
  <div class="card-body">

        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('employee.create') }}"> <i class="fa fa-plus"></i> Create New Employee</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">Employee ID</th>
                    <th>Name</th>
                    <th>Birth Date</th>
                    <th>Hire Date</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>{{ $employee->emp_no }}</td>
                    <td>{{ $employee->last_name }} {{ $employee->first_name }}</td>
                    <td>{{ $employee->birth_date }}</td>
                    <td>{{ $employee->hire_date }}</td>
                    <td>
                        <form action="{{ route('employee.destroy',$employee->emp_no) }}" method="POST">

                            <a class="btn btn-info btn-sm" href="{{ route('employee.show',$employee->emp_no) }}"><i class="fa-solid fa-list"></i> Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('employee.edit',$employee->emp_no) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>

        </table>

        {!! $employees->links() !!}

  </div>
</div>
@endsection