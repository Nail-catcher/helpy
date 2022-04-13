<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&amp;display=swap">

    <link rel="stylesheet" href="{{asset('fckingassets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('fckingassets/assets/css/app.css')}}">
</head>
<body><svg style="display: none">
    <symbol id="exit" viewBox="0 0 24 24" fill="none">
        <path d="M15 12H3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.94727 16C5.42027 18.961 8.46827 21 12.0003 21C16.9713 21 21.0003 16.971 21.0003 12C21.0003 7.029 16.9713 3 12.0003 3C8.46827 3 5.42027 5.039 3.94727 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 9L15 12L12 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="user" viewBox="0 0 24 24" fill="none">
        <path d="M18.3639 5.63604C21.8787 9.15076 21.8787 14.8492 18.3639 18.3639C14.8492 21.8787 9.15074 21.8787 5.63604 18.3639C2.12132 14.8492 2.12132 9.15074 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.3639 5.63604" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.9896 8.3239C15.0881 9.42244 15.0881 11.2035 13.9896 12.3021C12.891 13.4006 11.1099 13.4006 10.0114 12.3021C8.91287 11.2035 8.91287 9.42244 10.0114 8.3239C11.1099 7.22537 12.891 7.22537 13.9896 8.3239" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M17.707 18.958C16.272 17.447 14.248 16.5 12 16.5C9.75197 16.5 7.72797 17.447 6.29297 18.959" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="check" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21V21C7.029 21 3 16.971 3 12V12C3 7.029 7.029 3 12 3V3C16.971 3 21 7.029 21 12V12C21 16.971 16.971 21 12 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16 10L11 15L8 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="arrow" viewBox="0 0 11 22" fill="none">
        <path d="M9 18.5L3 11.5L9 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <symbol id="add" viewBox="0 0 17 16" fill="none">
        <path d="M9.24999 2.75C9.24999 2.33579 8.9142 2 8.49999 2C8.08578 2 7.74999 2.33579 7.74999 2.75V7.24997H3.25C2.83579 7.24997 2.5 7.58575 2.5 7.99997C2.5 8.41418 2.83579 8.74997 3.25 8.74997H7.74999L7.75 13.25C7.75 13.6642 8.08579 14 8.5 14C8.91421 14 9.25 13.6642 9.25 13.25L9.24999 8.74997H13.75C14.1642 8.74997 14.5 8.41418 14.5 7.99997C14.5 7.58575 14.1642 7.24997 13.75 7.24997H9.24999V2.75Z" fill="currentColor"/>
    </symbol>
    <symbol id="delete" viewBox="0 0 24 24" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5428 21.0037H8.45698C7.28078 21.0037 6.30288 20.0981 6.21267 18.9254L5.24707 6.37256H18.7527L17.7871 18.9254C17.6969 20.0981 16.719 21.0037 15.5428 21.0037V21.0037Z" stroke=currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20.0032 6.37277H3.99658" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.1865 2.99658H14.8138C15.4354 2.99658 15.9393 3.50047 15.9393 4.12205V6.37299H8.06104V4.12205C8.06104 3.50047 8.56492 2.99658 9.1865 2.99658Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.9694 10.8745V16.5019" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M10.0305 10.8745V16.5019" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </symbol>
    <svg><use xlink:href="#search"></use></svg>
</svg>

@yield('content')


<footer class="footer"></footer><!-- Modal -->
<div class="modal fade" id="modalName" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="modal-title">Ваше имя</div>
                    <div class="modal-inp">
                        <input class="input" type="text">
                        <button class="button button-primary" type="submit">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEmail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="modal-title">E-mail адрес</div>
                    <div class="modal-inp">
                        <input class="input" type="email">
                        <div class="modal-inp-email-on">
                            <button class="button button-primary" type="submit">Сохранить</button>
                            <div class="modal-tx">Нажимая кнопку, я даю согласие на обработку своих персональных данных в соответствии с <a href="#">Политикой конфиденциальности</a></div>
                        </div>
                        <div class="modal-inp-email-on" style="display: none;">
                            <div class="modal-txx">Мы отправили инструкцию для подтверждения. Проверьте почту.</div>
                            <button class="button button-primary" type="submit">Готово</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPhone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="modal-phone">
                        <div class="modal-title">Номер телефона</div>
                        <div class="modal-inp">
                            <input class="input" type="tel">
                            <button class="button button-primary" type="submit">Далее</button>
                            <div class="modal-tx">Нажимая кнопку, я даю согласие на обработку своих персональных данных в соответствии с <a href="#">Политикой конфиденциальности</a></div>
                        </div>
                    </div>
                    <div class="modal-phone" style="display: none;">
                        <div class="modal-tx-main">На номер +7 918 234 65 09 отправлен <br>одноразовый код, введите его</div>
                        <div class="modal-inp" style="display: none;">
                            <input class="input" type="tel">
                            <button class="button button-primary" type="submit">Отправить повторно</button>
                            <div class="modal-tx">Не пришел код? Нажмите кнопку<br> «Отправить повторно»</div>
                        </div>
                    </div>
                    <div class="modal-phone" style="display: none;">
                        <div class="modal-tx-main">На номер +7 918 234 65 09 отправлен <br>одноразовый код, введите его</div>
                        <div class="modal-inp">
                            <input class="input" type="tel">
                            <button class="button button-primary" type="submit">Подтвердить</button>
                            <div class="modal-tx">Отправить код повторно (доступно через 0:58)</div>
                        </div>
                    </div>
                    <div class="modal-phone" style="display: none;">
                        <div class="modal-tx-main">На номер +7 918 234 65 09 отправлен <br>одноразовый код, введите его</div>
                        <div class="modal-inp error">
                            <input class="input" type="tel">
                            <div class="er">Неверный код. Попробуйте ввести заново</div>
                            <button class="button button-primary" type="submit" disabled>Подтвердить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal w-1 fade" id="modalAnlz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="modal-form">
                        <div class="modal-form__row">
                            <div class="modal-form__title">Номер телефона</div>
                            <div class="modal-form__inp">
                                <input class="input" name="Thing" type="tel"  id="phone" placeholder="Телефон" value="+7">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Фамилия</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id="second_name" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Имя</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text"  id="first_name" placeholder="Имя">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Отчество</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id="middle_name" placeholder="Отчество">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">E-mail</div>
                            <div class="modal-form__inp">
                                <input class="input" type="email" id="email" placeholder="E-mail" value="">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">№ наименования анализа</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text"  id="analname" placeholder="Введите № наименования анализа" value="">

                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">ИНЗ</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id="inz" placeholder="Индивидуальный номер заказа" value="">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Дата</div>
                            <div class="modal-form__inp calendar">
                                <input class="input" id="cl" type="text" placeholder="__/___/___" value="">
                            </div>
                        </div>

                        <div class="modal-form__row">
                            <div class="modal-form__title">Анализ</div>
                            <div class="modal-form__inp file">
                                <div class="fl">
                                    <label for="attachment"><a class="bt" role="button" aria-disabled="false"><svg><use xlink:href="#add"></use></svg> Добавить файл</a></label><input type="file" name="file[]"  id="attachment" style="visibility: hidden; position: absolute;" multiple/>
                                </div>
                                <div id="files-area"><span id="filesList"><span id="files-names"></span></span></div>
                            </div>
                        </div>
                        <div class="modal-form__row bottom">
                            <button class="button button-primary" id = "btn" type="button">Добавить анализ</button>
                            <button class="button button-link" type="button">Отмена</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal w-1 fade" id="modalAnlz2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <div class="modal-form">
                        <div class="modal-form__row">
                            <input class="input" type="hidden"  id = "editid" placeholder="Телефон" value="">
                            <div class="modal-form__title">Номер телефона</div>
                            <div class="modal-form__inp">
                                <input class="input" type="tel"  id = "editphone"  placeholder="Телефон" value="">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Фамилия</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id = "editsecondname" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Имя</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id = "editfirstname" placeholder="Имя">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Отчество</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id = "editmiddlename" placeholder="Отчество">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">E-mail</div>
                            <div class="modal-form__inp">
                                <input class="input" type="email" id = "editemail" placeholder="E-mail" value="">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">№ наименования анализа</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id = "editanalname" placeholder="Введите № наименования анализа" value="">

                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">ИНЗ</div>
                            <div class="modal-form__inp">
                                <input class="input" type="text" id = "editinz" placeholder="Индивидуальный номер заказа" value="">
                            </div>
                        </div>
                        <div class="modal-form__row">
                            <div class="modal-form__title">Дата</div>
                            <div class="modal-form__inp calendar">
                                <input class="input" id="editcl" type="text" name="editcl" placeholder="__/___/___" value="">
                            </div>
                        </div>

                        <div class="modal-form__row">
                            <div class="modal-form__title">Анализ
                            <br>
                                <a id="hehhah" download>Посмотреть</a>
                            </div>


                            <div class="modal-form__inp file">
                                <div class="fl">
                                    <label for="attachment"><a class="bt" role="button" aria-disabled="false"><svg><use xlink:href="#add"></use></svg> Изменить файл</a></label><input type="file" name="file[]"  id="editattachment" style="visibility: hidden; position: absolute;" multiple/>
                                </div>
                                <div id="files-area"><span id="filesList"><span id="files-names"></span></span></div>
                            </div>
                        </div>
                        <div class="modal-form__row bottom">
                            <a class="button button-primary" onclick="updateAnal()" type="button">Сохранить изменения</a>
                            <a class="button button-link" type="button">Отмена</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('fckingassets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="{{asset('fckingassets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fckingassets/assets/js/app.js')}}"></script>



<script>
    var el = document.getElementById("phone");
    el.addEventListener("keydown",  ()=>{

            fetch('/api/lk?phone='+el.value, {
                method: 'GET',
                redirect: 'follow',
            }).then(response => response.json())
                .then(user=> {

                    document.getElementById("first_name").value=user.frist_name;
                    document.getElementById("second_name").value=user.second_name;
                    document.getElementById("middle_name").value=user.middle_name;
                    document.getElementById("email").value=user.email;
                })
                .catch(error => {
                    // обработка ошибки
                    console.log(error);
                });




    });
    function storeAnal() {
        var input = document.querySelector('input[type="file"]')

        var data = new FormData()
        data.append('file', input.files[0])

        data.append('phone', document.getElementById("phone").value)
        data.append('first_name', document.getElementById("first_name").value)
        data.append('second_name', document.getElementById("second_name").value)
        data.append( 'middle_name', document.getElementById("middle_name").value)
        data.append( 'inz', document.getElementById("inz").value)
        data.append( 'email', document.getElementById("email").value)
        data.append( 'analname', document.getElementById("analname").value)
        data.append( 'date', document.getElementById("cl").value)

        fetch('{{ route('analyzes.store') }}', {
            method: 'POST',
            body: data
        }).then(response=>(
            window.location.reload()
            // console.log(response)
        ))
    }
    document.getElementById("btn").onclick = storeAnal;

    function search() {
        let search = document.getElementById('search').value;

        document.location.href = ' /analyzes?search='+search;
    }
    document.getElementById("searchbtn").onclick =search;
    function admsearch() {
        let search = document.getElementById('admsearch').value;

        document.location.href = ' /admin?search='+search;
    }
    document.getElementById("admsearchbtn").onclick =admsearch;







</script>
</body>
</html>