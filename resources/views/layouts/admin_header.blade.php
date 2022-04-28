<header class="header tw">
    <div class="container">
        <div class="header__inner">
            <div class="header__left"><a class="logo" href="#"><img src="{{asset('fckingassets/assets/images/svg/logo.svg')}}" alt=""></a>
                <div class="header__search">
                    <form>
                        <div class="header__search-inner">
                            <input class="input" type="text" id = "admsearch" placeholder="Введите название анализа или ИНЗ">
                            <a class="button" onclick="admsearch()" type="submit"><img src="{{asset('fckingassets/assets/images/svg/search.svg')}}" alt=""></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="header__right"><a class="button button-primary" href="#" data-bs-toggle="modal" data-bs-target="#modalAnlz"><img src="{{asset('fckingassets/assets/images/svg/add.svg')}}" alt=''> Добавить анализ</a>
                <div class="header__user"> <div class="header__user-top">

                    <div class="header__user-foto"><img src="{{asset('fckingassets/assets/images/ava.jpg')}}" alt=""></div>
                    <div class="header__user-name">admin@mail.com</div>
                    </div>
                    <div class="header__user-drop"><a class="header__user-drop-item" href="/">Выход</a></div>

                </div>
            </div>
        </div>
    </div>
</header>