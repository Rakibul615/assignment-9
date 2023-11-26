@extends('master')
@section('content')

    <section class="tf__about pt_140 xs_pt_80" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-7 col-lg-6 col-xl-6">
                    <div class="tf__section_heading pb_80 xs_pb_50">
                        <h5 class="has-animation">About Me</h5>
                        <h2 class="has-animation">
                            Transforming visions into exceptional portfolios
                        </h2>
                    </div>
                    <div class="tf__about_text">
                        <p>
                            Nemo design enim ipsam voluptatem quim voluptas sit aspernatur
                            aut odit auting fugit sed thisnquia consequuntur magni dolores
                            eos designer heresm qui ratione
                        </p>
                        <a class="common_btn" href="#">Download Cv <i class="fa-solid fa-arrow-down-to-line"></i></a>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-6 col-xl-6">
                    <div class="tf__about_img fade_right" data-trigerId="about">
                        <img src="{{asset('/')}}website/images/about_img.jpg" alt="rakib" class="img-fluid w-100"/>
                        <div class="tf__about_img_text">
                            <i class="fas fa-chart-pie-alt"></i>
                            <div class="tf__about_content">
                                <h4>Daily Activity</h4>
                                <p>Loream is ispam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tf__skills pt_115 xs_pt_75 pb_70 xs_pb_30" id="skills">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-8 m-auto mb_60">
                    <div class="tf__section_heading mb_40">
                        <h5 class="has-animation">Education & Skill</h5>
                        <h2 class="has-animation">
                            Showcasing your talent <br />
                            amplifying your impact
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__single_skills fade_bottom" data-trigerId="skills" data-stagger=".13">
                        <span>2014 - 2018</span>
                        <h3>Wordpress and End Developer</h3>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit sed thisnquia consequuntur magni dolores eos qui
                            ratione voluptatem
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__single_skills fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <span>2012 - 2014</span>
                        <h3>Python Developer</h3>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit sed thisnquia consequuntur magni dolores eos qui
                            ratione voluptatem
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__single_skills fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <span>2005 - 2009</span>
                        <h3>Kent State University</h3>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit sed thisnquia consequuntur magni dolores eos qui
                            ratione voluptatem
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__single_skills fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <span>2009 - 2012</span>
                        <h3>User Experience Design</h3>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit sed thisnquia consequuntur magni dolores eos qui
                            ratione voluptatem
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>HTML</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="75"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>Python</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>CSS</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>Photoshop</p>
                        <div id="bar4" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="70"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>Java Script</p>
                        <div id="bar5" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="70"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills" data-stagger=".25">
                        <p>Figma</p>
                        <div id="bar6" class="barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
