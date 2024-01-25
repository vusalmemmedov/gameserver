@extends('layouts.base')
@section('link')
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/style.css">
@endsection
@section('content')
    <main id="main">
        <div class="main_all">
            <div class="container">
                <div class="signin">

                    <div class="content">

                        <h2>Qeydiyyat</h2>

                        <form action="{{ route('register') }}" class="form" method="POST">
                            @csrf
                            <div class="inputBox">
                                <input type="text" name="name" required> <i>İstifadəçi Adı</i>
                            </div>

                            <div class="inputBox">
                                <input type="email" name="email" required> <i>E-Poçt</i>
                            </div>

                            <div class="inputBox">
                                <input type="password" name="password" required> <i>Parol</i>
                            </div>

                            <div class="checkBox">
                                <input type="checkbox" name="accepted_rules" value="1" required>
                                <a href="#">Qaydaları <p>Oxudum və Qəbul Edirəm.</p></a>
                            </div>

                            <div class="links">
                                <a href="#">Parol Sıfırla</a> <a href="{{ route('login') }}">Giriş Səhifəsi</a>
                            </div>

                            <div class="inputBox">
                                <input type="submit" value="Qeydiyyat">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
