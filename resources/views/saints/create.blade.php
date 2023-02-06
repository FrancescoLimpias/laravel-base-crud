@extends('layouts.main')

@section('title')
    Create
@endsection

@section('main')
    <form action={{ route('saints.store') }} method="post">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <br>

        <input type="text" name="birthPlace" placeholder="Birth place">
        <br>

        <label for="inputSanctDate">Sanctification Date</label>
        <br>
        <input type="date" name="sanctificationDate" id="inputSanctDate">
        <br>

        <input type="number" name="miraclesNumber" placeholder="Miracles">
        <br>

        <br>
        <input type="submit" value="Sanctificate">
    </form>

    @include('components.toIndex')
@endsection
