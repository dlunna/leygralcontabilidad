<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">

      <br />
      <p>Bienvenido al apartado de la ley general de contabilidad gubernamental de la Universidad Politécnica de Pachuca.</p>
      <ul>
        <li><a href="#financieros">Consultar estados financieros</a></li>
        <li><a href="#presupuestales">Consultar estados presupuestales</a></li>
        <li><a href="#cuentapublica">Consultar cuenta pública</a></li>
        <li><a href="#indicadores">Indicadores de resultados</a></li>
      </ul>
      <a id="financieros"></a>
      <br />
      <br />
      <br />
      <?php include ('./dotk/05main/01edosfinancieros/edosfinancieros.html'); ?>
      <a id="presupuestales"></a>
      <br />
      <br />
      <br />
      <?php include ('./dotk/05main/02edospresupuestales/edospresupuestales.html'); ?>
      <a id="cuentapublica"></a>
      <br />
      <br />
      <br />
      <?php include ('./dotk/05main/03cuentapublica/armonizacioncontable.html'); ?>
      <a id="indicadores"></a>
      <br />
      <br />
      <br />
      <?php include ('./dotk/05main/04Indicadores-de-resultados/indicadores.html'); ?>


      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
