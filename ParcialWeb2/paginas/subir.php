<?php
include_once("../componentes/header.php");
?>
<html>
<main>
    <h2 class="scroll-animado">Subir Imagen</h2>
    <form method="POST" action="procesar.php" enctype="multipart/form-data" class="scroll-animado">
        <input type="file" name="imagen" required>
        <button type="submit" style="text-align: center;">Subir imagen</button>
    </form>
</main>

<script>
  const elementosAnimados = document.querySelectorAll(".scroll-animado");
  const mostrarElemento = (elemento) => {
    const posicion = elemento.getBoundingClientRect().top;
    const alturaPantalla = window.innerHeight;
    if (posicion < alturaPantalla - 100) {
      elemento.classList.add("visible");
    }
  };
  window.addEventListener("load", () => {
    elementosAnimados.forEach(mostrarElemento);
  });
  window.addEventListener("scroll", () => {
    elementosAnimados.forEach(mostrarElemento);
  });
</script>

<style>
  .scroll-animado {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }
  .scroll-animado.visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

<?php
include_once("../componentes/footer.php");
?>