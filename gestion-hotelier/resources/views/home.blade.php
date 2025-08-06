<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ADH HOTEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #eaf6fd;">

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5">
        <a class="navbar-brand" href="#">ADH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Connexion</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inscription</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
            <button class="btn btn-warning text-dark">Offres spéciales</button>
        </div>
    </nav>

    <!-- Titre principal -->
    <div class="text-center my-4">
        <h2>ADH HOTEL</h2>
    </div>

    <!-- Carrousel -->
    <div class="container mb-4">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('images/chambre.jpg') }}" class="img-fluid" alt="Chambre">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/reception.jpg') }}" class="img-fluid" alt="Réception">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/jardin.jpg') }}" class="img-fluid" alt="Jardin">
            </div>
        </div>
    </div>

    <!-- Formulaire de réservation -->
    <div class="container mb-5">
        <form class="bg-white p-4 rounded shadow-sm" method="GET" action="{{ route('search.rooms') }}">
            <div class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label for="date" class="form-label">Quand souhaitez-vous partir</label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="people" class="form-label">Qui vous accompagne</label>
                    <input type="number" id="people" name="people" class="form-control" value="2" min="1" required>
                </div>
                <div class="col-md-3">
                    <label for="promo" class="form-label">Code promotionnel</label>
                    <input type="text" id="promo" name="promo" class="form-control" placeholder="Entrez le code">
                </div>
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn btn-warning">Rechercher</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
