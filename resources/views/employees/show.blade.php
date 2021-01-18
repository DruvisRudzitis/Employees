@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $employee->name }} {{ $employee->surname }}</h1>
        <p>
            {{ $employee->date_of_birth }}
        </p>
        <h2>
            {{ $employee->text_comment }}
        </h2>
    </div>
@endsection
