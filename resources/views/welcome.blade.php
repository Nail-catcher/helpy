@extends('layouts.app')

@section('content')

<div class="enter">
    <div class="enter__banner">
        <div class="enter__banner-inner"><a class="logo" href="#"><img src="{{asset('fckingassets/assets/images/svg/logo.svg')}}" alt=""></a>
            <div class="enter__banner-list">
                <div class="enter__banner-foto on"><img src="{{asset('fckingassets/assets/images/foto2.png')}}" alt="">
                    <div class="enter__banner-foto-line"><img src="{{asset('fckingassets/assets/images/svg/line1.svg')}}" alt=""></div>
                </div>
                <div class="enter__banner-foto tw"><img src="{{asset('fckingassets/assets/images/foto1.png')}}" alt=""></div>
                <div class="enter__banner-foto th"><img src="{{asset('fckingassets/assets/images/foto3.png')}}" alt="">
                    <div class="enter__banner-foto-line"><img src="{{asset('fckingassets/assets/images/svg/line3.svg')}}" alt=""></div>
                </div>
                <div class="enter__banner-foto fr"><img src="{{asset('fckingassets/assets/images/foto4.png')}}" alt=""></div>
            </div>
            <div class="enter__banner-tx">
                <h1>Добро пожаловать<br> в систему Helpy</h1>
                <p>Здесь вы можете проверить результаты ваших  анализов в один клик</p>
            </div>
        </div>
    </div>
    <div class="enter__form">
        <div class="enter__form-inner">
            <div class="enter__form-main">
                <div class="enter__form-title">Результаты анализов</div>
                <form>
                    <div class="form__cell">
                        <input class="input" type="text" id="inz" placeholder="Введите номер заказа">
                    </div>
                    <div class="form__cell">
                        <input class="input" type="text" id="shortname" placeholder="Первые буквы ФИО">
                    </div>
                    <div class="form__bottom">
                        <a class="button button-primary" onclick="redir()" type="submit">Войти</a>
                        <a class="button button-secondary" href="/welcomephone" type="submit">По номеру телефона</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script>
        function redir(){


            let inz = document.getElementById('inz').value;
            let shortname = document.getElementById('shortname').value;
            fetch(' api/simpleanalyzes?inz='+inz+'&short_name='+shortname, {
                method: 'GET',

        })
        .then(response => response.json())
        // .then(nameanalyzes=>nameanalyzes.data)
            .then(analyzes => {
                console.log(analyzes)
                if(analyzes.data.length >0){
                    document.location.href = ' /simpleanalyzes?inz='+inz+'&short_name='+shortname;
                } else {
                    alert('Неправильный ИНЗ или ФИО')
                }


            })

            // document.location.href = ' /simpleanalyzes?inz='+inz+'&short_name='+shortname;
        }

    </script>
    @endsection

