@extends('layout.master')

@section('title', $title)

@section('content')
<h1>{{$title}}</h1>

<div class="social">
  <a href="#">分享到 Facebook</a>
  <a href="#">分享到 Twitter</a>
</div>

E-mail:
<input type="email" name="email" placeholder="Email"/>
<br>
密碼:
<input type="password" name="password" placeholder="密碼"/>
<br>
暱稱:
<input type="text" name="nickname" placeholder="暱稱"/>
@endsection
