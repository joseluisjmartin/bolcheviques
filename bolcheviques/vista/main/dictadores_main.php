<section class="contenido" >
  <?php
  if(isset($_SESSION['admin'])) {
  echo "<form action='index.php?pg=actualizar' method='post' name='actualizar'>
            <p><input type='submit' value='Actualizar datos'/></p>
          </form>";
  }
  if(isset($_GET['msg'])){
    echo "<p>{$_GET['msg']}</p>";
  }
  ?>
  <article>
    <section class="desc">
      <h1>CaraDCoco</h1>
    <p>
      1 a O y golem de delantero, una defensa implacable como la roca
       y si no tienen suficiente... que le pregrunten por su ballesta
    </p>
  </section>
  <img class="desc" src="bolcheviques/img/golem.png" />
  </article>
</section>
