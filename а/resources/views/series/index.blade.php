@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h1>Series</h1>

    <a href="{{ route('series.create') }}"
       class="btn btn-primary">
        Add Series
    </a>
</div>

<table class="table table-bordered table-striped">

    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>

    @forelse($series as $item)

        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->genre }}</td>
            <td>{{ $item->release_year }}</td>

            <td>

                <a href="{{ route('series.show', $item) }}"
                   class="btn btn-info btn-sm">
                    View
                </a>

                <a href="{{ route('series.edit', $item) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('series.destroy', $item) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>

                </form>

            </td>
        </tr>

    @empty

        <tr>
            <td colspan="5">
                No series found
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection