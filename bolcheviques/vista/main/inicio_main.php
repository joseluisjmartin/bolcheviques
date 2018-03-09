<audio src="bolcheviques/sfx/supercell_jingle.wav" autoplay="autoplay" type="audio/wav" >
  Your browser does not support the audio tag.
</audio>
<?php
  if(isset($_SESSION['admin'])) {
  echo "
  <article class='contenido menu'>
  <span>Para actualizar y borrar usar el selector. ATENCION si actualizas rellena titulo y texto, si no se guardaran en blanco.</span>
  <form class='anchomax' action='index.php?pg=inicio' method='post' name='publicar'>
    <section>
      <p><label>Titulo: </label><input type='text' name='titulo'/></p>
      <p><textarea type='text' name='texto' rows='4'></textarea></p>
      <input type='hidden' name='MAX_FILE_SIZE' value='30000' />
      <p><input name='fichero_usuario' type='file' /></p>
      <p><input type='submit' name='accion' value='publicar'/></p>
    </section>
    <section>
      <p class='lefted'>
      <select name='id'>
        <option></option>";
      foreach($noticias->getNoticias() as $noticia){
 			  echo "<option value='{$noticia['noticias_id']}'>{$noticia['noticias_id']}-{$noticia['fecha']}-{$noticia['titulo']}</option>";
 		  }
      echo "</select></p>
      <p class='lefted'><input type='submit' name='accion' value='actualizar'/></p>
      <p class='lefted'><input type='submit' name='accion' value='borrar'/></p>
    </section>
  </form>
  </article>";
  }
     foreach($noticias->getNoticias() as $noticia){
			  echo "<article class='contenido'>
                <span><b>{$noticia['titulo']}</b></span>
                <p>{$noticia['contenido']}</p>
                <p>{$noticia['adjunto']}</p>
                <p class='fecha'>{$noticia['fecha']}</p>
              </article>";
		  }
?>
