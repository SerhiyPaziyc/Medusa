@extends('layouts.app')

@section('content')

<div class="conteiner">
    <div class="content">
       <div class="content_item" data-id="25">
            <img class="content_icon" src="/img/w7.jpg" alt="">
            <h4 class="content_title" >Apple Watch Series 7</h4>
            <h4 class="content_xar" >Розмір: менший/більший</h4>
            <div class="content_text"> 14 675 UAH</div>
             <a data-cart type="button" class="btn  btn--color" href="buy">Купити зараз</a>
        </div>
         <div class="content_item" data-id="26">
            <img class="content_icon" src="/img/w6.jpg" alt="">
            <h4 class="content_title" >Apple Watch Series 6</h4>
            <h4 class="content_xar" >Розмір: менший/більший</h4>
            <div class="content_text"> 13 651 UAH</div>
             <a data-cart type="button" class="btn  btn--color" href="buy">Купити зараз</a>
        </div>
         <div class="content_item" data-id="27">
            <img class="content_icon" src="/img/w5.jpg" alt="">
            <h4 class="content_title" >Apple Watch Series 5</h4>
            <h4 class="content_xar" >Розмір: менший/більший</h4>
            <div class="content_text"> 11 876 UAH</div>
             <a data-cart type="button" class="btn  btn--color" href="buy">Купити зараз</a>
        </div>
         <div class="content_item" data-id="28">
            <img class="content_icon" src="/img/w3,4.jpg" alt="">
            <h4 class="content_title" >Apple Watch Series 4</h4>
            <div class="content_text"> 9 600 UAH</div>
             <a data-cart type="button" class="btn  btn--color" href="buy">Купити зараз</a>
        </div>

    </div>
</div>

<div class="conteiner">
    <div class="content">
        <div class="content_item" data-id="29">
            <img class="content_icon" src="/img/w3,4.jpg" alt="">
            <h4 class="content_title" >Apple Watch Series 3</h4>
            <div class="content_text"> 6 489 UAH</div>
             <a data-cart type="button" class="btn  btn--color" href="buy">Купити зараз</a>
        </div>
    </div>
</div>

@endsection
