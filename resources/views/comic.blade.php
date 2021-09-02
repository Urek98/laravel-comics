@extends('templates.base')

@section('title', 'Comic page')

@section('content')
<div class="cover-bar">
    
</div>
<section class="detail-section flex">
    <div class="description-section">
        <h1>Action Comics #1000: The Deluxe Edition</h1>
        <div class="price-bar flex">
            <div class="price flex">
                <div>U.S. Price:$19.99</div>
                <div>AVABILE</div>
            </div>
            <div class="check">Check Avability</div>
        </div>
        <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
    </div>
    <div class="ad-section">
        <div>ADVERTISEMENT</div>
        <img src="/img/adv.jpg" alt="">
    </div>
</section>

@endsection