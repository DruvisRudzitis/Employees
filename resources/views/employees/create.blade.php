@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('employees.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="name">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="surname">
            </div>
            <div class="form-group">
                <label for="name">Date of birth</label>
                <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="yyyy-mm-dd">
            </div>
            <div class="form-group">
                <label for="description">Comment</label>
                <textarea class="form-control" name="text_comment" id="text_comment" cols="30" rows="5"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

