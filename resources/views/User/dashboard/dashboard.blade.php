@extends('user.layout.master')
@section('content')
    <!-- header -->
    @include('user.layout.home')
    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- category -->
        @include('user.layout.product')
        <!-- end of category -->

        <!-- Popular section -->
        @include('user.layout.popular')
        <!-- end of popular section -->

        <!-- latest product deals section -->
        @include('user.layout.latest')
        <!-- end of latest product deals section -->

        <!-- About MayaStore section -->
        @include('user.layout.about')
        <!-- About MayaStore section -->

        <!-- contact section -->
        @include('user.layout.contact')
        <!-- end of contact section -->
    </main>
@endsection
