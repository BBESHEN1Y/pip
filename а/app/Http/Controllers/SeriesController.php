<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeriesRequest;
use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = Series::latest()->get();

        return view('series.index', compact('series'));
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(StoreSeriesRequest $request): RedirectResponse
    {
        Series::create($request->validated());

        return redirect()
            ->route('series.index')
            ->with('success', 'Series created successfully.');
    }

    public function show(Series $series): View
    {
        $series->load('episodes');

        return view('series.show', compact('series'));
    }

    public function edit(Series $series): View
    {
        return view('series.edit', compact('series'));
    }

    public function update(
        StoreSeriesRequest $request,
        Series $series
    ): RedirectResponse {
        $series->update($request->validated());

        return redirect()
            ->route('series.index')
            ->with('success', 'Series updated successfully.');
    }

    public function destroy(Series $series): RedirectResponse
    {
        $series->delete();

        return redirect()
            ->route('series.index')
            ->with('success', 'Series deleted successfully.');
    }
}