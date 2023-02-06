@extends('layouts.main')

@section('title')
    Show
@endsection

@section('main')
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

    <a href={{ route('saints.index') }}><- back</a>
@endsection
