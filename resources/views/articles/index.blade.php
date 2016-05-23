@extends ('app')

@section('content')
    
    <h1>Articles</h1>

    @foreach ($articles as $article)
        <article>
            <h2>
                {{ $article->title }}

                <div class="body">{{ $article->body }}</div>        

            </h2>
        </article>
    @endforeach

@stop    