<header class="container">
  <div class="logo">
    <a href="AutorIndex.php"><p>CONCILIORG</p></a>
  </div>
  <nav>
    <a href="AutorIndex.php" class="item-options">Inicio</a>
    <a href="" class="item-options">Inicio Sesión</a>
    <a href="" class="item-options">Contacto</a>
    <a href="" class="item-options">Contacto</a>
    <a href="../Conexiones/CierreSesion/logout.php" class="item-options">Cerrar Sesion</a>
  </nav>
</header>

<script type="text/javascript">
  window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
  })
</script>
