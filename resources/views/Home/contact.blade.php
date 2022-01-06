@extends('Layouts.contact')
@section('title', 'Contact')

@section('content')
    <!-- page title -->
    <section class="page-title bg-primary position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white font-tertiary">Contacts</h1>
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

@endsection
