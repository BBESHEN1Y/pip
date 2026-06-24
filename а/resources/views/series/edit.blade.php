@extends('layouts.app')

@section('content')

<h1>Edit Series</h1>

<form method="POST"
      action="{{ route('series.update', $series) }}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Title</label>

        <input type="text"
               name="title"
               class="form-control"
               value="{{ old('title', $series->title) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>

        <textarea name="description"
                  class="form-control"
                  rows="4">{{ old('description', $series->description) }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Release Year</label>

        <input type="number"
               name="release_year"
               class="form-control"
               value="{{ old('release_year', $series->release_year) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Genre</label>

        <input type="text"
               name="genre"
               class="form-control"
               value="{{ old('genre', $series->genre) }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection