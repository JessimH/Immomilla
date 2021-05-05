<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biens;
use App\Models\File;

class AdminController extends Controller
{
    //
    public function index()
    {
        $biens = Biens::latest()->get();
        return view('admin', ['biens' => $biens]);   
    }

    public function add()
    {
        return view('ajoutBien');   
    }

    public function store(Request $request)
    {
        Biens::create($validatedAttributes = request()->validate([
            'title' => 'required',
            'promoteur' => 'required',
            'price' => 'required',
            'adresse' => 'required',
            'departement' => 'required',
            'rentabilite' => 'required',
            'description' => 'required',
            'pieces' => 'required',
            'pinel' => 'required',
            'surface' => 'required',
            'type' => 'required',
        ]));


        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:png,jpeg,jpg,svg'
        ]);

        $dernierBien = Biens::latest()->first();
        
        $i = 0;
        $id = $dernierBien->id;
        foreach ($request->file('filenames') as $file) {
            $name = $dernierBien['id'].$i.'.'.$file->extension();
            $file->move(public_path().'/files/', $name);
            $data[] = $name;
            $i += 1;
        }

        $updateFile = Biens::where('id', $id)
                        ->first(); // this point is the most important to change
        $updateFile->filenames = $data;
        $updateFile->save();

        $file= new File();
        $file->filenames=json_encode($data);
        $file->save();

        return redirect('/admin')
                ->with('success','Votre Biens a bien été ajouté en base de données !');
    }

    public function destroy($id)
    {
        $bienToDelete = Biens::where('id', $id)->get();

        if(count($bienToDelete)>0){
            Biens::where('id', $id )->delete();

            return redirect('/admin')->with('success','Votre Bien a bien été suprimé de la Base de données !');
        }
        else{
            return redirect('/admin')->with('error','Le bien est introuvable, contactez votre administrateur de base de données.');
        } 
        
    }
}
