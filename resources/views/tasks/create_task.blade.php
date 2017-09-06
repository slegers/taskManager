@extends('master')
@section('header')
@include('layout.header')
@endsection
@section('title')
Add a task
@endsection

@section('content')
<form class="form-horizontal" action="post">
    <div class="form-group">
        <label for="title" class="col-sm-2">Title:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
                <small id="titleHelp" class="form-text text-muted">The title of the task.</small>
            </div>
     </div>
     <div class="form-group">
        <label for="body" class="col-sm-2">Body:</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="body" placeholder="Enter the body"></textarea>
              <small id="titleHelp" class="form-text text-muted">The body of the task.</small>
            </div>
    </div>
    <div class="form-group">
        <label for="body" class="col-sm-2">Deadline:</label>
            <div class="col-sm-10">
              <input type="datetime-local" class="form-control" rows="5" >
              <small id="titleHelp" class="form-text text-muted">The deadline of the task.</small>
            </div>
    </div>
    <!--
    <div class="form-group">
        <label for="body" class="col-sm-2">Tags:</label>
        <div class="col-sm-10">
            <input type="text" data-role="tagsinput">
            <small id="titleHelp" class="form-text text-muted">The tags associated with this task.</small>
        </div>
    </div> -->
    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <label class="checkbox-inline"><input type="checkbox" value="">E-mail notification?</label>
            <br>
            <small class="form-text text-muted">Recieve an E-mail one day before the task's ending?</small>
        </div>
    </div>
    <div class="col-sm-2"> </div>
    <div class="form-group col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection