@extends('layouts.app')

@section('content')

<div class="conteiner">
    <div class="content">
        @foreach($category->products as $product)
           <div class="content_item" data-id="{{ $product->id }}">
                <img class="content_icon" src="{{ $product->image_url }}" alt="">
                <h4 class="content_title" >{{ $product->name }}</h4>
                {!! $product->description !!}
                <div class="content_text">{{ $product->price }}</div>
                 <a data-cart type="button" class="btn  btn--color" href="/buy">Купити зараз</a>
           </div>
        @endforeach
    </div>
</div>

@endsection
