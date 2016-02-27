@extends('front.template.main')
@section('title', 'Home')
@section('article_title', 'Art&iacute;culos recientes:')

@section('content')
   @foreach($articles as $article)
        <div class="col-md-10 col-sm-10 col-xs-12">                               
            <div class="panel panel-default">
                <a href="{{ route('front.view.article', $article->slug) }}">
                    <section id="my-panel-header" class="panel-heading">
                        <h2 class="text-center bangers">{{ $article->title }}</h2>
                    </section>
                </a>
                <section id="my-panel-body" class="panel-body">  
                    <div class="text-justify">                        
                        @foreach($article->images as $image)                        
                            <a href="{{ route('front.view.article', $article->slug) }}">
                                <img src="{{ asset('images/articles/'. $image->name) }}" class="media-object img-secu img-responsive pull-left">
                            </a>
                        @endforeach
                        {!! substr($article->content, 0, 380) !!}... <a href="{{ route('front.view.article', $article->slug) }}">Leer más.</a>
                    </div>                
                    <hr>
                    <!--<span class="lato"> >> Publicado por: {{ $article->user->name }} - {{ $article->category->name }}</span>
                    <div class="pull-right lato text-capitalize">                        
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        {{ $article->created_at->diffForHumans() }}.
                    </div>-->
                    <div class="marvel fsSM pull-right"> <!-- text-capitalize -->
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        Publicado {{ $article->created_at->diffForHumans() }}.
                    </div>
                </section>
            </div>
        </div>
    @endforeach
@endsection

@section('content2')
    <div class="panel panel-primary">
        <div>
            <h2 class="text-center marvel">Categor&iacute;as</h2>
        </div>
        <div class="list-group lato">
            @foreach($categories as $category)
                <a href=" {{ route('front.search.category', $category->name) }} " class="list-group-item"> {{ $category->name }} <span class="badge">{{ $category->articles->count() }}</span></a>
            @endforeach
        </div>
    </div>
@endsection

@section('render')
    {!! $articles->render() !!}
@endsection