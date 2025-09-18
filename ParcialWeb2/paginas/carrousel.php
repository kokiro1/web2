<?php
  include_once("../componentes/header.php");
?>
<html>
  
    <main class="carrousel" style="text-align: center;">
      <section class="slider-principal">
        <img
          src="../imgs/s2.jpg"
          alt="Imagen destacada"
          class="imagen-grande"
          id="imagen-grande"
        />
      </section>

      <section class="miniaturas">
        <div class="miniatura">
          <img src="../imgs/s11.jpg" alt="Miniatura 1" />
        </div>
        <div class="miniatura">
          <img src="../imgs/s10.jpg" alt="Miniatura 2" />
        </div>
        <div class="miniatura"><img src="../imgs/s9.jpg" alt="Miniatura 3" /></div>
        <div class="miniatura"><img src="../imgs/s8.jpg" alt="Miniatura 4" /></div>
        <div class="miniatura"><img src="../imgs/s7.jpg" alt="Miniatura 5" /></div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </main>

    <script>
      const secciones = document.querySelectorAll("main section");

      const mostrar = (elemento) => {
        const top = elemento.getBoundingClientRect().top;
        const alturaPantalla = window.innerHeight;
        if (top < alturaPantalla - 100) {
          elemento.classList.add("visible");
        }
      };

      window.addEventListener("scroll", () => {
        secciones.forEach(mostrar);
      });

      secciones.forEach(mostrar);

      const imagenGrande = document.getElementById("imagen-grande");
      const miniaturas = document.querySelectorAll(".miniatura img");

      miniaturas.forEach((miniatura) => {
        miniatura.addEventListener("click", () => {
          imagenGrande.src = miniatura.src;
          imagenGrande.alt = miniatura.alt;
        });
      });
    </script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
</html>

<?php
  include_once("../componentes/footer.php");
?>