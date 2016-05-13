@extends('frontend/layouts/master')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection


@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection
@section('jsonschema')@endsection

@section('bodytag')
rows 
@endsection

@section('styles')
 
@endsection
@section('scripts') @endsection
@section('bodyschema')@endsection
@section('submenu')
  @include('frontend/pages/qct/partials/submenu')
@endsection
@section('slider') @endsection
@section('intro')

@endsection
@section('pagetitle')
<section id="page-title">
    <div class="container clearfix">
        <h1>Tutorials</h1>
        <span>Learn how to use QuiltMotion. </span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/') !!}/automation/qct/" itemprop="url"><span itemprop="title">QuiltMotion</span></a></li>
          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">QuiltMotion Tutorials</span></li>
        </ol>
    </div>
</section>
@endsection
@section('content')
comming soon...
@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@endsection
