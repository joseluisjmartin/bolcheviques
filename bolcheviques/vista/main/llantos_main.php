<audio src="bolcheviques/sfx/x.wav" autoplay="autoplay" type="audio/wav" >
  Your browser does not support the audio tag.
</audio>
<article class='contenido menu'>Para llorar por favor haga login o no sabremos quien llora</article>
<?php
  if(isset($_SESSION['user'])) {
    $autor=$_SESSION['user'];
  echo "
  <article class='contenido menu'>
  <span>Para actualizar y borrar usar el selector. Solo puedes cambiar o borrar mensajes tuyos. ATENCION si actualizas rellena titulo y texto</span>
  <form class='anchomax' action='index.php?pg=llantos&aut={$autor}' method='post' name='publicar'>
    <section>
      <p><textarea type='text' name='texto' rows='7' cols='70'></textarea></p>
      <p><input type='submit' name='accion' value='publicar'/></p>
    </section>
    <section>
      <p class='lefted'>
      <select name='id'><option></option>";
      foreach($mensajes->getMensajes() as $noticia){
        if($noticia['autor'] === $_SESSION['user'] || $_SESSION['user'] === 'admin'){
          echo "<option value='{$noticia['mensajes_id']}'>{$noticia['mensajes_id']}-{$noticia['fecha']}</option>";
        }
 		  }
      echo "</select></p>
      <p class='lefted'><input type='submit' name='accion' value='actualizar'/></p>
      <p class='lefted'><input type='submit' name='accion' value='borrar'/></p>
    </section>
  </form>
  </article>";
  }
     foreach($mensajes->getMensajes() as $noticia){
			  echo "<article class='contenido llorado'>
              <h3 class='lefted'>{$noticia['autor']}</h3>
              <p class='lefted'>{$noticia['contenido']}</p>
              <p class='fecha lefted'>{$noticia['mensajes_id']})-{$noticia['fecha']}</p>
              </article>";
		  }
?>
