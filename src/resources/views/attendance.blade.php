@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
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


<style>
  table {
    margin: 0 auto;
    text-align: center;
  }

  tr {
    border-top: 0.5px solid #000;
    font-weight: bold
  }

  th {
    padding: 20px 70px;
  }

  td {
    padding: 25px 40px;
    text-align: center;
  }
</style>
@section('title', 'attendance.blade.php')

@section('content')
<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>2021-11-01</h2>
  </div>


  <table>
    <tr>
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>
        {{ $user->name }}
      </td>
    </tr>
    @endforeach
  </table>

  <div class="pagination">
    {{ $users->onEachSide(5)->links() }}
  </div>

</div>












@endsection