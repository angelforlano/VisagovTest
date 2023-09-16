<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <h1>{{ __('messages.welcome') }}</h1>
            <a class="navbar-brand" href="#">Libros App</a>
        </div>
        <ul>
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
            <a href="{{ LaravelLocalization::getLocalizedURL('es') }}">Español</a>
        </ul>
    </nav>

    <div>
        <a href="/libro/create" class="btn btn-primary">Crear Nuevo Libro</a>
    </div>

    <div>
        <ul class="nav nav-tabs vertical-tabs" role="tablist">
            <li>
                <a class="nav-link" href="#">VisaGov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab"
                    aria-selected="true">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab"
                    aria-selected="false">Contacto</a>
            </li>
        </ul>
    </div>

    <div class="card-body">
        <div class="tab-wrapper">
            <div class="dm-tab tab-horizontal">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                        <h1>Lista de Libros</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Autor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($libros as $libro)
                                    <tr>
                                        <td>{{ $libro->id }}</td>
                                        <td>{{ $libro->title }}</td>
                                        <td>{{ $libro->author }}</td>
                                        <td>
                                            
                                            <form action="{{ route('libro.destroy', $libro->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">{{ __('messages.delete_btn') }}</button>
                                            </form>

                                            <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-primary">{{ __('messages.edit_btn') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                        <h2>Contacto</h2>
                        <form action="/contacto" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input name="name" type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="razon" class="form-label">Razón de Contacto</label>
                                <textarea name="message" class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>