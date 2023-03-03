@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Каталог</h1>
        <form action="/public/catalog">
            <select name="filter" id="filter">
            <option value="created_at">Новизна</option>
            <option value="price">Цена</option>
            <option value="name">Название</option>
            <option value="year">Год</option>
            </select>
            <select name="category" id="category">
                @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
            <button type="submit">Применить</button>
        </form>
        <div class="row">
        @foreach($products as $p)
        
            <div class="catalog col-lg-4">
                <div class="catalog_image"><img class="catal_img" src="/public/img/{{$p->photo}}" alt="" class="img-fluid"></div>
                <p class ="catalog_title">{{$p->name}}</p>
                <p class ="catalog_prices">{{$p->price}}</p>
                @guest @else<a class="buyn" href="/public/cart/add/{{$p->id}}">Купить</a>@endguest
            </div>
        
        @endforeach
        </div>
    </div>
@endsection