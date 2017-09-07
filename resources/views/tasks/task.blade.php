@extends('master')
@section('title')
Show Task
@endsection

@section('content')
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">Title:</div>
    </div>
    <div class="col-sm-8">
        <p>{{ $taak->title }}</p>
    </div>
</div>
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">
            <body> Body:</body>
        </div>
    </div>
    <div class="col-sm-8">
        <p>{{ $taak->omschrijving }}
        </p>
    </div>
</div>
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">
            <body>Deadline:</body>
        </div>
    </div>
    <div class="col-sm-8">
        <p>{{ date('l d F',strtotime($taak->deadline_date)) }} at {{ $taak->deadline_time }}</p>
    </div>
</div>
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">
            <body>E-mail:</body>
        </div>
    </div>
    <div class="col-sm-8">
        <p> {{ $taak->notificate == 0 ? "no" : "yes" }} </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form class="showForm">
                <input type="submit" value="edit">
                <input type="submit" value="delete">
            </form>
        </div>
</div>
@endsection