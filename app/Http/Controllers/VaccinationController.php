<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\Http\Request;

/**
 * Class VaccinationController
 * @package App\Http\Controllers
 */
class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccinations = Vaccination::paginate(10);

        return view('vaccination.index', compact('vaccinations'))
            ->with('i', (request()->input('page', 1) - 1) * $vaccinations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccination = new Vaccination();
        return view('vaccination.create', compact('vaccination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vaccination::$rules);

        $vaccination = Vaccination::create($request->all());

        return redirect()->route('vaccinations.index')
            ->with('success', 'Vaccination created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccination = Vaccination::find($id);

        return view('vaccination.show', compact('vaccination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccination = Vaccination::find($id);

        return view('vaccination.edit', compact('vaccination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vaccination $vaccination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination $vaccination)
    {
        request()->validate(Vaccination::$rules);

        $vaccination->update($request->all());

        return redirect()->route('vaccinations.index')
            ->with('success', 'Vaccination updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vaccination = Vaccination::find($id)->delete();

        return redirect()->route('vaccinations.index')
            ->with('success', 'Vaccination deleted successfully');
    }
}
