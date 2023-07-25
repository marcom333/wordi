@extends('template')

@section('content')

    <a class="btn btn-info" href="/">Next</a>
    <a class="btn btn-danger" href="/delete/{{$word->id}}">Delete</a>
    <h1 id="text">{{ucfirst($word->word)}} </h1>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="btn btn-dark">
                @for ($i = 1; $i <= $word->stars; $i++)
                    <a href="score/{{$word->id}}/{{$i}}" class="color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                @endfor
                @for ($i = $word->stars+1; $i <= 5; $i++)
                    <a href="score/{{$word->id}}/{{$i}}" class="color-empty">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    </a>
                @endfor
            </span>
        </div>
        <select class="custom-select" id="voice"></select>
        <div class="input-group-append">
            <span class="btn btn-info" id="listen">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                </svg>
            </span>
        </div>
    </div>
    
    <hr>
    <h3>Definition:</h3>
    <iframe class="col-12" height="600px" src="http://wordnetweb.princeton.edu/perl/webwn?s={{$word->word}}" frameborder="0"></iframe>

    <script src="{{asset('script.js')}}"></script>
@endsection