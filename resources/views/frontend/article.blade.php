@extends('layouts.public')
@section('content')
<section class="ds page_content ds s-pt-130 s-pb-70   s-pt-xl-150  s-pt-sm-175  c-gutter-60">
		<div class="container">
		<div class="row">

        <div id="content" class="col-12 col-xs-12 col-lg-9 column-main">
<article id="post-1637" class="single-post vertical-item content-padding padding-big ds bs bordered box-shadow  post-1637 post type-post status-publish format-standard has-post-thumbnail hentry category-taro category-transit_chart tag-astrology tag-post">
        
			<div class="item-media entry-thumbnail post-thumbnail ">
				<img width="1200" height="350" src="{{ ($article->cover_image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />
			<!-- <img width="700" height="355"
    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" 
        src="https://api.starsgyan.com/StarsGyanWebsiteDev/blog7.jpg"/> -->
			</div><!-- .item-media -->
		<div class=" mt-5">
        <h4 class="entry-title mb-3 links-maincolor2" style="color:#851f37">{{$article->heading}}</h4>
        </div>
		    <div class="item-content" style="padding:0">

            <!--<div class="entry-header single-post">
                <div class="entry-meta">
                <span><time class="published entry-date" datetime="2019-05-17T14:06:05+00:00">{{$article->publishedAtHuman}}</time></span></div>
            </div>-->
            <!--<div class="entry-content mt-35">
                        <p>{{$article->article_caption}}<br /></p>
                    </div>--><!-- .entry-content -->
            <div class="divider-20 divider-xl-40"></div>

            <div class="entry-content">
            <div class="col-sm-12 text-md a_tag" style="padding-left:0">{!! $article->contentAsHtml !!}</div>
            </div>
           </div>
</article>
</div>
               <aside  class="col-12  col-xs-12 col-lg-3  column-sidebar">
							<div class="widget-odd affix-top widget-first widget-1 widget-theme-wrapper widget_no_background">
								<div id="categories-4" class="widget widget_categories">
									<h3 class="widget-title" style="font-weight:600">Categories</h3>
									<ul>
										<li class="cat-item  text-dark cat-item-89">
                                           @foreach($navCategories as $category)
                                            <a style="width:100%; border-top: 0.5px solid #252839;;" href="{{route('articles-by-category', $category->alias)}}">{{$category->name}}</a>
                                            @endforeach
										</li>
									</ul>
								</div>
							</div>
						
							
						</aside>
</div>
</div>
</section>
@endsection