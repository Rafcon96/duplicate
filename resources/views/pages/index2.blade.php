@extends('layouts.default')
@section('content')
<div class="row mt-3">
        <div class="col-12 text-center">
            <h1>Merge & Fix Contact Records</h1>
        </div>
    </div>
    <div class="table-responsive">
    <table  class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th scope="col" class="th-sm">ID</th>
                <th scope="col" class="th-sm">First Name</th>
                <th scope="col" class="th-sm">Last Name</th>
                <th scope="col" class="th-sm">Prefix</th>
                <th scope="col" class="th-sm">Phone</th>
                <th scope="col" class="th-sm">E-mail</th>
            </tr>
            </thead>
            <tbody>
        @foreach ($members as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>+{{ $user->prefix }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop
