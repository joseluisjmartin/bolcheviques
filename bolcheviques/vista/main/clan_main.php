<article class='contenido'>
  <nav class='rankings'>
    <h3>Listas y Rankings</h3>
    <ul>
      <a><li>Nuestro Clan</li></a>
      <a><li>Top 10 donaciones</li></a>
      <a><li>Bottom 10 donaciones</li></a>
      <a><li>Top 10 coronas</li></a>
      <a><li>Bottom 10 coronas</li></a>
      <a><li>Top 10 copas</li></a>
      <a><li>Bottom 10 copas</li></a>
    </ul>
  </nav>
  <section class="ficha">
    <?php echo "
    <h1>{$bolcheviques->name} - id: {$bolcheviques->tag}</h1>
    <p>{$bolcheviques->description}. </p>
    <h4>Datos del Clan:</h4>
    <table>
    <tr>
      <th>Pais:</th><td>{$bolcheviques->location->name}</td>
      <th>Puntos del Clan:</th><td>{$bolcheviques->score}</td>
      <th>Donaciones Totales:</th><td>{$bolcheviques->donations}</td>
    </tr>
    <tr>
      <th>Nº de miembros actuales:</th><td>{$bolcheviques->memberCount}</td>
      <th>Acceso:</th><td>{$bolcheviques->type}</td>
      <th>Copas requeridas:</th><td>{$bolcheviques->requiredScore}</td>
    </tr>
    </table>
    <h4>Estado del cofre del Clan:</h4>
    <table>
      <tr><th>Estado</th><th>Nivel</th><th>Coronas conseguidas</th><tr>
      <tr><td>{$bolcheviques->clanChest->status}</td><td>{$bolcheviques->clanChest->level}/{$bolcheviques->clanChest->maxLevel}</td><td>{$bolcheviques->clanChest->crowns}</td><tr>
    </table>";?>
  </section>
  <table>
  <tr>
    <th>Nombre de guerra</th><th>Grado de Enchufe</th>
    <th>Donaciones durante la semana</th><th>Coronas del cofre</th>
  </tr>
  <?php
  foreach ($bolcheviques->members as $member) {
    echo "
    <tr>
    <td>{$member->name}</td><td>{$member->role}</td>
    <td>{$member->donations}</td><td>{$member->clanChestCrowns}</td>
    </tr>";
  }
  ?>
  </table>
</article>
