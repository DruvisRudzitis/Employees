@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">
        Create new employee profile
    </a>
    <a href="{{ route('employees.index') }}" class="btn btn-primary btn-sm">
        Employees profiles
    </a>
</div>
@endsection
