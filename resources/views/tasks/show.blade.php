@extends('layouts.main')

@section('title', 'Show Task')

@section('content')

    <div class="panel-body">
        <h1>Task info</h1>
        <table class="table table-striped task-table">
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>
                {{$task->name}}
                </td>
                <td>
                    {{$task->description}}
                </td>
            </tr>
            </table>
        </div>
        <a href="/task">Back</a>

@endsection
