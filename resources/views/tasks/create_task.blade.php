@extends('master')

@section('title')
@if(Session::has('flash_error'))
    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><em> {!! session('flash_error') !!}</em></div>
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
Add a task
@endsection

@section('content')
<form class="form-horizontal" method="post" action="/task">
{!! csrf_field() !!}
    <div class="form-group">
        <label for="title" class="col-sm-2">Title:</label>
            <div class="col-sm-10">
                <input name="title" maxlength="50" placeholder="Enter title" require><br>
                <small id="titleHelp" class="form-text text-muted">The title of the task.</small>
            </div>
     </div>
     <div class="form-group">
        <label for="body" class="col-sm-2">Body:</label>
            <div class="col-sm-10">
              <textarea name="body" maxlength="500" class="form-control" rows="5" id="body" placeholder="Enter the body"></textarea>
              <small id="titleHelp" class="form-text text-muted">The body of the task.</small>
            </div>
    </div>
    <div class="form-group">
        <label for="body" class="col-sm-2">Deadline date:</label>
            <div class="col-sm-10">
              <input name="date" type="date" class="form-control" require>
              <small id="titleHelp" class="form-text text-muted">The date of deadline of the task.</small>
            </div>
    </div>
    <div class="form-group">
        <label for="body" class="col-sm-2">Deadline time:</label>
            <div class="col-sm-10">
              <input name="time" type="time" class="form-control">
              <small id="titleHelp" class="form-text text-muted">The time of deadline of the task.</small>
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
            <label class="checkbox-inline">
            <input type="checkbox" name="email">E-mail notification?</label>
            <br>
            <small class="form-text text-muted">Recieve an E-mail one day before the task's ending?</small>
        </div>
    </div>
    <div class="col-sm-2"> </div>
    <div class="form-group col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection