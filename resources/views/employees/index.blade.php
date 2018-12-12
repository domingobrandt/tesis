<html>
    <head>
        <title>Prueba Tesis @yield('name')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <p>Listado de Empleados</p>
            @foreach($employees as $employee)
            <ol>
                <ul><label>id del empleado:_</label>{{ $employee->id }}</ul>
                <ul><label>Nombre del empleado:_ </label>{{ $employee->name }}</ul>
                    @foreach ($employee->positions as $position)
                        <ul><label>Cargo del Empleado:_</label>{{ $position->name }}</ul>
                    @endforeach
            </ol>
            @endforeach

        </div>
    </body>
</html>




