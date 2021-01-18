@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('employees.update', $employee) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" name="surname" id="surname" cols="30" rows="5" value="{{ $employee->surname }}">
            </div>
            <div class="form-group">
                <label for="date of birth">Date of birth</label>
                <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" cols="30" rows="5" value="{{ $employee->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="comment">Content:</label>
                <textarea class="form-control" name="text_comment" id="text_comment" cols="30" rows="5">{{ $employee->text_comment }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
