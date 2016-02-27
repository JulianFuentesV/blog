@extends('front.template.main')

@section('title', $article->title)

@section('content')
	<div class="panel panel-default">
		<div class="panel-body text-justify">
			<section id="my-panel-header" class="panel-heading">
                <h2 class="text-center bangers">{{ $article->title }}</h2>
            </section>
			<br><br>
			@foreach($article->images as $image)
            	<img src="{{ asset('images/articles/'. $image->name) }}" class="img-primary img-responsive">
            @endforeach
			<br><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			{!! $article->content !!} <br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>
	<h3>Comentarios</h3>
		<div id="disqus_thread"></div>
		<script>
		/**
		* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
		*/
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');

		s.src = '//codigojfv.disqus.com/embed.js';

		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
@endsection

@section('content2')
    <div class="panel panel-primary">
    	<div class="panel-body">	        
            <h3 class="marvel">
            	Autor:<br>
            	{{ $article->user->name}}
			</h3>
			<hr>
            <h4>
            	<div id="botones-para-compartir">
					<a href="http://www.facebook.com/JulianFuentesV" target="_blank" rel="nofollow" title="Facebook"><img alt="Facebook" class="facebooko" height="40" src="http://1.bp.blogspot.com/-rwK-4X3iLjc/ViFsOclr9NI/AAAAAAAABwc/ocBw9cxRK2M/s1600/facebook-long.png" title="Facebook" width="40"/></a>
					<a href="https://plus.google.com/u/0/+JulianFuentes95" target="_blank" rel="nofollow" title="Google+"><img alt="Google+" class="googleo" height="40" src="http://1.bp.blogspot.com/-SKqPlZHzLgg/ViFsOt7HbeI/AAAAAAAABw0/bQQhWqgEpWM/s1600/google-long.png" title="Google+" width="40" /></a>
					<a href="http://twitter.com/JulianFuentesV" target="_blank" rel="nofollow" title="Twitter"><img alt="Twitter" class="twittero" height="40" src="http://4.bp.blogspot.com/-gqVyoE8cVME/ViFsO009lbI/AAAAAAAABwo/1oK8cUnY36Q/s1600/twitter-long.png" title="Twitter" width="40" /></a>
					<a href="https://co.linkedin.com/in/julian-fuentes-b22b45114" target="_blank" rel="nofollow" title="LinkedIn"><img alt="LikedIn" class="likedino" height="40" src="http://4.bp.blogspot.com/-WBa3E0lZI-8/ViFsOraP3DI/AAAAAAAABwg/eWD_6bYykMQ/s1600/linkedin-long.png" title="LikedIn" width="40" /></a></div>
					<style>#botones-para-compartir{ text-align:center;}.likedino:hover, .facebooko:hover, .twittero:hover, .googleo:hover,.pinteresto:hover {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);transform: rotate(360deg);transition:all .3s ease-out;-moz-transition: all .5s;-webkit-transition: all .5s;-o-transition: all .5s;}.likedino, .facebooko, .twittero, .googleo, .pinteresto {transition:all .3s ease-out;-moz-transition: all .5s;-webkit-transition: all .5s;-o-transition: all .5s;margin-left:10px; /* espacio entre cada boton */}</style>
			</h4>
	    </div>
    </div>
@endsection