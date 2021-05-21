@extends('layouts.public')
@section('content')
<article id="post-1637" class="single-post vertical-item content-padding padding-big ds bs bordered box-shadow  post-1637 post type-post status-publish format-standard has-post-thumbnail hentry category-taro category-transit_chart tag-astrology tag-post">
        
			<div class="item-media entry-thumbnail post-thumbnail  ">
				<img width="1200" height="560" src="https://www.starsgyan.com/wp-content/uploads/2019/05/img_3-1200x560.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />			</div> <!-- .item-media -->
		
		    <div class="item-content">

            <div class="entry-header single-post">
                <div class="entry-meta">
                <span><time class="published entry-date" datetime="2019-05-17T14:06:05+00:00">{{$article->publishedAtHuman}}</time></span></div>
            </div>

            <div class="divider-20 divider-xl-40"></div>

            <div class="entry-content">
            <div class="col-sm-12 text-md">{!! $article->contentAsHtml !!}</div>
            </div>
           </div>
</article>
@endsection