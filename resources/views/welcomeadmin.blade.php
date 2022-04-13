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
            <div class="enter__banner-tx tw">
                <h1>Добро пожаловать в панель администратора Helpy</h1>
                <p>Войдите в личный кабинет, чтобы начать работу</p>
            </div>
        </div>
    </div>
    <div class="enter__form">
        <div class="enter__form-inner">
            <div class="enter__form-main">
                <div class="enter__form-title">Войдите в систему</div>
                <form>
                    <div class="form__cell">
                        <input class="input" type="text" id="email" placeholder="Email">
                    </div>
                    <div class="form__cell">
                        <input class="input" name="password" type="password" placeholder="Пароль" id="password-field"><span class="toggle-password" toggle="#password-field"></span>
                    </div>
                    <div class="form__cell ch">
                        <input type="checkbox" checked id="check1">
                        <label for="check1">Запомнить меня</label>
                    </div>
                    <div class="form__bottom">
                        <a class="button button-primary" onclick="enterAdm()" type="submit">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

    function enterAdm() {

        const url = '{{ route('getUser') }}';
        const data = {
            email: document.getElementById("email").value,
            password: document.getElementById("password-field").value
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


    };
</script>
@endsection