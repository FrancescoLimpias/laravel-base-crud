@extends('layouts.main')

@section('title')
    Edit
@endsection

@section('main')
    <form action={{ route('saints.update', $saint->id) }} method="post">
        @csrf
        @method('PUT')

        <input type="text" name="name" placeholder="Name" value={{ $saint->name }}>
        <br>

        <input type="text" name="birthPlace" placeholder="Birth place" value={{ $saint->birthPlace }}>
        <br>

        <label for="inputSanctDate">Sanctification Date</label>
        <br>
        <input type="date" name="sanctificationDate" id="inputSanctDate" value={{ $saint->sanctificationDate }}>
        <br>

        <input type="number" name="miraclesNumber" placeholder="Miracles" value={{ $saint->miraclesNumber}}>
        <br>

        <br>
        <input type="submit" value="Sanctificate">
    </form>

    @include('components.toIndex')
@endsection
