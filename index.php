<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./coreFRONTx/head/analitycs.html'); ?>
  <?php include ('./coreFRONTx/head/cabecera.html'); ?>
  <?php include ('./coreFRONTx/head/estilos.html'); ?>
  <?php include ('./coreFRONTx/head/java.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('./coreFRONTx/header/nav/menu-superior/menu.html'); ?>
      <?php include ('../lib18/coreFRONTx/header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./coreFRONTx/header/begajoso/menu-pegajoso.html'); ?>

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
      <?php include ('./coreFRONTx/main/edosfinancieros/edosfinancieros.html'); ?>
      <a id="presupuestales"></a>
      <br />
      <br />
      <br />
      <?php include ('./coreFRONTx/main/edospresupuestales/edospresupuestales.html'); ?>
      <a id="cuentapublica"></a>
      <br />
      <br />
      <br />
      <?php include ('./coreFRONTx/main/cuentapublica/armonizacioncontable.html'); ?>
      <a id="indicadores"></a>
      <br />
      <br />
      <br />
      <?php include ('./coreFRONTx/main/Indicadores-de-resultados/indicadores.html'); ?>


      <br />
      <br />
      <a name="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('./coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="./coreFRONTx/xefectos/boton-arriba/script.js"></script>

</body>

</html>
