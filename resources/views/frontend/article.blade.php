@extends('layouts.public')
@section('content')
<main id="main" class="site-main">
<section class="hero  hero--fullscreen   hero--has-overlay">
                <img decoding="async" class="hero-background" src="https://cdn.pixabay.com/photo/2024/01/17/02/56/house-8513467_1280.jpg" alt="" aria-hidden="true">
                <div class="hero-content-holder">
                    <div class="hero-content container">
                        <div class="hero-breadcrumbs">
                            <a href="/services/service-index.php" class="hero-breadcrumb">Services</a>
                            <a href="boosting-operational-efficiency.php" class="hero-breadcrumb">{{$article->heading}}</a>
                        </div>
                        <h1 class="hero-title ">{{$article->heading}}</h1>
                        <div class="hero-tagline">
                          </div>
                    </div>
                </div>
            </section>
</main>
			<article class="article">
				<div class="article-lead">{{$article->heading}}</div>
				<div class="article-body">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, voluptatum!</p>
					<p>{!! $article->contentAsHtml !!}</p>
					<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- <div class="wp-block-image">
						<figure class="aligncenter size-full is-resized"><img decoding="async"
								src="https://static.borngroup.com/uploads/2023/05/Sunil_K.jpg" alt class="wp-image-25749"
								width="224" height="227"
								srcset="https://static.borngroup.com/uploads/2023/05/Sunil_K.jpg 500w, https://static.borngroup.com/uploads/2023/05/Sunil_K-296x300.jpg 296w"
								sizes="(max-width: 224px) 100vw, 224px" /></figure>
					</div> -->
				</div>
			</article>
@endsection