<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

/**
 * Class OwnerController
 * @package App\Http\Controllers
 */
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Obtener el término de búsqueda desde la solicitud
        $search = $request->input('search');

        // Si existe un término de búsqueda, aplicar el filtro en la consulta
        $owners = Owner::when($search, function ($query, $search) {
        return $query->where('name', 'LIKE', "%{$search}%")
                     ->orWhere('phone', 'LIKE', "%{$search}%")
                     ->orWhere('address', 'LIKE', "%{$search}%");
        })
        ->paginate(10);

        // Retornar la vista, asegurando que 'search' se mantenga en las consultas posteriores
        return view('owner.index', compact('owners'))
            ->with('i', (request()->input('page', 1) - 1) * $owners->perPage())
            ->with('search', $search); // Pasar la variable de búsqueda a la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner = new Owner();
        return view('owner.create', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Owner::$rules);

        $owner = Owner::create($request->all());

        return redirect()->route('owners.index')
            ->with('success', 'Owner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::find($id);

        return view('owner.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);

        return view('owner.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        request()->validate(Owner::$rules);

        $owner->update($request->all());

        return redirect()->route('owners.index')
            ->with('success', 'Owner updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $owner = Owner::find($id);

        if ($owner) {
            $owner->pets()->delete(); // Eliminar mascotas asociadas
            $owner->delete();
        }

        return redirect()->route('owners.index')
            ->with('success', 'Owner deleted successfully');
    }
}
