<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar Comuna</title>
</head>
<body>
    <h1>Editar Comuna</h1>
    <form method="POST" action="{{route('comunas.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Código Comuna</label>
          <input type="text" class="form-control" id="id" aria-describedby="idlHelp" name="id"
          disabled value="{{ $comuna -> comu_codi }}">
          <div id="idlHelp" class="form-text">Id de la comuna</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nombre Comuna</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="idlHelp"
            placeholder="Comuna nombre" value="{{ $comuna -> comu_nomb }}">
        </div>

        <div class="mb-3">
            <label for="municipality" class="form-label">Municipio</label>
            <select class="form-select" id="municipality" name="code" required>
                <option selected disabled value="">Seleccione una...</option>
                @foreach ($municipios as $municipio)
                    @if ($municipio -> muni_codi == $comuna -> muni_codi)
                        <option selected value="{{ $municipio -> muni_codi}}">{{ $municipio -> muni_nomb }}</option>
                    @else
                        <option value="{{ $municipio -> muni_codi }}">{{ $municipio -> muni_nomb }}</option>
                    @endif
                @endforeach
            </select>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('comunas.index') }}">Cancelar</a>
          </div>
      </form>
</body>
</html>