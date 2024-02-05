<?php
				$BASE_URL = env('BASE_URL_INCRAFTIV');
				?>
<main id="main" class="site-main">
            <section class="hero    hero--light ">
                <div class="hero-content-holder">
                    <div class="hero-content container">
                        <div class="hero-breadcrumbs">
                            <a href="{{$BASE_URL}}/index.php" class="hero-breadcrumb">InCraftiv</a>
                            <a href="{{$BASE_URL}}/news/news.php" class="hero-breadcrumb">News</a>
                        </div>
                        <h1 class="hero-title ">News</h1>
                        <div class="hero-tagline">
                            Browse our latest news and updates
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <section class="article-listing container">
        <header class="contact-header">
                    <nav class="page-nav   ">
                        <ul class="page-nav-list">
                            <li class="page-nav-list-item">
                                <a class="page-nav-link is-active link-underline" href="index.php">
All
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="analytics/index.html">
Analytics
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="best-practices/index.html">
Best practices
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="ecommerce/index.html">
eCommerce
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="experience/index.html">
Experience
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="initiatives/index.html">
Initiatives
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="launches/index.html">
Launches
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="press/index.html">
Press
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="research/index.html">
Research
</a>
                            </li>
                            <li class="page-nav-list-item">
                                <a class="page-nav-link  link-underline" href="tech/index.html">
Tech
</a>
                            </li>
                        </ul>
                    </nav>
                </header>
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
        
					</div>
					
                    <section class="article-listing container">
                    <div class="article-list">
                    @forelse($articles as $article)
                    <div class="article-list-item">
                        <div class="article-list-item-figure-holder">
                            <figure class="article-list-item-figure">
                                <a href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}"><img class="article-list-item-img" src="../../static.Incraftiv.com/uploads/2022/03/pexels-stacey-gabrielle-koenitz-rozells-2425011-510x0-c-default.jpg" srcset="https://static.borngroup.com/uploads/2022/03/pexels-stacey-gabrielle-koenitz-rozells-2425011-1020x0-c-default.jpg"
                                        alt=""></a>
                            </figure>
                        </div>
                        <div class="article-list-item-body">
                            <div class="article-list-item-meta">
                                <ul class="article-categories">
                                    <li><a href="{{route('articles-by-category', $article->category->name)}}">{{$article->category->name}}</a></li>
                                    <!-- <li><a href="experience/index.html">Experience</a></li>
                                    <li><a href="tech/index.html">Tech</a></li> -->
                                </ul>
                                <time class="u-text-small-caps">{{$article->publishedAtHuman}}</time>
                            </div>
                            <h2 class="article-list-item-title"><a href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}">{{$article->heading}}</a></h2>
                            <a href="{{route('get-article-with-heading', [$article->category->alias, make_slug($article->heading)])}}" class="link-cta  link-underline" data-cursor-text="Read Article">Read Article <svg aria-hidden="true" class="icon " style="color: inherit" width="24px" height="24px" viewBox=" 0 0 24 24"><path d="M17.3771672,5.12950597 L17.4631361,5.20235307 L23.796858,11.5114765 C24.0406284,11.7543002 24.0650054,12.132908 23.8699891,12.4028885 L23.796858,12.4885235 L17.4631361,18.7976469 C17.1922801,19.067451 16.7531357,19.067451 16.4822797,18.7976469 C16.2385092,18.5548232 16.2141322,18.1762154 16.4091485,17.9062349 L16.4822797,17.8205999 L21.632,12.69 L0.693570246,12.6908766 C0.310521976,12.6908766 -4.05009359e-13,12.3815606 -4.05009359e-13,12 C-4.05009359e-13,11.6502361 0.260924716,11.3611778 0.599456872,11.3154303 L0.693570246,11.3091234 L21.631,11.309 L16.4822797,6.17940014 C16.2385092,5.93657645 16.2141322,5.5579686 16.4091485,5.28798808 L16.4822797,5.20235307 C16.7260501,4.95952939 17.1061341,4.93524702 17.3771672,5.12950597 Z"></path></svg>
                            </a>
                        </div>
                    </div>
                 
                    @endforeach 
                </div>
                <div id="content" class="col-12 col-xs-12 col-lg-8 column-main" style="order:2">
                <div style="margin-top:50px">
                {{$articles}}
             <!-- {{method_exists($articles, 'links') ? $articles->links() : ''}} -->
            </div>
                                </div>
                                </section>
				</div><!-- eof .container -->
			</section><!-- eof .page_content -->
				
			
