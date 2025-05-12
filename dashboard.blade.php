<!doctype html>
<html lang="fr">
<head>
    <title>MIO - Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">MIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu"
            aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/fiscalite') }}">Fiscalite</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/developpementweb') }}">Developpement Web</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('/basededonnees') }}">Base de donnees</a></li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i> Rechercher</button>
            </form>
        </div>
    </nav>
    <div class="container">
    <h1> PLATEFORME DE COURS MIO L3 </h1>
                <div style="height: 75vh; border: 1px solidrgb(228, 96, 25); box-shadow: 0 0 10px hsla(188, 93.60%, 49.20%, 0.96);">
                <img src="{{asset('image/UIDT.jpeg') }}" alt="image UIDT" width="10000%" height="auto" display="block" class="img-fluid rounded mb-3 hover-animate/">   
        
                </form>
            </div>
        </nav>
    </div>
    <div>

    <!-- Bootstrap & jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
