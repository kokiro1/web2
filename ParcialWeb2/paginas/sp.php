<?php
include_once("../componentes/header.php");
?>
    <main class="producto" style="text-align: center;">
      <section class="producto-detalle">
        <div class="contenedor-detalle">
          <div class="imagen-producto">
            <img src="../imgs/s7.jpg" alt="Imagen principal"/>
          </div>
          <div class="info-producto">
            <h2>
              SABAI de <span style="background-color: #35920b">30CM</span>
            </h2>
            <p>
              Receta originaria de Tailandia, incluye queso,
              <span style="background-color: #35920b">curry amarillo</span>,
              lima, mezcla <span style="background-color: #35920b">SATAY</span>,
              <span style="background-color: #35920b"
                >salsa de soja y un medallón de pollo</span
              >
              con un pan especiado de oregano y queso. Ideal para un almuerzo
              rápido y <span style="background-color: #35920b">sabroso.</span>
            </p>
            <button>Comprar</button>
          </div>
        </div>
      </section>

      <section class="relacionados">
        <h3>También te puede interesar:</h3>
        <div class="lista-relacionados">
          <div class="item-relacionado">
            <img src="../imgs/s8.jpg" alt="Sandwich de Pollo" />
            <p>
              Sandwich de <span style="background-color: #35920b">Pollo</span>
            </p>
            <button>Ver más</button>
          </div>
          <div class="item-relacionado">
            <img src="../imgs/s9.jpg" alt="Sandwich Vegetariano" />
            <p>
              Sandwich
              <span style="background-color: #35920b">Vegetariano</span>
            </p>
            <button>Ver más</button>
          </div>
          <div class="item-relacionado">
            <img src="../imgs/s6.jpg" alt="Sandwich de Atún" />
            <p>
              Sandwich de <span style="background-color: #35920b">Atún</span>
            </p>
            <button>Ver más</button>
          </div>
        </div>
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
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
include_once("../componentes/footer.php");
?>
