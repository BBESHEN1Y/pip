@extends('layouts.app')

@section('content')

<h1>{{ $episode->title }}</h1>

<div class="card">

    <div class="card-body">

        <p>
            <strong>Series:</strong>
            {{ $episode->series->title }}
        </p>

        <p>
            <strong>Episode Number:</strong>
            {{ $episode->episode_number }}
        </p>

        <p>
            <strong>Duration:</strong>
            {{ $episode->duration_minutes }} min
        </p>

    </div>

</div>

@endsection