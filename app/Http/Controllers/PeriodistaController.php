<?php

namespace App\Http\Controllers;

use App\Models\Periodista;
use Illuminate\Http\Request;

/**
 * Class PeriodistaController
 * @package App\Http\Controllers
 */
class PeriodistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodistas = Periodista::paginate();

        return view('periodista.index', compact('periodistas'))
            ->with('i', (request()->input('page', 1) - 1) * $periodistas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodista = new Periodista();
        return view('periodista.create', compact('periodista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Periodista::$rules);

        $periodista = Periodista::create($request->all());

        return redirect()->route('periodistas.index')
            ->with('success', 'Periodista created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periodista = Periodista::find($id);

        return view('periodista.show', compact('periodista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodista = Periodista::find($id);

        return view('periodista.edit', compact('periodista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Periodista $periodista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodista $periodista)
    {
        request()->validate(Periodista::$rules);

        $periodista->update($request->all());

        return redirect()->route('periodistas.index')
            ->with('success', 'Periodista updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $periodista = Periodista::find($id)->delete();

        return redirect()->route('periodistas.index')
            ->with('success', 'Periodista deleted successfully');
    }
}
