@extends('layout')

@section('content')
    <div class="container">
        <div class="w-75 border pb-5 m-auto mt-5 rounded position-relative" style="height: 70vh">
            <h2 class="text-center text-decoration-underline alert alert-info">Plateforme de Gestion des Examens</h2>
            <p class="px-2">
                Bienvenue sur notre plateforme de gestion des examens, un outil complet conçu pour faciliter la gestion des étudiants, des cours et des examens. Notre application offre une interface intuitive et des fonctionnalités robustes pour assurer une expérience utilisateur fluide et efficace.
            </p>
            <p class="px-2">
                Notre plateforme permet aux administrateurs et aux enseignants de gérer facilement les informations des étudiants, les programmes de cours, les horaires des examens et la publication des résultats. Grâce à notre système centralisé, toutes les données sont accessibles en un seul endroit, ce qui simplifie la coordination et la communication entre les différentes parties prenantes.
            </p>
            <p class="px-2">
                Les principales fonctionnalités de notre application incluent :
            </p>
            <ul class="px-4">
                <li><h6>Gestion des étudiants</h6>Inscription des étudiants, suivi des performances académiques, et gestion des profils individuels.</li>
                <li><h6>Gestion des cours</h6>Création et modification des programmes de cours, assignation des enseignants, et organisation des horaires.</li>
                <li><h6>Planification des examens</h6>Configuration des calendriers d'examens, attribution des salles, et gestion des surveillants.</li>
                <li><h6>Publication des résultats</h6>Saisie des notes, calcul des moyennes, et diffusion sécurisée des résultats aux étudiants.</li>
            </ul>
          
            <div class="w-100 d-flex justify-content-end position-absolute bottom-0 ">
                <a href="{{ route('exams.results.show') }}" class="btn btn-info">Consulter votre résultat</a>
            </div>
        </div>
    </div>
@endsection

