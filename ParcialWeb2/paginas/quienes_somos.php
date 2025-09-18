<?php
  include_once("../componentes/header.php");
?>
<main>
    <h2 style="text-align: center;">
      En Subway <span class="scroll-animado" style="background-color: #35920b ;">somos una marca global dedicada a ofrecer sándwiches frescos,
      </span> personalizados y preparados al instante, <span class="scroll-animado" style="background-color: #35920b;">con ingredientes de calidad y opciones para todos los gustos.</span> Desde nuestros inicios, buscamos brindar una experiencia rápida, saludable y deliciosa, donde cada persona pueda elegir exactamente lo que quiere comer.

Con presencia en <span class="scroll-animado" style="background-color: #35920b;">todo el mundo y miles de locales abiertos, nos destacamos por ser una alternativa flexible y accesible en el sector de la comida rápida.</span> Creemos en el valor de la frescura, la variedad y la atención cercana, adaptándonos siempre a las preferencias de cada cliente.

Nuestro compromiso es simple: ofrecer <span class="scroll-animado" style="background-color: #35920b;">comidas sabrosas, nutritivas y personalizadas,</span> en un ambiente cómodo y amigable, para que cada visita a Subway sea <span class="scroll-animado" style="background-color: #35920b;">una experiencia única.</span>
    </h2>
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
<?php
  include_once("../componentes/footer.php");
?>