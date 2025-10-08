<nav>
  <ul>
    <li><strong>Studdy Buddy</strong></li>
  </ul>
  <ul>
    <li><a href="/">Accueil</a></li>
    <li><a href="/fiche">Mes fiches</a></li>
    <li><a href="/reviser">Réviser</a></li>
    <li><a href="/partager">Partager</a></li>
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