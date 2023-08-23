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
    @foreach ($trains as $train)
      @if ($train['departure_date'] == date('Y-m-d'))
        <ul>
          <li>{{ $train->company }}</li>
          <li>{{ $train->departure_station }}</li>
          <li>{{ $train->arrival_station }}</li>
          <li>{{ $train->departure_time }}</li>
          <li>{{ $train->arrival_time }}</li>
        </ul>
      @endif
    @endforeach
  </main>
</body>

</html>
