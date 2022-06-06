<header class="container">
  <div class="logo">
    <a href="../index.php"><p>CONCILIORG</p></a>
  </div>
  <nav>
    <a href="../index.php" class="item-options">Inicio</a>
    <a href="Sign_up.php" class="item-options">Registrar</a>
    <a href="Login.php" class="item-options">Inicio Sesión</a>
    <!--<a href="" class="item-options">Contacto</a>
    <a href="" class="item-options">Contacto</a>
    <a href="" class="item-options">Contacto</a>-->
  </nav>
</header>

<script type="text/javascript">
  window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
  })
</script>
