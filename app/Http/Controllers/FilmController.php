<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Realisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{

    public function test(){
        return view('test');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    
    {
        $films = Films::with('real')->get();
        $realisateurs= Realisateurs::all();
       return view('films',
    [
        'film' => $films,
        'real'=>$realisateurs,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addFilm(Request $request)
    {
        if($request->hasfile('image')){
        $path = Storage::disk('public')->put('images', $request->file('image')); }
    
        $film = new Films();
        $film ->titre=$request->titre;
        $film->resume=$request->extrait;
        $film->image=$path;
        $film->duree=$request->duree;
        $film->id_real=$request->realisateur;
        $film->save();
        return redirect()->Route('films');
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
        $films= Films::find($id);
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
    public function edit(Request $request,$id)
    {
        $edit = Films::find($id);
        $edit->titre = $request->input('titre');
        $edit->resume = $request->input('extrait');
        $edit->id_real = $request->input('auteurs');

        $edit->update() ;
        return redirect()->route('livres')->with('status','update effectué avec succés');
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
        //
    }
}
