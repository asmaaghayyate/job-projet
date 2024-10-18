@extends('errors::minimal')

@section('title', __('Page non trouvée'))
@section('message')
<h1>404</h1>
    <h2>Désolé, la page que vous recherchez est introuvable.</h2>
    <p>Il se peut que la page ait été supprimée, renommée, ou qu'elle ne soit plus disponible.</p>
    <p><a href="{{ url('/') }}">Retour à la page d'accueil</a></p>
@endsection
