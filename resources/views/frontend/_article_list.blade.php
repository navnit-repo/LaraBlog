@forelse($articles as $article)
        <section class="ds page_content s-py-90 s-py-xl-150 c-gutter-60">
		<div class="container">
		<div class="row">
        <div id="content" class="col-12 col-xs-12 col-lg-8 column-main">

            <article id="post-1637"
                class="text-center box-shadow ds bs bordered text-md-left vertical-item content-padding readmore-hidden post-1637 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-taro category-transit_chart tag-astrology tag-post">

                <div class="item-media entry-thumbnail post-thumbnail  ">
                 <a class="abs-link" href="{{route('get-article', [$article->id, make_slug($article->heading)])}}">
                    <img width="1200" height="560"
                        src="https://www.starsgyan.com/wp-content/uploads/2019/05/img_3-1200x560.jpg"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
                        </a>
                </div> <!-- .item-media -->

                <div class="item-content  with-share">
                    <div class="entry-header">
                        <span class="cat-links">
                            <a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a>
                        </span>
                            <a class="fs-30" href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" rel="bookmark">
                            <h4 class="entry-title mb-3 links-maincolor2">{{$article->heading}}</h4></a>
                    </div>

                    <div class="entry-content mt-35">
                        <p>The boom in Millennial Astrology (for people born 1990 to 1995) means
                            horoscopes are now known factors for anyone aged around 20, 21, 22, 23, 24,
                            25, 26<br /></p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer">
                        <div class="entry-meta">
                            <span><a href="../2019/05/17/index.html"
                                    rel="bookmark"><time class="published entry-date"
                                        datetime="2019-05-17T14:06:05+00:00">{{$article->publishedAtHuman}}</time>
                                    </a></span> 
                                    </div>
                        <div>
                            <span>
                                <a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" class="mt-30 font-2">Read
                                    Now<i class="fa fa-caret-right color-main ml-2"></i></a>
                            </span>
                        </div>
                    </div>

                    <div class="meta-wrap">
                        <div class="tag-wrapper mt-30">
                            @foreach($article->keywords as $keyword)
                            <span class="tag-links">
                            <a href="{{route('articles-by-keyword', [$keyword->name])}}" rel="tag">{{$keyword->name}}</a>
                            </span>
                            @endforeach    
                            </div>
                    </div>
                </div><!-- eof .item-content -->
            </article>
            </div>
            </section>

@empty
    <div class="row text-grey">
        <div class="col-sm-12"><h3>Not Available</h3></div>
    </div>
@endforelse
{{method_exists($articles, 'links') ? $articles->links() : ''}}
