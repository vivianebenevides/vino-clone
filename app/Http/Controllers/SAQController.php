<?php

namespace App\Http\Controllers;
use App\Services\SAQ;
use Illuminate\Http\Request;

class SAQController extends Controller
{
    public function scrapeSAQ()
    {
        $page = 1;
	    $nombreProduit = 96; //48 ou 96	
        $saq = new SAQ();
        for($i=0; $i<4;$i++){
            $nombreProduits = $saq->getProduits($nombreProduit,$page+$i);
        }
        
        return "Nombre de produits insérés : " . $nombreProduits;
    }
}