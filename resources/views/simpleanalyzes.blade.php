
@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="results-mb">
            <div class="results-mb__title">Мои результаты</div>
            <div class="header-mob"><a class="header-mob__user" href="#"><img src="{{asset('fckingassets/assets/images/svg/user2.svg')}}" alt=""></a></div>
        </div>
        <div class="results">
            <div class="container">
                <div class="results__inner">
                    <div class="results__menu">
                        <ul>
                            {{--<li><a href="profile.html"><svg><use xlink:href="#user"></use></svg><span>Мой профиль</span></a></li>--}}
                            <li class="active"><a href="results.html"><svg><use xlink:href="#check"></use></svg><span>Мой результаты</span></a></li>
                        </ul>
                    </div>
                    <div class="results__content">
                        <h1>Мои результаты</h1>
                        <div class="results__tbl top">
                            <div class="results__tbl-row">
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-check">
                                        <input type="checkbox" id="ch1">
                                        <label for="ch1"></label>
                                    </div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>Название</span><img src="{{asset('fckingassets/assets/images/svg/ar1.svg')}}" alt=""></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>Дата</span><img src="{{asset('fckingassets/assets/images/svg/ar2.svg')}}" alt=""></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>ИНЗ</span><img src="{{asset('fckingassets/assets/images/svg/ar1.svg')}}" alt=""></div>
                                </div>
                                <div class="results__tbl-cell"></div>
                            </div>
                        </div>

                        <div class="results__tbl">
                            @foreach($analyzes as $analyze)
                            <div class="results__tbl-row">
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-check">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2"></label>
                                    </div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-title">{{$analyze->name}}</div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-nb">{{$analyze->date}}</div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-nb">{{$analyze->inz}}</div>
                                </div>
                                <div class="results__tbl-cell"><a class="results__tbl-btn" href="{{$analyze->url}}" download>Скачать</a></div>
                            </div>
                            @endforeach

                        </div>
                        {{--<div class="results__tbl-bottom-mob"><a class="button button-primary" href="#">Скачать все</a></div>--}}
                        {{--<div class="results__tbl-bottom">--}}
                            {{--<div class="pages">--}}
                                {{--<div class="pages__tt">Показывать по</div>--}}
                                {{--<div class="pages__list">--}}
                                    {{--<div class="pages__title"><span>10</span></div>--}}
                                    {{--<div class="pages__list-inner"><a href="#">10</a><a href="#">20</a><a href="#">30</a></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="pagination-bl">--}}
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item prev"><a class="page-link" href="#"><span class="ar"><svg><use xlink:href="#arrow"></use></svg></span></a></li>--}}
                                    {{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                    {{--<li class="page-item"><span class="page-link">...</span></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">8</a></li>--}}
                                    {{--<li class="page-item next active"><a class="page-link" href="#"><span class="ar"><svg><use xlink:href="#arrow"></use></svg></span></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection