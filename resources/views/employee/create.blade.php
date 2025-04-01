@extends('employee.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Employee</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('employee.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="first_name"
                class="form-control @error('first_name') is-invalid @enderror"
                id="inputFirstName"
                placeholder="First Name">
            @error('first_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputLastName" class="form-label"><strong>Last Name:</strong></label>
            <input
                type="text"
                name="last_name"
                class="form-control @error('last_name') is-invalid @enderror"
                id="inputLastName"
                placeholder="Last Name">
            @error('last_name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputBirthDate" class="form-label"><strong>Birth Date:</strong></label>
            <input
                type="date"
                name="birth_date"
                class="form-control @error('birth_date') is-invalid @enderror"
                id="BirthDate"
                placeholder="01/01/1990">
            @error('birth_date')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputHireDate" class="form-label"><strong>Hire Date:</strong></label>
            <input
                type="date"
                name="hire_date"
                class="form-control @error('hire_date') is-invalid @enderror"
                id="HireDate"
                placeholder="01/01/1990">
            @error('hire_date')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputGender" class="form-label"><strong>Gender:</strong></label>
            

                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" id="inputGender" placeholder="M">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            @error('gender')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>



       
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>
@endsection