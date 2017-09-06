@section('header')
@include('layout.header')
@endsection
@extends('master')
@section('title')
Main Content Section
@endsection

@section('content')
<p> Welkom op de site van Task manager. Deze site is bedoeld om op een eenvoudige 
                  manier taken toe te voegen die moeten worden uitgevoerd.</p>
                  
<p> Taken kunnen worden voorzien worden van één of meerder tags. Zo kunnen de taken 
worden gesorteerd en gefilterd worden volgens deze tags. De prioriteit kan hier
ook een deel mee worden bepaald. Dit heeft als voordeel dat taken op een bepaalde
manier kunnen worden gesorteerd op graad van belangerijkheid.  </p>
@endsection