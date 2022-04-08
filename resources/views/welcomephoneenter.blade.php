@extends('layouts.app')

@section('content')

<div class="enter">
    <div class="enter__banner">
        <div class="enter__banner-inner"><a class="logo" href="#"><img src="{{asset('fckingassets/assets/images/svg/logo.svg')}}" alt=""></a>
            <div class="enter__banner-list">
                <div class="enter__banner-foto on"><img src={{asset('fckingassets/"assets/images/foto2.png')}}" alt="">
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
            <div class="enter__form-main"><a class="enter__form-title" href="#"><img src="{{asset('fckingassets/assets/images/svg/arrow.svg')}}" alt=''> Подтверждение</a>
                <div class="enter__form-main-tx">На номер {{request()->phone}} отправлен  одноразовый код, введите его</div>
                <form>
                    <div class="form__cell">
                        <input class="input" type="hidden" id="phone" value="{{request()->phone}}" placeholder="Введите код">
                        <input class="input" type="text" id="pass" placeholder="Введите код">
                    </div>
                    <div class="form__bottom">
                        <a class="button button-primary" onclick="getUser()" type="submit">Отправить повторно</a>
                    </div>
                </form>
                <div class="enter__form-main-tt">Не пришел код? Нажмите кнопку «Отправить повторно»</div>
            </div>
        </div>
    </div>
</div>
<script>

    function getUser() {
        const url = '{{ route('getUser') }}';
        const data = {
            phone: '+'+document.getElementById("phone").value,
            password: document.getElementById("pass").value
        };
        const csrfToken = "{{csrf_token()}}"
        fetch(url, {
            method: 'POST',
            redirect: 'follow',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json',
                'x-csrf-token': csrfToken
            }
        }).then(response => response.json())
            .then(res => (
                // qwe(res, data.phone)
                // console.log(res.id)
                //TODO:обработать ошибку
                 document.location.href = '/analyzes'

            ))
            .catch(error => {
                // обработка ошибки
                console.log(error);
            });


    }
</script>
    @endsection