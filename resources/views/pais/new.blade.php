<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nuevo Pais</title>
</head>
<body>
    <h1>Agregar Pais</h1>
    <form method="POST" action="{{route('paises.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Código Pais</label>
          <input type="text" class="form-control" id="id" aria-describedby="idlHelp" name="id" placeholder="Formato : ABC">
          <div id="idlHelp" class="form-text">Id del Pais</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nombre Pais</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="idlHelp"
            placeholder="Pais nombre">
        </div>

        <div class="mb-3">
            <label for="municipality" class="form-label">ID Capital</label>
            <select class="form-select" id="municipality" name="code" required>
                <option selected disabled value="">Seleccione una...</option>
                @foreach ($capitales as $capital)
                    <option value="{{ $capital -> pais_capi }}">{{ $capital -> pais_capi }}</option>
                @endforeach
            </select>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('paises.index') }}">Cancelar</a>
          </div>
      </form>
</body>
</html>