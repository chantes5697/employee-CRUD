@extends('employee.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Employee</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('employee.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('employee.update', $employee->emp_no) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="first_name"
                class="form-control @error('first_name') is-invalid @enderror"
                id="inputFirstName"
                value = {{ $employee->first_name }}>
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
                value = {{ $employee->last_name }}>
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
                value = {{ $employee->birth_date }}>
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
                value = {{ $employee->hire_date }}>
            @error('hire_date')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputGender" class="form-label"><strong>Gender:</strong></label>
            

            <select class="form-select" id="gender" name="gender">
                <option value="">Select Gender</option>
                @foreach($genders as $gender)
                    <option value="{{ $gender }}" {{ $employee->gender == $gender ? 'selected' : '' }}>{{ $gender }}</option>
                @endforeach
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