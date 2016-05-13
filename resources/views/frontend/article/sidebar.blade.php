<aside class="col-sm-4 col-sm-push-8">

                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">
@include('frontend/elements/search')
    <div class="widget categories">
        <h3>Blog Categories</h3>

        <div class="row">
            <div class="col-sm-6">
                <ul class="arrow">
                    @foreach($categories->slice(0, round($categories->count()/2)) as $category)
                    <li>
                        <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="arrow">
                    @foreach($categories->slice(round($categories->count()/2), ($categories->count())) as $category)
                    <li>
                        <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--/.categories-->
    <div class="widget clearfix">
        <h4>Tag Cloud</h4>
        <div class="tagcloud">
            @foreach($tags as $tag)
                <a href="{!! URL::route('dashboard.tag', array('tag'=>$tag->slug)) !!}">{!! $tag->name !!}</a>
            @endforeach
        </div>
    </div>
    <!--/.tags-->









                        </div>

                    </div><!-- .sidebar end -->
</aside>