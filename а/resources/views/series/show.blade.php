@extends('layouts.app')

@section('content')

<h1>{{ $series->title }}</h1>

<div class="card mb-4">

    <div class="card-body">

        <p>
            <strong>Description:</strong>
            {{ $series->description }}
        </p>

        <p>
            <strong>Genre:</strong>
            {{ $series->genre }}
        </p>

        <p>
            <strong>Release Year:</strong>
            {{ $series->release_year }}
        </p>

    </div>

</div>

<h2>Episodes</h2>

<table class="table table-bordered">

    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Duration</th>
    </tr>
    </thead>

    <tbody>

    @forelse($series->episodes as $episode)

        <tr>
            <td>{{ $episode->episode_number }}</td>
            <td>{{ $episode->title }}</td>
            <td>{{ $episode->duration_minutes }} min</td>
        </tr>

    @empty

        <tr>
            <td colspan="3">
                No episodes
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection