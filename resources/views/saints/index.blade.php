@extends('layouts.main')

@section('title')
    Index
@endsection

@section('main')
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="">{{ $saint['name'] }}</a> [<a href="">X</a>]
            </li>
        @endforeach
    </ul>
@endsection
