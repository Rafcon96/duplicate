@extends('layouts.default')
@section('content')

<div class="jumbotron ">
  <h1 class="display-4">Finding Duplicates Project!</h1>
  <p class="lead">This is a simple project using mysql, laravel, mamp and php to find duplicate members in a specific app.</p>
  <hr class="my-4">
  <p>I used a union of 3 queries to find the duplicate members.</p>
  <li>Query I: Contains records of duplicate names+surnames</li>
  <li>Query II: Contains records of duplicate prefixes+phone numbers</li>
  <li class="mb-5">Query III: Contains records of duplicate e-mails</li>
  <a class="btn btn-primary btn-lg ml-2" href="/merge&fix" role="button">MERGE & FIX TABLE</a>
  <a class="btn btn-primary btn-lg" href="/full-table" role="button">FULL TABLE</a>
</div>
                    
@stop

