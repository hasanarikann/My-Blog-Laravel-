@extends('Layouts.blog')
@section('title', 'Blog')

@section('content')
    <!-- page title -->
    <section class="page-title bg-primary position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white font-tertiary">Blogs</h1>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img src="{{asset('assets')}}/images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
        <img src="{{asset('assets')}}/images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
        <img src="{{asset('assets')}}/images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
        <img src="{{asset('assets')}}/images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
        <img src="{{asset('assets')}}/images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
        <img src="{{asset('assets')}}/images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
        <img src="{{asset('assets')}}/images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
    </section>
    <!-- /page title -->

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-5.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-2.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-3.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-4.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-5.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="card shadow">
                        <img class="rounded card-img-top" src="{{asset('assets')}}/images/blog/post-2.jpg" alt="post-thumb">
                        <div class="card-body">
                            <h4 class="card-title"><a class="text-dark" href="{{asset('blog_single')}}">Amazon increase income 1.5 Million</a>
                            </h4>
                            <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua.</p>
                            <a href="{{asset('blog_single')}}" class="btn btn-xs btn-primary">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- /blog -->
@endsection
