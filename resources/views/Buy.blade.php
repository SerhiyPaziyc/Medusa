@extends('layouts.app')

@section('content')

    <form action="/buy/submit" method="post">
@csrf

    <div class="cart">
    <div class="conteiner">
        <div class="under">
            <img class="under_img" src="/img/buy.png" alt="">
            <div class="under_title">
                >> Покупка
            </div>
        </div>
    </div>
<div class="conteiner">
<div class="conteiner_buy">
    <div class="content">
        <div class="content_buy">
                <input class="buy" type="text" name="firstname" id="firstname" placeholder="Ім'я">
                <input class="buy" type="text" name="lastname" id="lastname" placeholder="Прізвище">
                <input class="buy" type="text" name="telephonenumber" id="telephonenumber" placeholder="Номер телефону">
                <input class="buy" type="text" name="address" id="address" placeholder="Адреса">
                <input class="buy" type="hidden" name="product_id" id="product_id" placeholder="">
        </div>

        <div class="content_buy">
        <div class="content_item_buy" data-id="01" >
            <img class="content_icon_buy" src="/img/13promax.jpg" alt="">
            <h4 id="out" class="content_title" >iPhone 13 PRO MAX</h4>
            <div class="content_text">bdt</div>
        </div>
        </div>
    </div>
</div>
</div>
<div class="conteiner">
    <div class="content">
        <button type="submit" class="btn_buy  btn_buy--color" href="buygood">Замовити</button>
    </div>
</div>
</div>
    </form>

@endsection



























