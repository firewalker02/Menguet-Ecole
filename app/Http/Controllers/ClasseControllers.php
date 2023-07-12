<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ClasseControllers extends Controller
{
    /**
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function create(Request $request): Application|RedirectResponse|Redirector
    {
        $classe = new Classe();
       $classe->nom = $request->classe;
       $classe->enseignant = $request->enseignant;
       $classe->nbre_eleve = $request->nbre_eleve;
       $classe->frais_inscription = $request->inscription;
       $classe->frais_scolariter = $request->scolariter;
       $classe->save();

        return redirect(url('/admin/mentor'));
    }

    /**
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function delete($id) : Application|RedirectResponse|Redirector
    {
        $classe = Classe::find($id);
        $classe->delete();

        return redirect(url('/admin/mentor'));
    }
}
