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


    <form action="/repair/submit" method="post">
        @csrf
    <div class="conteiner">
    <div class="content_phone">
        <input class="phone" type="text" name="telephonenumber" id="telephonenumber" placeholder="Номер телефону">
        <button type="submit" class="repair_batton" href="buygood">Отримати консультацію</button>
    </div>
    </div>


    <div class="conteiner">
    <div class="content_repair">
        <label class="content_item_repair">
                <img class="content_icon" src="{{ asset('/img/13.jpg') }}" alt="">
                <h4 name="choose" type="text" id="1" class="content_title" >iPhone</h4>
            <input class="content_checkbox" type="radio" name="choose" value="1" chacked="chacked">
        </label>
        <label class="content_item_repair">
            <img class="content_icon" src="{{ asset('/img/iPad%20Pro%2011.jfif') }}" alt="">
            <h4 name="choose" type="text" id="2" class="content_title" >iPad</h4>
            <input class="content_checkbox" type="radio" name="choose" value="2">
        </label>
            <label class="content_item_repair">
            <img class="content_icon" src="{{ asset('/img/w5.jpg') }}" alt="">
            <h4 name="choose" type="text" id="3" class="content_title" >Apple Watch</h4>
                <input class="content_checkbox" type="radio" name="choose" value="3">
            </label>
    </div>
    </div>
    </form>

@endsection
