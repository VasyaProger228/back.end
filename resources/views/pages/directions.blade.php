@extends('layout')
@section('content')
        
        <!-- основная часть -->
        <div class="main-page container">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <ul class="list-group">
                        <li class="d-block text-center"><h4>Отдаете</h4></li>
                            <div class="container">
                                <div class = "filter-block2 d-flex justify-content-center d-sm-block">
                                    <span class="badge badge-secondary">
                                      Все
                                    </span>
                                    <span class="badge badge-secondary">
                                      Крипто
                                    </span>
                                    <span class="badge badge-secondary">
                                      Фиат
                                    </span>
                                </div>
                            </div>
                        @foreach ($banks as $bank)
                            <li id="directionSource-{{$bank->id}}" class="directionSource d-block p-2 border border-black"><img src="{{asset('images/marks/'.$bank->image)}}" width="30" height="40" alt="Что-то пошло не так"><span class="">{{'   '.$bank->name}}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="list-group">
                        <li class="d-block text-center"><h4>Получаете</h4></li>
                            <div class="container">
                                <div class = "filter-block2 d-flex justify-content-center d-sm-block">
                                    <span class="badge badge-secondary">
                                      Все
                                    </span>
                                    <span class="badge badge-secondary">
                                      Крипто
                                    </span>
                                    <span class="badge badge-secondary">
                                      Фиат
                                    </span>
                                </div>
                            </div>
                        @foreach ($banks as $bank)
                            <li id="directionTarget-{{$bank->id}}" class="directionTarget d-block p-2 border border-black"> <img src="{{asset('images/marks/'.$bank->image)}}" width="30" height="40" alt="Что-то пошло не так"><span>{{'   '.$bank->name}}</span></li>
                        @endforeach
                    </ul>
                </div>
                <div class="exchange col-sm-6">
<!--                     @include('layouts.news') -->

                        <div class="exchangeSteps">
                        <ul class="nav navbar-light justify-content-between px-1">
                            <li class="nav-item m-1">
                                <span class="badge badge-secondary align-text-top">1</span>  Ввод данных
                            </li>
                            <li class="nav-item m-1">
                                <span class="badge badge-secondary align-text-top">2</span>  Оплата
                            </li>
                            <li class="nav-item m-1 dropdown">
                                <span class="badge badge-secondary align-text-top">3</span>  Завершение
                            </li>
                        </ul>
                    </div>
                    <div class="calculator-wrapper float-right">                     
                        <div>Обмен Биткоин</div>
                        <div>Кошелек:</div><input type="text" name=""></input>
                        <div>На Яндекс Деньги</div>
                        <div>Сумма</div><input type="text" name=""></input>
                        <div>Номер карты</div><input type="text" name=""></input>
                        <div>Ваш номер</div><input type="text" name=""></input>
                        <div>Электронная почта</div><input type="text" name=""></input>
                        <div><input type="submit"></input></div>                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 
@endsection