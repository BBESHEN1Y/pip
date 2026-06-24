<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEpisodeRequest;
use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EpisodeController extends Controller
{
    public function index(): View
    {
        $episodes = Episode::with('series')
            ->latest()
            ->get();

        return view('episodes.index', compact('episodes'));
    }

    public function create(): View
    {
        $series = Series::orderBy('title')->get();

        return view('episodes.create', compact('series'));
    }

    public function store(
        StoreEpisodeRequest $request
    ): RedirectResponse {
        Episode::create($request->validated());

        return redirect()
            ->route('episodes.index')
            ->with('success', 'Episode created successfully.');
    }

    public function show(Episode $episode): View
    {
        $episode->load('series');

        return view('episodes.show', compact('episode'));
    }

    public function edit(Episode $episode): View
    {
        $series = Series::orderBy('title')->get();

        return view(
            'episodes.edit',
            compact('episode', 'series')
        );
    }

    public function update(
        StoreEpisodeRequest $request,
        Episode $episode
    ): RedirectResponse {
        $episode->update($request->validated());

        return redirect()
            ->route('episodes.index')
            ->with('success', 'Episode updated successfully.');
    }

    public function destroy(
        Episode $episode
    ): RedirectResponse {
        $episode->delete();

        return redirect()
            ->route('episodes.index')
            ->with('success', 'Episode deleted successfully.');
    }
}