<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nuevo Municipio</title>
</head>
<body>
    <h1>Agregar Municipio</h1>
    <form method="POST" action="{{route('municipios.store')}}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Código Municipio</label>
          <input type="text" class="form-control" id="id" aria-describedby="idlHelp" name="id">
          <div id="idlHelp" class="form-text">Id del Municipio</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nombre Municipio</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="idlHelp"
            placeholder="Municipio nombre">
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Departamento</label>
            <select class="form-select" id="municipality" name="code" required>
                <option selected disabled value="">Seleccione una...</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento -> depa_codi}}">{{ $departamento -> depa_nomb }}</option>
                @endforeach
            </select>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('municipios.index') }}">Cancelar</a>
          </div>
      </form>
</body>
</html>