@extends("template")
@section("tittle")
  Galerie
@stop
@section ('content')


  {{-- <div id="{{ $contenu->sousmenus[0]->slug }}">
    <div id="gtco-portfolio" class="gtco-section">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
          <h2 class="text-center">{{ $contenu->sousmenus[0]->titre }}</h2>
          {!! $contenu->sousmenus[0]->contenu !!}
        </div>
      </div>
    </div>
  </div> --}}


    <!-- Bootstrap 3 Lightbox image gallery using Modal -->
    <div id="gtco-portfolio" class="gtco-section">
      <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
        <h2 class="text-center">Galerie </h2>

        <div class="grid">
          @foreach ($lesAlbums as $unAlbum)
            @if($unAlbum->actif == true)
              @if(count($unAlbum->Photos) === 0)
                <center>Oups nous n'avons pas encore de photos a vous presentez dans cette album</center>
              @else
                @foreach ($unAlbum->Photos as $uneImage)

                @endforeach
                <figure class="effect-ruby">
                  <img src="{{ url('files/album') ."/". $uneImage["titre"] .".jpg" }}" alt="img{{ $uneImage["id"] }}">
                  <figcaption>
                    <h2>{{$unAlbum["titre"]}} </h2>
                    <p>voir les {{count($unAlbum->Photos)}} photos</p>
                    <a title="album {{ $unAlbum["id"] }}" href="{{route('showGalerie', $uneImage->id)}}">voir l'album</a>
                  </figcaption>
                </figure>
              @endif
            @endif
          @endforeach
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="pirate gtitre">{{$unAlbum["titre"]}} </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
          @foreach ($unAlbum->Photos as $uneImage)
            <div class="thumbnail col-md-3">
              <a href="{{ url('files/album') ."/". $uneImage["titre"] .".jpg" }}" data-lightbox="roadtrip"><img src="{{ url('files/album') ."/". $uneImage["titre"] .".jpg" }}" ></a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
@stop

@section('script')
<!-- lightBox -->
    <script src="{{url('js/lightbox.min.js')}}"></script>
@endsection
