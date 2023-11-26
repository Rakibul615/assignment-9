@extends('master')
@section('content')

    <section class="tf__portfolio mt_120 xs_mt_80" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9 mb_30">
                    <div class="tf__section_heading">
                        <h5 class="has-animation">my recent Portfolio</h5>
                        <h2 class="has-animation">
                            Elevate your brand to new <br />
                            heights with our portfolio expertise
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-md-6">
                    <a href="https://www.youtube.com/watch?v=B-ytMSuwbf8" class="tf__portfolio_item play_btn" data-cursor="Watch <br> video">
                        <img src="{{asset('/')}}website/images/portfolio/1.jpg" alt="portfolio" class="img-fluid w-100"/>
                        <div class="text">
                            <h4>sheet metal bending</h4>
                            <p>youtube</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a class="tf__portfolio_item play_btn" href="https://vimeo.com/132528823" data-cursor="Watch <br> video">
                        <img src="{{asset('/')}}website/images/portfolio/2.jpg" alt="portfolio" class="img-fluid w-100"/>
                        <div class="text">
                            <h4>sheet metal bending</h4>
                            <p>Vimeo</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F159967086&amp;show_artwork=true&amp;maxwidth=1020&amp;maxheight=1000&amp;auto_play=1" class="tf__portfolio_item play_btn" data-cursor="Audio <br> sound">
                        <img src="{{asset('/')}}website/images/portfolio/3.jpg" alt="portfolio" class="img-fluid w-100"/>
                        <div class="text">
                            <h4>sheet metal bending</h4>
                            <p>soundcloud</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-6">
                    <a href="{{asset('/')}}website/images/portfolio/4.jpg" class="tf__portfolio_item image_popup" data-cursor="View <br> Image">
                        <img src="{{asset('/')}}website/images/portfolio/4.jpg" alt="portfolio" class="img-fluid w-100"/>
                        <div class="text">
                            <h4>sheet metal bending</h4>
                            <p>Image</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
