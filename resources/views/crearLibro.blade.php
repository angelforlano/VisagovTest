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
        <ul class="nav nav-tabs vertical-tabs" role="tablist">
            <li>
                <a class="nav-link" href="/">VisaGov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/" >Libros</a>
            </li>
        </ul>
    </div>

    <div class="card-body">
        <div class="tab-wrapper">
            <div class="dm-tab tab-horizontal">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                    <h2>Editar Libro</h2>

                        <form action="{{ route('libro.create') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Título</label>
                                <input name="title" type="text" class="form-control" id="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Autor</label>
                                <input name="author" type="text" class="form-control" id="author" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Insertar Nuevo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>