<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\View\View;
class SeriesController extends Controller
{
  
   function index() {
      
      
//$series = \App\Models\Serie::all(); //get all series
      $series_depuis_bdd = \App\Models\Serie::limit(3)->get(); //get latest3 series;
      //on a passer les données a la vue
        return view('series',array(
          'series'=>$series_depuis_bdd,
          // 'title' => "un titre"
        ));


        
      }

      public function show($serie_url) : View
      {
        $serie = \App\Models\Serie::where('url',$serie_url)->first(); //get first serie with serie_nam == $serie_name

        return view('series/single',array( //Pass the serie to the view
            'serie' => $serie,
            'comments' => $serie->comments()//->get()->paginate(5)
            
           ));
     }

     
     
      
}
