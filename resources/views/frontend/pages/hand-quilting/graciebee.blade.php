@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')

@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_handquilting->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')
content section here
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection