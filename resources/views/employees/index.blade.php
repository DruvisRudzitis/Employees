@extends('layouts.app')
@section('content')
    <div class="container">

        <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">
            Create new employee profile
        </a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Comment</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}">
                            {{ $employee->name }}
                        </a>
                    </td>
                    <td>{{ $employee->surname }}</td>
                    <td>{{ $employee->text_comment }}</td>
                    <td>{{ $employee->date_of_birth }}</td>
                    <td>{{ $employee->created_at->format('Y-m-d h:i') }}</td>
                    <td>{{ $employee->updated_at->format('Y-m-d h:i') }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form method="post" action="{{ route('employees.destroy', $employee) }}" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
