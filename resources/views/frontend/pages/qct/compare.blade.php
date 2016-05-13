@extends('frontend/layouts/master')

@section('title')
Compare Versions | The Grace Company
@parent
@endsection

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection
@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection
@section('bodytag')rows @endsection


@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <!--end of page level css-->
@endsection

@section('scripts')@endsection
@yield('pp_footer_scripts')@endsection

@section('submenu')
  @include('frontend/pages/qct/partials/submenu')
@endsection

@section('slider')@endsection
@section('intro')@endsection

@section('page-title')
<!-- Page Title ============================================= -->
<section id="page-title" class="page-title-dark">
    <div class="container clearfix">
        <h1>Quilter&#39;s Creative Touch Support</h1>
        <span>how can we help</span>
        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url">Home</a></li>
            <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/') !!}/automation/qct/" itemprop="url">QuiltMotion</a></li>
            <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">QuiltMotion Support</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection

@section('sidebar')@endsection

@section('content')
<h1>compare content comming soon</h1>
@endsection


@section('footer_scripts')
    <!-- page level js starts-->
    <!--page level js ends-->
@endsection
@section('inlinejs')@endsection
@section('pp_footer_scripts')@endsection
