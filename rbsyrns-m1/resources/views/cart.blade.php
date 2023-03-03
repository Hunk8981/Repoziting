@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Корзина</h1>

        @foreach($carts as $c)
        <div class="cartt">
            <p class="namec" >{{$c->Product->name}}</p>
            <p class="cou">{{$c->count}}</p>
            <p class="pri">{{$c->Product->price * $c->count}}</p>
            <a class="simvol1" href="/public/cart/minus/{{$c->id}}">-</a>
            <a class="simvol2"  href="/public/cart/plus/{{$c->id}}">+</a>
        </div>
        @endforeach

        <a class="namec" href="#">Оформить</a>

    </div>
@endsection
