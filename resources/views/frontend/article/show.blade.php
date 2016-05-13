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

@section('page-title')
<!-- Page Title ============================================= -->

<section id="page-title">

            <div class="container clearfix">
                <h1>Blog Article</h1>
              @yield('partial/breadcrumbs', Breadcrumbs::render('blog.post.show', $article))
            </div>

        </section>
@endsection


{{-- [Carbon::now()->setTime(0,0)->format('Y-m-d H:i:s'), Carbon::now()->setTime(23,59,59)->format('Y-m-d H:i:s')] --}}
@section('blog-content')


<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{!! $article->title !!}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">


                            <li><i class="icon-calendar3"></i> <span datetime="{!! $article->created_at !!}" class="time"></span>  {!! $article->created_at->format('m/d/Y');  !!}</li>
                            <li><a href="#"><i class="icon-user"></i> AUTHOR GOES HERE</a></li>
                            <li><i class="icon-folder-open"></i> {!! $article->category_id.[0]->title !!}</li>
                            {{-- <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li> --}}
                            {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image">

                    @if($article->path)
                    <img class="img-responsive img-blog" src="{!! url($article->path . $article->file_name) !!}" width="100%" style="border: 1px solid #bdc3c7;" alt="" />
                    @else
                    <img class="img-responsive img-blog" src="{!! url('assets/images/blog_default.png') !!}" width="100%" style="border: 1px solid #bdc3c7; height: 290px;" alt=""/>
                    @endif




                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            {!! $article->content !!}


                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                            @foreach($article->tags as $tag)
                            <a class="btn btn-xs btn-primary" style="color:white" href="{!! URL::route('dashboard.tag', array('tag'=>$tag->slug)) !!}"> <i class="icon-tags"></i>  {!! $tag->name !!}</a>
                            @endforeach
                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->

                    {{-- <div class="post-navigation clearfix">
                        <div class="col_half nobottommargin">
                            <a href="#">⇐ This is a Standard post with a Slider Gallery</a>
                        </div>
                        <div class="col_half col_last tright nobottommargin">
                            <a href="#">This is an Embedded Audio Post ⇒</a>
                        </div>
                    </div>  --}}

                    <div class="line"></div>

                    <!-- Post Author Info
                    ============================================= -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Posted by <span><a href="#">The Grace Company</a></span></h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <img src="images/author/1.jpg" alt="" class="img-circle">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class="line"></div>














                    <h4>Related Posts:</h4>

                    <div class="related-posts clearfix">

                        <div class="col_half nobottommargin">

@foreach($articles as $article )

                            <div class="mpost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">This is an Image Post</a></h4>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> {!! $article->created_at->diffForHumans(); !!}</li>
                                        <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                    </ul>
                                    <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>

@endforeach



                        </div>

                    </div>

                        {{-- comments here --}}

                </div>

            </div><!-- .postcontent end -->


        </div>

    </div>

</section>


@endsection

@section('sidebar')
@include('frontend/article/sidebar', array($tags, $categories))
@endsection





@section('footer_scripts')


@endsection

@section('pp_footer_scripts')

@endsection

@section('inlinejs')

@endsection