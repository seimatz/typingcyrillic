<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function index(Request $request, $lang, $level)
    {
      $items = DB::table($lang.'_qs')
      ->where('level', $level)
      ->orderByRaw('RAND()')
      ->limit(15)
      ->get();
      $questions = array();
      foreach($items as $item){
         array_push($questions, $item->question);
      }
      $q_sentence = join('/', $questions);
      return view('game', ['q_sentence'=>$q_sentence]);
    }
}
