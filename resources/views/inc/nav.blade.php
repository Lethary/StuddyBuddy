<nav>

  <ul>
    <li><strong>Studdy Buddy</strong></li>
  </ul>
  @auth
  <ul>
    <li><a href="/">Accueil</a></li>
    <li><a href="/fiche">Mes fiches</a></li>
    <li><a href="/reviser">Réviser</a></li>
    <li><a href="/partager">Partager</a></li>
    <li>
      <button class="contrast">
        <a href="">Déconnexion</a>
      </button>
    </li>
  </ul>
  @else
  <ul>
    <li>
      <button class="contrast">
        <a href="">Connexion</a>
      </button>
    </li>
  </ul>
  @endauth
  </ul>
</nav>