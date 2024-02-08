@extends('layouts.app')
@section('content')
    
<div class="login">
    @include('commons.errors')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login_menu">
            {{-- <h1 class="login_title">ログイン</h1> --}}
            <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="login_button">
            <button type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection()