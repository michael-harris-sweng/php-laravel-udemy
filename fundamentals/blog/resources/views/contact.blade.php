@extends('layouts.app')

@section('content')
    <h1>Contact Page</h1>
    <p>{{$name}}'s Contacts</p>

    @if (count($people))
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@endsection

@section('footer')
    <script>alert("Hello " + $name + "!")</script>
@endsection