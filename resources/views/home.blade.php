<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trains</title>
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    <h1>Treni in partenza oggi: </h1>
    <div class="container">
      <div class="row">
        @foreach ($trains as $train)
          @if ($train['departure_date'] == date('Y-m-d'))
            <div class="column">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $train->departure_station }} - {{ $train->arrival_station }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $train->company }}</h6>
                  <p class="card-text">
                    Partenza: {{ substr($train->departure_time, 0, 5) }} <br>
                    Arrivo: {{ substr($train->arrival_time, 0, 5) }}
                  </p>

                  @if (!$train['in_time'])
                    <p class="card-text text-danger">Ritardo</p>
                  @elseif ($train['canceled'])
                    <p class="card-text text-danger">Cancellato</p>
                  @endif
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </main>
</body>

</html>
