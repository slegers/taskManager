@extends('master')
@section('title')
Overview Tasks
@endsection
@section('content')
    <h3>Open Tasks</h3>
        <table class="table">
        <tr>
            <th> Id. </th>
            <th> title </th>
            <th> date </th>
            <th> Completed? </th>
        </tr>
        @forelse ($open_tasks as $task)
        <tr>
            <td> {{ $task->id}}. </td>
            <td> {{ $task->title }} </td>
            <td> {{ $task->deadline_date }} </td>
            <td> Yes </td>
        </tr>
        @empty
             <p>No open Tasks</p>
        @endforelse
    </table>
    {{ $open_tasks->links() }}

    <h3>Closed Tasks</h3>
        <table class="table">
        <tr>
            <th> Id. </th>
            <th> title </th>
            <th> date </th>
            <th> Completed? </th>
        </tr>
        @forelse ($closed_tasks as $task)
        <tr>
            <td> {{ $task->id}}. </td>
            <td> {{ $task->title }} </td>
            <td> {{ $task->deadline_date }} </td>
            <td> Yes </td>
        </tr>
        @empty
             <p>No open Tasks</p>
        @endforelse
    </table>
    {{ $closed_tasks->links() }}
@endsection
