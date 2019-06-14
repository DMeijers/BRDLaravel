@extends('homepage')

@section('header')
    <article class="uk-article">

        <h1 class="uk-article-title">Welcome to BRD</h1>

        <p class="uk-article-meta">Made by Berend Korendijk, Dieko Meijers and Rico Ten Brink</p>

        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
    </article>
@endsection

@section('content')

    <br>
    <div class="uk-child-width-1-3@m" uk-grid>
        <div>
            <div class="uk-card-small uk-card-default">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Hoofd ding Iets</h3>
                    <p>d tempor incididunt.</p>
                </div>
                <div class="uk-card-media-top uk-width-1-2 uk-margin-left">
                    <img src="{{asset('images/oudepf.jpg')}}" >
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card-small uk-card-default">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                    <div class="uk-margin-left">
                        <a class="uk-button uk-button-default uk-margin-auto-left" href="#">more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
