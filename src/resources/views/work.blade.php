@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/work.css') }}">
@endsection



@section('nav')
<nav class="header-nav">
    @if (Auth::check())
    <ul class="header-nav-list">
        <li class="header-nav-item"><a href="{{ url('/') }}">ホーム</a></li>
        <li class="header-nav-item"><a href="{{ url('/date-list') }}">日付一覧</a></li>
        <li class="header-nav-item"><a href="{{ url('/logout') }}">ログアウト</a></li>
    </ul>
    @endif
</nav>
@endsection

@section('content')

<div class="work">
<div class="header-message">
    <h1>さんお疲れ様です！</h1>
</div>

<div class="container">
    <div class="container__work">
        <a href="" class="square">勤務開始</a>
        <a href="" class="square">勤務終了</a>
        <a href="" class="square">休憩開始</a>
        <a href="" class="square">休憩終了</a>
    </div>








</div>
@endsection