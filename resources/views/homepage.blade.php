@extends('templates.base')

@section('title', 'Home page')

@section('content')
<div class="main-section">
    <div class="container-main flex">
        @foreach($comics as $comicSingle)
        <div class="product-card">
            <a href="{{ route('comics', [ 'id' => $loop->iteration ]) }}">
                <img src="{{ $comicSingle['thumb'] }}" />
                <h4>{{ $comicSingle["title"] }}</h4>
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="icon-section">
    <div class="container flex">
        <div class="flex">
            <img src="/img/buy-comics-digital-comics.png" alt="" />
            <div>DIGITAL COMICS</div>
        </div>
        <div class="flex">
            <img src="/img/buy-comics-merchandise.png" alt="" />
            <div>DC MERCHANDISE</div>
        </div>
        <div class="flex">
            <img src="/img/buy-comics-shop-locator.png" alt="" />
            <div>COMIC SHOP LOCATOR</div>
        </div>
        <div class="flex">
            <img src="/img/buy-comics-subscriptions.png" alt="" />
            <div>SUBSCRIPTIONS</div>
        </div>
        <div class="flex">
            <img src="/img/buy-dc-power-visa.svg" alt="" />
            <div>DC POWER VISA</div>
        </div>
    </div>
</div>
@endsection