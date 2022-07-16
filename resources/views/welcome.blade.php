@extends('layouts.main')

@section('content')
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        @if(session()->has('error'))
            {{ session()->get('error') }}
        @endif
        <form action="/authenticate" method="POST">
            <div>
                <input type="text" name="email" placeholder="email" />
            </div>
            <div>
                <input type="password" name="password" placeholder="password" />
            </div>
            {{ csrf_field() }}
            <div>
                <button type="submit" name="submit">Accedi</button>
            </div>
        </form>
    </div>
@endsection
