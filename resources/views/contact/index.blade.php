@extends("layouts.base")
@section('link')
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="./assets/css/contact.css">
@endsection 
@section("content")
<main id="main">
        <div class="main_all">
            <div class="container">
                <div class="box">
                    <div class="contact">

                        <div class="content">

                            <h2>Əlaqə</h2>

                            <form action="" class="form" method="POST">

                                <div class="inputBox">
                                    <input type="text" required> <i>Ad</i>
                                </div>

                                <div class="inputBox">
                                    <input type="email" required> <i>E-Poçt</i>
                                </div>

                                <div class="inputBox">
                                    <input type="text" required> <i>Məzmun</i>
                                </div>

                                <div class="inputBox">
                                    <textarea style="width: 100%;" id="" cols="30" rows="10"
                                        placeholder="Mesajınız"></textarea>
                                </div>

                                <div class="inputBox">
                                    <input type="submit" value="Göndər">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="info">
                            <h2>Təklif, Şikayət Bildirmək Üçün Bizimlə Əlaqə Saxlayın</h2>
                            <div class="infolar">
                                <div class="img">
                                    <img src="/assets/img/gameserverlogo.png" alt="">
                                </div>
                                <div class="get">
                                    <i class="fa-regular fa-envelope"></i>
                                    <p>:</p>
                                    <h4>contact@gameserver.az</h4>
                                </div>
                                <div class="get">
                                    <i class="fa-brands fa-discord"></i>
                                    <p>:</p>
                                    <a href="https://discord.gg/link" target="_blank">Discord</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection