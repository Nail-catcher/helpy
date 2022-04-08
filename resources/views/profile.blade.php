
@extends('layouts.app')

@extends('layouts.header')
@section('content')
<div class="wrapper">
    <div class="results-mb">
        <div class="results-mb__title">Мой профиль</div>
    </div>
    <div class="results">
        <div class="container">
            <div class="results__inner">
                <div class="results__menu">
                    <ul>
                        <li class="active"><a href="/profile"><svg><use xlink:href="#user"></use></svg><span>Мой профиль</span></a></li>
                        <li ><a href="/analyzes"><svg><use xlink:href="#check"></use></svg><span>Мой результаты</span></a></li>
                    </ul>
                </div>
                <div class="results__content">
                    <h1>Мой профиль</h1>
                    <div class="profile">
                        <div class="profile__inner">
                            <div class="profile__title-main">Личные данные</div>
                            <div class="profile__row">
                                <input class="input" id="id" type="hidden" value="{{$user->id}}">
                                <div class="profile__title">
                                    <label>Фамилия</label>
                                </div>
                                <div class="profile__inp">
                                    <input class="input" id="second_name" type="text" value="{{$user->second_name}}">
                                </div>
                            </div>
                            <div class="profile__row">
                                <div class="profile__title">
                                    <label>Имя</label>
                                </div>
                                <div class="profile__inp">
                                    <input class="input" id="first_name" type="text" value="{{$user->frist_name}}">
                                </div>
                            </div>
                            <div class="profile__row">
                                <div class="profile__title">
                                    <label>Отчество</label>
                                </div>
                                <div class="profile__inp">
                                    <input class="input" id="middle_name" type="text" value="{{$user->middle_name}}">
                                </div>
                            </div>
                            <div class="profile__row">
                                <div class="profile__title">
                                    <label>E-mail</label>
                                </div>
                                <div class="profile__inp">
                                    <input class="input" id="email" type="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="profile__row">
                                <div class="profile__title">
                                    <label>Телефон</label>
                                </div>
                                <div class="profile__inp">
                                    <input class="input" id="phone" type="text" value="{{$user->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="profile__row bottom">
                            <a class="button button-primary" onclick="updateUser()" type="button">Сохранить изменения</a>
                            <a class="button button-link" onclick="clearForm()" type="button">Сбросить</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateUser(){

        var wdata = new FormData()


        wdata.append('phone', document.getElementById("phone").value)
        wdata.append('first_name', document.getElementById("first_name").value)
        wdata.append('second_name', document.getElementById("second_name").value)
        wdata.append( 'middle_name', document.getElementById("middle_name").value)

        wdata.append( 'email', document.getElementById("email").value)
        wdata.append( 'id', document.getElementById("id").value)


        fetch('/api/updateUser', {
            method: 'POST',

            body: wdata
        }).then(res=>(console.log(res.json())))
    }
    function clearForm(){
        document.getElementById("phone").value=null;
        document.getElementById("first_name").value=null;
        document.getElementById("second_name").value=null;
        document.getElementById("middle_name").value=null;
        document.getElementById("email").value=null;

    }
</script>
    @endsection