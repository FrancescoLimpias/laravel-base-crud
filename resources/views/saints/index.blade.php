@extends('layouts.main')

@section('title')
    Index
@endsection

@section('main')
    <a href={{ route('saints.create') }}>
        <button>Sanctificate someone</button>
    </a>
    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href={{ route('saints.show', $saint->id) }}>{{ $saint['name'] }}</a> [<a href="">❌</a>]
            </li>
        @endforeach
    </ul>
@endsection
