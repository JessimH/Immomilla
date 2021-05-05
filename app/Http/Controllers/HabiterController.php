<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biens;

class HabiterController extends Controller
{
    //
    public function index()
    {
        $biens = Biens::all();
        $images_files=[];
        foreach ($biens as $bien){
            $result = $bien;
            $result_images = rtrim($result->filenames, ' ]');
            $result_images = substr($result_images, 1);
            $result_images = explode(",", $result_images);
            $images = [];
            foreach ($result_images as $image){
                $image = rtrim($image, '"');
                $image = substr($image, 1);
                array_push($images, $image);
            }
            array_push($images_files, $images);
        }

        // dd($images_files);
        
        return view('habiter', compact('biens', 'images_files'));   
    }

    public function show(Request $request)
    {
        //
        $search = $request->all();
        $results = Biens::select('*')
        ->where('type', '=', $search['type'])
        ->where('price', '<=', $search['price'])
        ->where('surface', '>=', $search['surface'])
        ->where('departement', '=', $search['departement'])
        ->get();
        $images_files=[];
        foreach ($results as $result){
            $result = $result;
            $result_images = rtrim($result->filenames, ' ]');
            $result_images = substr($result_images, 1);
            $result_images = explode(",", $result_images);
            $images = [];
            foreach ($result_images as $image){
                $image = rtrim($image, '"');
                $image = substr($image, 1);
                array_push($images, $image);
            }
            array_push($images_files, $images);
        }
    
        // dd($images_files);
        // $biens = Biens::paginate(4);
        return view('resultats', compact('results', 'search', 'images_files'));  
    }

    public function showBien(Biens $bien)
    {
        //1 seul ressource
        $result = $bien;
        $result_images = rtrim($result->filenames, ' ]');
        $result_images = substr($result_images, 1);
        $result_images = explode(",", $result_images);
        $images = [];
        foreach ($result_images as $image){
            $image = rtrim($image, '"');
            $image = substr($image, 1);
            array_push($images, $image);
        }
        // $images = $result->filenames;
        // dd($images);
        return view('bien', compact('result', 'images'));
    }
}
