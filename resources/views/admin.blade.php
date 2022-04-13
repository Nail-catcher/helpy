@extends('layouts.app')
@extends('layouts.admin_header')
@section('content')

    <div class="wrapper">
        <div class="results-mb">
            <div class="results-mb__title">Анализы</div>
            <div class="header-mob"><a class="header-mob__user" href="#"><img src="assets/images/ava.jpg" alt=""></a></div>
        </div>
        <div class="result tw">
            <div class="container">
                <div class="results__inner">
                    <div class="results__content">
                        <div class="results__tbl top">
                            <div class="results__tbl-row">
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-check">
                                        <input type="checkbox" id="ch1">
                                        <label for="ch1"></label>
                                    </div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>Название</span><img src="assets/images/svg/ar1.svg" alt=""></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>ИНЗ</span><img src="assets/images/svg/ar2.svg" alt=""></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>Дата</span><img src="assets/images/svg/ar2.svg" alt=""></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>E-mail</span></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-top"><span>Телефон</span></div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-cl-in">
                                        <div class="results__tbl-cl"><input type="text" id="from" name="from"></div>
                                        <div class="results__tbl-cl"><input type="text" id="to" name="to" ></div>
                                    </div>
                                </div>
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
                                    <div class="results__tbl-nb">{{$analyze->inz}}</div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-nb">{{$analyze->date}}</div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-nb">{{$analyze->user->email ?? ''}}</div>
                                </div>
                                <div class="results__tbl-cell">
                                    <div class="results__tbl-nb">{{$analyze->user->phone ?? ''}}</div>
                                </div>
                                <div class="results__tbl-cell"><a class="results__tbl-btn" onclick="dataUpdateAnal({{$analyze}})" href="#" data-bs-toggle="modal" data-bs-target="#modalAnlz2">Редактировать</a><a class="results__tbl-btn rose" href="#" id="del" onclick="delAnal(this.data-id,this.name)" data-id="{{$analyze->id}}" name="{{route('analyzes.destroy',$analyze->id)}}">Удалить</a></div>
                            </div>

                            @endforeach
                        </div>
                        <div class="results__tbl-bottom">
                            <div class="pages">
                                <div class="pages__tt">Показывать по</div>
                                <div class="pages__list">
                                    <div class="pages__title"><span>10</span></div>
                                    <div class="pages__list-inner"><a href="{{url('/admin?paginate=10')}}">10</a><a href="{{url('/admin?paginate=20')}}">20</a><a href="{{url('/admin?paginate=30')}}">30</a></div>
                                </div>
                            </div>

                            <div class="pagination-bl">
                                <ul class="pagination">


                                    <li class="page-item prev" id = 'btn_prev'><a class="page-link" href="{{$analyzes->previousPageURL()}}" id="btn_prev"><span class="ar"><svg><use xlink:href="#arrow"></use></svg></span></a></li>



                                    @if(!$analyzes->onFirstPage())

                                        <li class="page-item"><a class="page-link" href="{{$analyzes->url(1)}}">1</a></li>
                                    @endif
                                   @for($i=1;$i<$pages;$i++)
                                       @if($analyzes->currentPage()==$i or $analyzes->currentPage()==$i-1 or $analyzes->currentPage()==$i+1)
                                           @if($analyzes->currentPage()==$i)
                                    <li class="page-item active"><a class="page-link " href="{{$analyzes->url($i)}}">{{$i}}</a></li>
                                               @else
                                                <li class="page-item"><a class="page-link " href="{{$analyzes->url($i)}}">{{$i}}</a></li>
                                               @endif
                                        @endif
                                    @endfor
                                    <li class="page-item"><a class="page-link" href="{{$analyzes->url($pages)}}">{{$pages}}</a></li>
                                    <li class="page-item next active"><a class="page-link" href="{{$analyzes->nextPageURL()}}" id="btn_next"><span class="ar"><svg><use xlink:href="#arrow"></use></svg></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<script>
    function delAnal(id, url){
        // let id =document.getElementById("del").dataset.id
        //
        // let url =document.getElementById("del").dataset.url
console.log(id)
        console.log(url)
var data = new FormData();
        data.append( 'date', id)

        fetch(url, {
            method: 'delete',
            body: data
        }).then(response=>(
            window.location.reload()
        ))
    }

function dataUpdateAnal(analyze) {
    console.log(analyze);
    document.getElementById("editid").value=analyze.id
   document.getElementById("editphone").value=analyze.user.phone
   document.getElementById("editfirstname").value=analyze.user.frist_name
   document.getElementById("editsecondname").value=analyze.user.second_name
  document.getElementById("editmiddlename").value=analyze.user.middle_name
    document.getElementById("editinz").value=analyze.inz
   document.getElementById("editemail").value=analyze.user.email
   document.getElementById("editanalname").value=analyze.name
    document.getElementById("editcl").value=analyze.date

    // document.getElementById('hfr').innerHTML=href;
    document.querySelector('a[id="hehhah"]').setAttribute('href', 'storage/uploads/'+analyze.url);

}

    function updateAnal() {
        var input = document.querySelector('input[type="file"]')

        var data = new FormData()
        const csrfToken = "{{csrf_token()}}"
        data.append('file', input.files[0])
        data.append('id', document.getElementById("editid").value)
        data.append('phone', document.getElementById("editphone").value)
        data.append('first_name', document.getElementById("editfirstname").value)
        data.append('second_name', document.getElementById("editsecondname").value)
        data.append( 'middle_name', document.getElementById("editmiddlename").value)
        data.append( 'inz', document.getElementById("editinz").value)
        data.append( 'email', document.getElementById("editemail").value)
        data.append( 'analname', document.getElementById("editanalname").value)
        data.append( 'date', document.getElementById("editcl").value)

        fetch('/updateAnal', {
            method: 'POST',
            body: data,
            headers: {

                'x-csrf-token': csrfToken
            }
        }).then(response=>(
            window.location.reload()
            // console.log(response)
        ))
    }

    var secdateel = document.getElementById("to");

    var frstdateel = document.getElementById("from");
    secdateel.addEventListener("keydown",  ()=> {

        document.location.href = '/admin?dateto=' + secdateel.value + '&datefrom='+ frstdateel.value;
    });
</script>
@endsection