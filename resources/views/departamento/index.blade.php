<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Departamentos</title>

</head>
<body>

    <div class="container">
        <h1>Listado de Departamenots</h1>
        {{-- <a href="{{ route('departamentos.create') }}" class="btn btn-success">Add</a> --}}
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Code</th>
                <th scope="col">Department</th>
                <th scope="col">Country</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($departamentos as $departamento)
              <tr>
                <th scope="row">{{ $departamento -> depa_codi }}</th>
                <td> {{$departamento -> depa_nomb}} </td>
                <td> {{$departamento -> pais_nomb}} </td>
                <td>
                  <span>Actions</span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>

    
    
</body>
</html>