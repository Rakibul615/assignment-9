@extends('master')
@section('other-content')
    <section class="tf__blog pt_125 xs_pt_75 pb_40 xs_pb_0" id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 mb_30">
                    <div class="tf__section_heading">
                        <h5 class="has-animation">My blog</h5>
                        <h2 class="has-animation">
                            Unlocking the potential of your personal brand
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                        <a href="blog_details.html" class="tf__blog_img" data-cursor="read <br> more">
                            <img src="{{asset('/')}}website/images//blog/1.jpg" alt="blog" class="img-fluid w-100"/>
                        </a>
                        <div class="tf__blog_text">
                            <span>31 December,2022</span>
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-solid fa-circle-user"></i> By admin
                                </li>
                                <li>
                                    <i class="fa-sharp fa-solid fa-comments"></i> Comments (05)
                                </li>
                            </ul>
                            <a href="blog_details.html">The standard personal My portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                        <a href="blog_details.html" class="tf__blog_img" data-cursor="read <br> more">
                            <img src="{{asset('/')}}website/images//blog/2.jpg" alt="blog" class="img-fluid w-100"/>
                        </a>
                        <div class="tf__blog_text">
                            <span>31 December,2022</span>
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-solid fa-circle-user"></i> By admin
                                </li>
                                <li>
                                    <i class="fa-sharp fa-solid fa-comments"></i> Comments (05)
                                </li>
                            </ul>
                            <a href="blog_details.html">The standard personal My portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                        <a href="blog_details.html" class="tf__blog_img" data-cursor="read <br> more">
                            <img src="{{asset('/')}}website/images//blog/3.jpg" alt="blog" class="img-fluid w-100"/>
                        </a>
                        <div class="tf__blog_text">
                            <span>31 December,2022</span>
                            <ul>
                                <li>
                                    <i class="fa-sharp fa-solid fa-circle-user"></i> By admin
                                </li>
                                <li>
                                    <i class="fa-sharp fa-solid fa-comments"></i> Comments (05)
                                </li>
                            </ul>
                            <a href="blog_details.html">The standard personal My portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a href="blog_list.html" class="common_btn">More Blog +</a>
                </div>
            </div>
        </div>
    </section>
@endsection
