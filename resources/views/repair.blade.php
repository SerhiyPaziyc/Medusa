@extends('layouts.app')

@section('content')

    <div class="conteiner">
        <div class="under">
            <img class="under_img" src="img/Home.png" alt="">
            <div class="under_title">
                >> Ремонт
            </div>
        </div>
    </div>


    <div class="conteiner">
        <div class="content_repair">
            <div class="title_repair">
                Ремонт техніки Apple швидкий та без проблем
            </div>
        </div>
    </div>
    <div class="conteiner">
    <div class="content_phone">
        <input class="phone"
        placeholder="+380(___) ____-__-__">
        <a class="repair_batton" href="buygood">Отримати консультацію</a>
    </div>
    </div>

<div class="conteiner">
    <div class="content">
        <div class="content_item">
            <img class="content_icon" src="/img/13.jpg" alt="">
            <h4 class="content_title" >iPhone</h4>
            <input class="content_checkbox" type="checkbox">
        </div>
        <div class="content_item">
            <img class="content_icon" src="/img/iPad%20Pro%2011.jfif" alt="">
            <h4 class="content_title" >iPad</h4>
            <input class="content_checkbox" type="checkbox">
        </div>
        <div class="content_item">
            <img class="content_icon" src="/img/w5.jpg" alt="">
            <h4 class="content_title" >Apple Watch</h4>
            <input class="content_checkbox" type="checkbox">
        </div>
    </div>
</div>

@endsection



























