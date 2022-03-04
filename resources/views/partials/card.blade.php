<div class="card-box">
  @foreach ($data as $movie)
    <div class="card">
      <img class="poster" src="{{$movie['poster']}}" alt="">
      <div class="info">
        <div class="row"><span>Titolo:</span> {{$movie['title']}}</div>

        <div class="row"><span>Titolo Originale:</span> {{$movie['original_title']}}</div>

        <div class="row"><span>Nazionalità:</span> {{$movie['nationality']}}</div>
       
        <div class="row"><span>Data d'uscita:</span> {{$movie['title']}}</div>

        <div class="row"><span>Voto:</span> {{$movie['vote']}}</div>
      </div>
    </div>
  @endforeach
</div>