@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h1>Episodes</h1>

    <a href="{{ route('episodes.create') }}"
       class="btn btn-primary">
        Add Episode
    </a>

</div>

<table class="table table-bordered">

    <thead>
    <tr>
        <th>Title</th>
        <th>Episode</th>
        <th>Duration</th>
        <th>Series</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>

    @foreach($episodes as $episode)

        <tr>

            <td>{{ $episode->title }}</td>

            <td>{{ $episode->episode_number }}</td>

            <td>{{ $episode->duration_minutes }} min</td>

            <td>{{ $episode->series->title }}</td>

            <td>

                <a href="{{ route('episodes.show', $episode) }}"
                   class="btn btn-info btn-sm">
                    View
                </a>

                <a href="{{ route('episodes.edit', $episode) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form method="POST"
                      action="{{ route('episodes.destroy', $episode) }}"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

@endsection