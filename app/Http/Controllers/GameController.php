<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function index(Request $request, $lang, $level)
    {
      if($level == 1){
        $limit = 30;
      } else {
        $limit = 15;
      }
      $items = DB::table($lang.'_qs')
      ->where('level', $level)
      ->orderByRaw('RAND()')
      ->limit($limit)
      ->get();
      $questions = array();
      $trans_en = array();
      $trans_jp = array();

      foreach($items as $item){
         array_push($questions, $item->question);
         array_push($trans_en, $item->en."  ".$item->jp);
         array_push($trans_jp, $item->jp);
      }
      $q_sentence = join('/', $questions);
      $en_sentence = join('/', $trans_en);
      $jp_sentence = join('/', $trans_jp);

      $lang_jp = "言語名";
      if($lang == "russian"){
        $lang_jp = "ロシア語";
      } elseif($lang == "ukrainian"){
        $lang_jp = "ウクライナ語";
      } elseif($lang == "bulgarian"){
        $lang_jp = "ブルガリア語";
      } elseif($lang == "belarusian"){
        $lang_jp = "ベラルーシ語";
      }
      return view('game', ['q_sentence'=>$q_sentence, 'lang_jp'=>$lang_jp, 'en_sentence'=>$en_sentence, 'jp_sentence'=>$jp_sentence]);
    }
}
