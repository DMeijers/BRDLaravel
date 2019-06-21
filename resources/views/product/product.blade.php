@extends('homepage')

@section('header')
@endsection

@section('content')
    <br>
    <div class="uk-grid">
        @foreach($products as $product)
            <div class="uk-width-1-3 uk-margin-bottom">
                <div class="uk-card-small uk-card-default uk-card-hover">
                    <div class="uk-card-header">
                        <h3 class="uk-card-title">{{$product->name}}</h3>
                        <p>{{$product->category}}, {{$product->brand}}</p>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-card-media-top uk-width-1-2">
                            <img src="{{asset('images/oudepf.jpg')}}">
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        <h3 class="uk-card-title">Description</h3>
                        <p>{{$product->description}}</p>
                        <p>Price: {{$product->price}}</p>
                        <p>Stock: {{$product->stock}}</p>
                        <div class="uk-margin-left">
                            <a class="uk-button uk-button-default uk-margin-auto-left"
                               href="{{ route('singleproduct',['name' =>  $product['name']]) }}">more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


