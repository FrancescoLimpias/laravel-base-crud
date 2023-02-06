@extends('layouts.main')

@section('title')
    Index
@endsection

@section('main')
    {{-- <button href={{ route('saints.create') }}>Sanctificate someone</button> --}}
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href={{ route('saints.show', $saint->id) }}>{{ $saint['name'] }}</a> [<a href="">❌</a>]
            </li>
        @endforeach
    </ul>
@endsection
