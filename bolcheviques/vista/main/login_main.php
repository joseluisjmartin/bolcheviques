<section class='contenido' >
  <form action="index.php?pg=cuentas" method="post" name="formulario">
    <p><label>Usuario: </label><input type="text" name="user"/></p>
    <p><label>Contraseña: </label><input type="password" name="pass"/></p>
    <p><input type="submit" value="Entrar"/></p>
  </form>
  <p><?php if(isset($_GET['fail'])){
      echo $_GET['fail'];
    } ?>
  </p>
</section>
