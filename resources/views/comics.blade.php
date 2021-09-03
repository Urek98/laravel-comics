@extends('templates.base')

@section('title', 'Comic page')

@section('content')
<div class="cover-bar">
    <img src="{{ $comics[$arrayIndex]['thumb'] }}" />
</div>

<section class="detail-section flex">
    <div class="description-section">
        <h1>{{ $comics[$arrayIndex]["title"] }}</h1>
        <div class="price-bar flex">
            <div class="price flex">
                <div>U.S. Price:
                    <span>{{ $comics[$arrayIndex]["price"] }}</span>
                </div>
                <div>AVAILABLE</div>
            </div>
            <div class="check">Check Availability</div>
        </div>
        <p>{{ $comics[$arrayIndex]["description"] }}</p>
    </div>
    <div class="ad-section">
        <div>ADVERTISEMENT</div>
        <img src="/img/adv.jpg" alt="">
    </div>
</section>
<div class="about-section">
    <div class="about-container flex">
        <div class="talent">
            <h2>Talent</h2>
            <div class="art-by flex">
                <div class="art-by-script">Art by:</div>
                <div class="artist-writer">"José Luis García-López","Clay Mann","Rafael Albuquerque","Patrick Gleason","Dan Jurgens","Joe Shuster","Neal Adams","Curt Swan","John Cassaday","Olivier Coipel","Jim Lee"</div>
            </div>
            <div class="written-by flex">
                <div class="written-by-script">Written by:</div>
                <div class="artist-writer">"José Luis García-López","Clay Mann","Rafael Albuquerque","Patrick Gleason","Dan Jurgens","Joe Shuster","Neal Adams","Curt Swan","John Cassaday","Olivier Coipel","Jim Lee"</div>
            </div>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <div class="art-by flex">
                <div class="art-by-script">Series:</div>
                <div class="artist-writer">ACTION COMIC</div>
            </div>
            <div class="art-by flex">
                <div class="art-by-script">U.S. Price:</div>
                <div class="artist-writer">{{ $comics[$arrayIndex]["price"] }}</div>
            </div>
            <div class="art-by flex">
                <div class="art-by-script">On sale date:</div>
                <div class="artist-writer">{{ $comics[$arrayIndex]["sale_date"] }}</div>
            </div>

        </div>

    </div>
</div>

@endsection