@extends('layouts.main')

@section('title')
    Show
@endsection

@section('main')
    <a href={{ route('saints.edit', $saint->id) }}>Edit</a>
    <ul>
        <li>
            Name:
            <b>
                {{ $saint['name'] }}
            </b>
        </li>
        <li>
            BirthPlace:
            <b>
                {{ $saint['birthPlace'] }}
            </b>
        </li>
        <li>
            Sanctification:
            <b>
                {{ $saint['sanctificationDate'] }}
            </b>
        </li>
        <li>
            Miracles:
            <b>
                {{ $saint['miraclesNumber'] }}
            </b>
        </li>
    </ul>

    @include('components.toIndex')
@endsection
