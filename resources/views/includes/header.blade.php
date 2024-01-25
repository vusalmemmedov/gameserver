<header id="header">
        <div class="header_all">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="/assets/img/gameserverlogo.png" alt="">
                        <h2>GameServer.<p>Az</p>
                        </h2>
                    </div>
                    <div class="link">
                        <a class="active" href="{{ route('home')}}">Ana Səhifə</a>
                        <a href="">Oyunlar</a>
                        <a href="">Discord</a>
                        <a href="{{ route('contact') }}">Əlaqə</a>
                        <div class="slash">
                            <svg viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg" fill="#00eeff" stroke="#00eeff">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="m12.5 3.5-4 14" fill="none" stroke="#00fffb" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="userpanel">
                            @auth
                                @if(auth()->user()->isAdmin())
                                    <a href="{{ route('adminpanel.index') }}">
                                        <span>{{ auth()->user()->name }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('dashboard') }}">
                                        <span>{{ auth()->user()->name }}</span>
                                    </a>
                                @endif
                            @else
                                    <a href="{{ route('login') }}">
                                        <span>Giriş Et</span>
                                    </a>
                            @endauth
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </header>