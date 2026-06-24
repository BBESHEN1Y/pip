@extends('layouts.app')

@section('content')

<h1>Create Episode</h1>

<form method="POST"
      action="{{ route('episodes.store') }}">

    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>

        <input type="text"
               name="title"
               class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Episode Number</label>

        <input type="number"
               name="episode_number"
               class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>

        <input type="number"
               name="duration_minutes"
               class="form-control">
    </div>

    <div class="mb-3">

        <label class="form-label">
            Series
        </label>

        <select name="series_id"
                class="form-select">

            @foreach($series as $item)

                <option value="{{ $item->id }}">
                    {{ $item->title }}
                </option>

            @endforeach

        </select>

    </div>

    <button class="btn btn-success">
        Save
    </button>

</form>

@endsection