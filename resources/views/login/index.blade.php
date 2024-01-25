@extends("layouts.base")
@section('link')
<link rel="stylesheet" href="./assets/css/login.css">
<link rel="stylesheet" href="./assets/css/style.css">
@endsection 
@section("content")
<main id="main">
        <div class="main_all">
            <div class="container">
                <div class="signin">

                    <div class="content">

                        <h2>Giriş Səhifəsi</h2>

                        <form action="{{ route('login') }}" class="form" method="POST">
                            @csrf
                            <div class="inputBox">
                                <input type="text" name="email" required> <i>E-Poçt</i>
                            </div>

                            <div class="inputBox">
                                <input type="password" name="password" required> <i>Parol</i>
                            </div>

                            <div class="links">
                                <a href="#">Parol Sıfırla</a> <a href="{{ route('register')}}">Qeydiyyat Səhifəsi</a>
                            </div>

                            <div class="inputBox">
                                <input  type="submit" value="Giriş">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection