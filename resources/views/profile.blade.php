@extends('layouts.master')
@section('title') Profile @endsection
@section('main')
    <h3>Profile</h3>
    <p>method classique</p>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>métier</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['metier']}}</td>
        </tr>
            
        @endforeach
    </table>
    <p>another method component </p>
<x-users-table :users='$users' />
@endsection