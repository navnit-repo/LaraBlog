<section class="page_title  ds s-pt-130 s-pb-70   s-pt-xl-150  s-pt-sm-175      cover-background s-"
				style="background-image:url('https://api.starsgyan.com/StarsGyanWebsiteDev/pictures/blog banner.jpg');">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<h1 style="color: #FFAF00">
								Blog </h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item first-item"><a href="./">Home</a></li>
								<li class="breadcrumb-item first-item text-white">Blog</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
        <section class="ds page_content s-py-90 s-py-xl-150 c-gutter-60">
		<div class="container-fluid">
		<div class="row">
		<div class= col-lg-2 style="order:3">	
        
	     <div class="widget-odd widget-last widget-3 widget-theme-wrapper widget_no_background mt-5 mt-md-0">
        
						   <div id="tag_cloud-3" class="widget widget_tag_cloud">
                           @isset($recentArticles)
                	       <h3 class="widget-title">Recent Post</h3>
                	       <div class="tagcloud" style="border-bottom:0.5px solid #e8e8e8">
                           @forelse($recentArticles as $rarticle)
                	       <a href="{{route('get-article-with-heading', [$rarticle->category->alias, make_slug($rarticle->heading)])}}" class="tag-cloud-link tag-link-16 tag-link-position-1" style="font-size: 14px !important; width:100%;" aria-label="Astrology (3 items)">{{$rarticle->heading}}</a>
                           @endforeach 
                           </div>
                           @endisset
                            </div>
                     </div>
            
             </div>   
        

        <div id="content" class="col-12 col-xs-12 col-lg-8 column-main" style="order:2">
        
        @forelse($articles as $article)
            <article id="post-1637"
                class="text-center box-shadow ds bs bordered text-md-left vertical-item content-padding readmore-hidden post-1637 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-taro category-transit_chart tag-astrology tag-post">
            				                
                <div class="item-media entry-thumbnail post-thumbnail  ">
                 <a class="abs-link" href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}">
                    <img width="1200" height="350"
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" 
                        src="{{ ($article->cover_image) }}"
                        />
                        </a>
                </div>
                <!--<a class="abs-link" href="{{route('get-article', [$article->id, make_slug($article->heading)])}}">
                <img width="700" height="355"
    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" 
        src="https://api.starsgyan.com/StarsGyanWebsiteDev/blog7.jpg"/> 
        </a>-->
                <!--<img width="700" height="355"
    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" 
        src="{{ ($article->cover_image) }}"/>-->
                <!-- .item-media -->

                <div class="item-content  with-share" style="padding:0">
                    <div class="entry-header">
                        <span class="cat-links">
                            <a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a>
                        </span>
                            <a class="fs-30" href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}" rel="bookmark">
                            <h4 class="entry-title mb-3 links-maincolor2">{{$article->heading}}</h4></a>
                    </div>

                    <div class="entry-content mt-35">
                        <p style="color:#757575">{{$article->article_caption}}<br /></p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer">
                        <div class="entry-meta">
                            <span><time class="published entry-date"
                                        datetime="2019-05-17T14:06:05+00:00">{{$article->publishedAtHuman}}</time>
                                    </span> 
                                    </div>
                        <div>
                            <span class="read">
                                <a href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}" class="mt-30 font-2" >Read
                                   Now<i class="fa fa-caret-right color-main ml-2"></i></a>
                            </span>
                        </div>
                    </div>

                    <!--<div class="meta-wrap">
                        <div class="tag-wrapper mt-30">
                            @foreach($article->keywords as $keyword)
                            <span class="tag-links">
                            <a href="{{route('articles-by-keyword', [$keyword->name])}}" rel="tag">{{$keyword->name}}</a>
                            </span>
                            @endforeach    
                            </div>
                    </div>-->
                </div><!-- eof .item-content -->
            </article>
            @endforeach 
            <div style="margin-top:50px">
            {{method_exists($articles, 'links') ? $articles->links() : ''}}
            </div>
        </div>
                
                 <aside  class="col-12  col-xs-12 col-lg-2  column-sidebar d-none d-md-block tmc" style="order:1">
                 	<div>
							<div class="widget-odd affix-top widget-first widget-1 widget-theme-wrapper widget_no_background">
								<div id="categories-4" class="widget widget_categories">
									<h3 class="widget-title" style="font-weight:600">Categories</h3>
									<ul>
										<li class="cat-item  text-dark cat-item-89">
                                           @foreach($navCategories as $category)
                                            <a style="width:100%; border-top: 0.5px solid #e8e8e8;padding:5px; font-size:14px;" href="{{route('articles-by-category', $category->alias)}}">{{$category->name}}</a>
                                            @endforeach
										</li>
									</ul>
								</div>
							</div>
							</div>
						</aside>
						<!-- eof main aside sidebar -->
					</div><!-- eof .row-->
					
				</div><!-- eof .container -->
			</section><!-- eof .page_content -->
				
			
