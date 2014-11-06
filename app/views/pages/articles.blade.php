<?php
$articles = Article::take(5)->get();
?>



@foreach($articles as $article)
<div class="row">
	<div class="col-md-6">
	<img src="{{asset('articles/'. $article->img)}}" alt="$article->img" class="thumbnail img-responsive">	
	</div>

	<div class="col-md-6">
<h5><a href="{{route('articles.show', $article->id)}}">{{$article->title}}</a> </h5>

	<p> {{Str::limit($article->body, 40)}} <a href="{{route('articles.show', $article->id)}}">Read more</a></p>

	</div>
</div>


	
<hr>
@endforeach


