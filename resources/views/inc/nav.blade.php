<nav>
  <ul>
    <li><strong>Studdy Buddy</strong></li>
  </ul>
  <ul>
    <li><a href="{{ route('home') }}">Accueil</a></li>
    <li><a href="{{ route('fiche') }}">Mes fiches</a></li>
    <li><a href="{{ route('reviser') }}">Réviser</a></li>
    <li><a href="{{ route('partager') }}">Partager</a></li>
  </ul>
  @auth
    <li>
      <button class="contrast">
        <a href="">Deconnexion</a>
      </button>
    </li>
  @else
    <li>
      <button class="contrast">
        <a href="">Connexion</a>
      </button>
    </li>
  @endauth
  </ul>
</nav>