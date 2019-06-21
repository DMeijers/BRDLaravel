@extends('homepage')

@section('header')
@endsection

@section('content')
    <br>
    <div class="uk-grid">
        @foreach($products as $product)
            <div class="uk-width-1-3" uk-grid>
                <div>
                    <div class="uk-card-small uk-card-default">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">{{$product->name}}</h3>
                            <p>{{$product->category}}, {{$product->brand}}</p>
                        </div>
                        <div class="uk-card-media-top uk-width-1-2 uk-margin-left">
                            <img src="{{asset('images/oudepf.jpg')}}">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card-small uk-card-default">
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Description</h3>
                            <p>{{$product->description}}</p>

                            <div class="uk-margin-left">
                                <a class="uk-button uk-button-default uk-margin-auto-left" href="#">more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


