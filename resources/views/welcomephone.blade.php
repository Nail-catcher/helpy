@extends('layouts.app')

@section('content')
<div class="enter">
    <div class="enter__banner">
        <div class="enter__banner-inner"><a class="logo" href="#"><img src="assets/images/svg/logo.svg" alt=""></a>
            <div class="enter__banner-list">
                <div class="enter__banner-foto on"><img src="assets/images/foto2.png" alt="">
                    <div class="enter__banner-foto-line"><img src="assets/images/svg/line1.svg" alt=""></div>
                </div>
                <div class="enter__banner-foto tw"><img src="assets/images/foto1.png" alt=""></div>
                <div class="enter__banner-foto th"><img src="assets/images/foto3.png" alt="">
                    <div class="enter__banner-foto-line"><img src="assets/images/svg/line3.svg" alt=""></div>
                </div>
                <div class="enter__banner-foto fr"><img src="assets/images/foto4.png" alt=""></div>
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
                        <input class="input" type="text" id = "phone" placeholder="Введите номер телефона">
                    </div>
                    <div class="form__bottom">
                        <a class="button button-primary" onclick="getCode()" type="submit">Получить код</a>
                        <a href="/" class="button button-secondary" type="submit">По номеру заказа</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>

        function qwe(res, phone) {
            window.alert( res);
            document.location.href = '/welcomephone/enter?phone='+phone
        }
        function getCode() {
            const url = '{{ route('getcode') }}';
            const data = {
                phone: document.getElementById("phone").value
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
                   qwe(res, data.phone)
                    // alert(res)
                    // document.location.href = '/welcomephone/enter?phone='+data.phone);

                ))
                .catch(error => {
                    // обработка ошибки
                    console.log(error);
                });


        }

    </script>
@endsection