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
        <p>De title van deze eerste taak</p>
    </div>
</div>
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">
            <body> Body:</body>
        </div>
    </div>
    <div class="col-sm-8">
        <p>De volledige omschrijving van deze taak. Het is de bedoeling dat hier een paar regels
        tekst komen. Zo is het het voorbeeld beter te begrijpen.
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
        <p>Donderdag 9 september 2017</p>
    </div>
</div>
<div class="row line">
    <div class="col-sm-2">
        <div class="showTitle">
            <body>E-mail:</body>
        </div>
    </div>
    <div class="col-sm-8">
        <p> yes</p>
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