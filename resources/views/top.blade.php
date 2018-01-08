@section('title', 'Typing.Slavs')

@extends('layouts.main')

@section('content')
<main>
<div class="container">
  <div class="row">
    <div class="col s12">
    <div class="card-panel">
      <h4>ようこそ Welcome!</h4>
      <p>Typing.Slavs は、スラヴ系言語のタイピング練習のためのウェブアプリです。</p>
      <p>Chrome、Firefox、Safariの最新版で正常に動作します。PCのみです。</p>
        <p>キーボードの入力言語を各言語のキーボードに切り替えて、ゲームを始めてください。<a href="/contents/setting/">ロシア語キーボードの設定方法</a></p>
      <p>Typing-Ruは開発中です。バクを見つけたら<a href="https://goo.gl/forms/LfdHgaVzdLPRTayX2" target="_blank">バグ報告フォーム</a>からご連絡ください。要望もこちらから。</p>
    </div>
    </div>

    <div class="col s6">
    <div class="card">
      <div class="card-content">
        <h4>ロシア語</h4>
      </div>
      <div class="card-tabs">
        <ul class="tabs tabs-fixed-width">
          <li class="tab"><a href="#ru-level1" class="active">Level 1</a></li>
          <li class="tab"><a href="#ru-level2">Level 2</a></li>
          <li class="tab"><a href="#ru-level3">Level 3</a></li>
          <li class="tab"><a href="#ru-original">Original</a></li>
        </ul>
      </div>
      <div class="card-content grey lighten-4">
          <div id="ru-level1">アルファベットまたは記号を１文字ずつ練習します。  <a class="btn-floating btn-middle waves-effect waves-light"><i class="material-icons">play_arrow</i></a>

</div>
        <div id="ru-level2">基礎単語1,000語から、ランダムで30問を出題します。</div>
        <div id="ru-level3">会話表現・ことわざなどからランダムで15問を出題します。</div>
        <div id="ru-original">Comming soon!</div>

      </div>
    </div>
  </div>


  </div>
</div>
</main>

@include('layouts.footer')

@endsection
