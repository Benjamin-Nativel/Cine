<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use App\Models\Realisateurs;
use App\Models\Salles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;

class FilmController extends Controller
{

    public function test()
    {
        return view('test');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function News()

    {

        $films = Films::with('categ')->get();
        $realisateurs = Realisateurs::all();
        $categs = Categories::all();
        $salles = Salles::all();
        return view(
            'index',
            [
                'film' => $films,
                'real' => $realisateurs,
                'categ' => $categs,
                'salle' => $salles

            ]
        );
    }
    // public function films()

    // {

    //     $films = Films::with('categ')->get();
    //     $realisateurs = Realisateurs::all();
    //     $categs = Categories::all();
    //     $salles = Salles::all();
    //     return view(
    //         'index',
    //         [
    //             'film' => $films,
    //             'real' => $realisateurs,
    //             'categ' => $categs,
    //             'salle' => $salles

    //         ]
    //     );
    // }

    
    public function getAll()

    {

        $films = Films::with('categ')->with('real')->get();
        $realisateurs = Realisateurs::all();
        $categs = Categories::all();
        $salles = Salles::all();
        return view(
            'films',
            [
                'film' => $films,
                'real' => $realisateurs,
                'categ' => $categs,
                'salle' => $salles

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addFilm(Request $request,)
    {
        if ($request->hasfile('image')) {
            $path = Storage::disk('public')->put('images', $request->file('image'));
        }

        $validate = $request->validate([
            'titre' => 'required|max:150',
            'resume' => 'required',
            'realisateurs' => 'required',
            'tps' => 'required|max:100',
            'categories' => 'required|min:1',
            'image' => 'required',


            'salle' => 'required|exists:salles,id',
        ]);
        $film = Films::with(['real', 'categ'])->find($request->input('id'));



        $film = new Films();
        $film->id = $request['id'];
        $film->titre = $validate['titre'];
        $film->resume = $validate['resume'];
        $film->image = $path;
        $film->duree = $validate['tps'];
        $film->id_real = $validate['realisateurs'];
        $film->id_salle = $validate['salle'];
        $film->save();
        $film->categ()->attach($validate['categories']);
        return redirect()->Route(
            'films'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $films = Films::find($id);
        if (isset($films)) {
            return view(
                'film',
                [
                    'film' => $films,

                ]
            );
        } else {
            return redirect()->route('livres');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
            $path = Storage::disk('public')->put('images', $request->file('image'));
        

        
        $edit = Films::with('categ')->where('id','=',$id)->get();
         $edit= Films::find($id);
        $edit->titre = $request['titre'];
        $edit->resume = $request['resume'];
        $edit->id_real = $request['realisateurs'];
        $edit->image = $path;
        $edit->id_salle = $request['salle'];
        $edit->duree = $request['tps'];
        $edit->categ()->sync($request['categories']);
        $edit->update();

        return redirect()->route('films')->with('status', 'update effectué avec succés');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $del= Films::find($id);
        $del->delete();

        return redirect()->back();
    }
}
