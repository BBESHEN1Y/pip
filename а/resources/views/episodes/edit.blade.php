@extends('layouts.app')

@section('content')

<h1>Edit Episode</h1>

<form method="POST"
      action="{{ route('episodes.update', $episode) }}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Title</label>

        <input type="text"
               name="title"
               class="form-control"
               value="{{ old('title', $episode->title) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Episode Number</label>

        <input type="number"
               name="episode_number"
               class="form-control"
               value="{{ old('episode_number', $episode->episode_number) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>

        <input type="number"
               name="duration_minutes"
               class="form-control"
               value="{{ old('duration_minutes', $episode->duration_minutes) }}">
    </div>

    <div class="mb-3">

        <label class="form-label">
            Series
        </label>

        <select name="series_id"
                class="form-select">

            @foreach($series as $item)

                <option
                    value="{{ $item->id }}"
                    @selected($item->id == $episode->series_id)
                >
                    {{ $item->title }}
                </option>

            @endforeach

        </select>

    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection