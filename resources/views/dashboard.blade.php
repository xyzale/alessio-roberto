@extends('layouts.main')

@section('content')
<p>Dashboard</p>
@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="/edit" method="POST">
    <div>
        <input type="text" name="name" placeholder="name" value="{{ $user->name }}"/>
    </div>
    <div>
        <input type="text" name="email" placeholder="email" value="{{ $user->email }}" />
    </div>
    <!-- <div>
        <input type="password" name="password" placeholder="password" />
    </div> -->
    {{ csrf_field() }}
    <div>
        <button type="submit" name="submit">Modifica</button>
    </div>
</form>

@endsection