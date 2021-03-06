{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials..mastheads.video-mastehad')
    @include('partials.section-about-us')
    @include('partials.section-featured-coffee')
    @include('partials.section-collage')
    @include('partials.section-featured-posts')
  @endwhile
@endsection
