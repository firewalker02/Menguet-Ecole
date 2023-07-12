<?php

namespace App\Http\Controllers;


use App\Models\Eleve;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class ElevesController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    #[NoReturn] public function create(Request $request): Application|RedirectResponse|Redirector
    {

        $image_name = date('Y-m-d s').".".$request->file('file')->extension();
        $path = public_path('users/');

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $image = $request->file('file')->move(public_path('users'), $image_name);

        if(Storage::exists($image))
        {
            Storage::delete($image);
        }

        $eleves = new Eleve();
        $eleves->nom = $request->nom;
        $eleves->prenom = $request->prenom;
        $eleves->sexe = $request->Sexe;
        $eleves->image = 'users/'.$image_name;
        $eleves->date_naissance = $request->date;
        $eleves->lieu_naissance = $request->lieu;
        $eleves->classe = $request->classe;
        $eleves->nom_pere = $request->pere;
        $eleves->nom_mere = $request->mere;
        $eleves->telephone1 = $request->tel1;
        $eleves->telephone2 = $request->tel2;
        $eleves->email = $request->email;
        $eleves->description = $request->description;
        $eleves->adresse = $request->adresse;
        $eleves->save();

        return redirect(url('/admin/mentee'));
    }

    /**
     * @param $eleve_id
     * @return Factory|View|Application
     */
    public function ViewProfile($eleve_id): Factory|View|Application
    {
        $eleve = Eleve::find($eleve_id);
        return view('admin.profile')->with('eleve', $eleve);
    }

    /**
     * @param Request $request
     * @param $eleve_id
     * @return Application|Factory|View
     */
    public function Update(Request $request, $eleve_id): View|Factory|Application
    {
        $input = $request->all();

        $eleve = Eleve::find($eleve_id);
        $wallets = $eleve->update($input);
        return view('admin.profile')->with('eleve', $eleve);
    }

    /**
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function delete($id) : Application|RedirectResponse|Redirector
    {
        $classe = Eleve::find($id);
        $classe->delete();

        return redirect(url('/admin/mentee'));
    }

    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function SortBy(Request $request): Factory|View|Application
    {
        $eleve = Eleve::where('classe', 'like', $request->classe)->get();
        return view('admin.mentee')->with('eleves', $eleve);
    }
}
