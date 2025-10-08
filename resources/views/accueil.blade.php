@extends('layouts.app')

@section('title', 'StuddyBuddy - Accueil')
@section('header')
<h1>Bienvenue sur StudyBuddy 📚</h1>
<p>Transformez vos notes en fiches de révision interactives et efficaces !</p>
@endsection

@section('content')
<section>
  <h2>Ce que vous pouvez faire :</h2>
  <ul>
    <li>📝 Créer vos fiches de révision à partir de vos cours</li>
    <li>🤖 Utiliser l’IA pour générer des résumés et points clés</li>
    <li>🎯 Tester vos connaissances avec des QCM et questions ouvertes</li>
    <li>🔗 Partager vos fiches avec vos camarades</li>
    <li>📊 Suivre votre progression et consulter l’historique</li>
  </ul>
</section>

<!-- Avantages -->
<section>
  <h2>Pourquoi utiliser StudyBuddy ?</h2>
  <ul>
    <li>Organiser vos fiches par matière et chapitre 📚</li>
    <li>Personnaliser les prompts pour des QCM sur mesure ✏️</li>
    <li>Partager facilement vos ressources avec vos camarades 👥</li>
  </ul>
</section>

@endsection