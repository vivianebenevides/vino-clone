<?php

namespace App\Http\Controllers;
use App\Services\SAQ;
use Illuminate\Http\Request;

class SAQController extends Controller
{
    public function index(){
        return view('importation');
    }
    public function scrapeSAQ(Request $request)
    {
        $nombreProduits = 0;
        $nombreProduit = $request->input('nombre');
        $page = $request->input('pages');
        $saq = new SAQ();
        for($i=1; $i<= $page ;$i++){
            $nombreProduits += $saq->getProduits($nombreProduit,$i);
        }
        
        return "Nombre de produits insérés : " . $nombreProduits;
    }
}