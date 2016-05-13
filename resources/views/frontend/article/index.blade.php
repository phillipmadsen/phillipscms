@extends('frontend/layout/leftside')

@section('htmlschema')
itemscope itemtype="http://schema.org/Blog"
@endsection

@section('seo')
@include('frontend.article.partials.meta')
@endsection

@section('jsonschema')
@endsection

@section('title')
@endsection

@section('bodyschema')
@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')

<script type="text/javascript" src="{!! asset('assets/js/moment-with-langs.min.js') !!}"></script>

<script type="text/javascript">
    moment().format();
    moment.lang('en');

    jQuery(document).ready(function ($) {
        var now = moment();
        $('.time').each(function (i, e) {

            var time = moment($(e).attr('datetime'));
            $(e).html('<i class="icon-calendar"> ' + time.from(now) + '</i>');

        });
    });
</script>

@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_blog->roots()])
@endsection

@section('slider')
@endsection

@section('intro')
@endsection

@section('page-title')
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h2>Blog</h2>
        <span>Our Latest News</span>
        @yield('partial/breadcrumbs', Breadcrumbs::render('blog', $articles))

    </div>
</section>
<!-- #page-title end -->
@endsection

@section('content')

<!-- Post Content
============================================= -->
<div class="postcontent nobottommargin col_last clearfix">

    @foreach($articles as $article)
    <!-- Posts
    ============================================= -->
    <div id="posts" itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="entry clearfix">
            <div class="entry-image">

                @if($article->path)
                <a href="{!! url($article->path . $article->file_name) !!}" data-lightbox="image">
                    <img class="image_fade" src="{!! url($article->path . $article->file_name) !!}" style="border: 1px solid #bdc3c7;" alt="{!! $article->title !!} image"/>
                </a>
                @else
                <a href="{!! asset('/frontend/assets/images/blog_default.png') !!}" data-lightbox="image">
                    <img class="image_fade" src="http://lorempixel.com/800/350/abstract/" style="border: 1px solid #bdc3c7;" alt="{!! $article->title !!} image"/>
                </a>
                @endif

            </div>
            <div class="entry-title">
                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">
                    <h1 itemprop="name headline">{!! $article->title !!}</h1>
                </a>
            </div>
            <ul class="entry-meta clearfix">
                 <li><i class="icon-calendar3"></i> <span datetime="{!! $article->created_at !!}" class="time"></span>  {!! $article->created_at->format('m/d/Y');  !!}</li>
                <li>
                    <span class="byline"><i class="icon-user"></i>
                        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <span itemprop="name">
                                <a href="https://plus.google.com/" itemprop="url" rel="author">
                                    The Grace Company
                                </a>
                            </span>
                        </span>
                    </span>
                </li>
                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
                {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
            </ul>
            <div class="entry-content content" itemprop="articleBody">
                {!! $article->excerpt !!}
                <br />
                <br />
                <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}" class="more-link">Read More</a>
            </div>
        </div>
    </div><!-- .posts end -->
    @endforeach
    <ul class="pagination pagination-lg">{!! $articles->render() !!}</ul>
</div><!-- .postcontent end -->

@endsection

@section('footer_scripts')


@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')
@endsection