<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./coreFRONTx/head/cabecera.html'); ?>
  <?php include ('./coreFRONTx/head/estilos.html'); ?>
  <?php include ('./coreFRONTx/head/java.html'); ?>
</head>

<body>

  <header>

    <!-- Logos e imagen de hidalgo -->
    <?php include ('./seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('./coreFRONTx/header/nav/menu-superior/menu.html'); ?>
    </nav>



  </header>

  <main>
    <div class="container marketing">

      <br />
      <?php include ('./coreFRONTx/main/edosfinancieros/edosfinancieros.html'); ?>
      <?php include ('./coreFRONTx/main/edospresupuestales/edospresupuestales.html'); ?>

      <a name="mapadesitio"></a>
      <hr class="featurette-divider">

      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('./coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('./seph/hf/footer.html'); ?>
  </footer>

  <!-- Para dar movimiento al slider de las noticias politicas -->
  <script src="./coreFRONTx/main/prensa/XXXrmbc.js"></script>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="./coreFRONTx/xefectos/boton-arriba/script.js"></script>

</body>

</html>
