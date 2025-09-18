<?php
  include_once("../componentes/header.php");
?>


  <main>
    
      <section class="productos">
        <h2> Nuestros <span style="background-color: #35920b">Productos</span> </h2>
        <div class="lista-productos">
          <div class="caja">
            <div class="texto-superpuesto0">SANDWICHES</div>
            <img src="../imgs/s1.jpg" alt="Sandwich principal sección sandwiches" />
          </div>
          <div class="caja">
            <div class="texto-superpuesto1"><a href="/html/carrousel.html"></a>PROMOCIONES</div>
            <img src="../imgs/s2.jpg" alt="Sandwich secundario sección carrousel" />
          </div>
          <div class="caja">
            <div class="texto-superpuesto2">UBICACIONES</div>
            <img src="../imgs/s3.jpg" alt="Sandwich terciario sección ubicaciones" />
          </div>
          <div class="caja">
            <div class="texto-superpuesto3">COMUNIDADES</div>
            <img src="../imgs/s4.jpg" alt="Cuarto Sandwich sección comunidades" />
          </div>
        </div>
      </section>

      <section class="nosotros">
        <div class="imagen-nosotros">
          <img src="../imgs/local.jpg" alt="" />
        </div>
        <div class="texto-nosotros">
          <h3>Acerca de <span style="background-color: #35920b">Nosotros</span></h3>
          <p>
            Subway es una cadena de comida rápida
            <span style="background-color: #35920b">especializada</span> en sandwiches,
            nos <span style="background-color: #35920b">destacamos por la frescura y calidad</span> de nuestra materia prima, tratamos de dar siempre la mejor experiencia a nuestros clientes,
            <span style="background-color: #35920b">fundada</span> el 28 de Agosto de 1965 por Fred De Luca y Peter Buck en Bridgeport, Connecticut, USA, con más de 41,600 sucursales en todo el mundo, nos hemos convertido en una de las cadenas de comida rápida
            <span style="background-color: #35920b">más grandes del mundo.</span>
          </p>
        </div>
      </section>
      </section>

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

      const imagenes = [
        "/imgs/s5.jpg",
        "/imgs/s6.jpg",
        "/imgs/s7.jpg",
        "/imgs/s8.jpg",
      ];
      let indice = 0;
      const imagenSlider = document.getElementById("imagen-slider");

      function mostrarImagen() {
        imagenSlider.classList.add("fade");
        setTimeout(() => {
          imagenSlider.src = imagenes[indice];
          imagenSlider.classList.remove("fade");
        }, 200);
      }
      function siguiente() {
        indice = (indice + 1) % imagenes.length;
        mostrarImagen();
      }
      function anterior() {
        indice = (indice - 1 + imagenes.length) % imagenes.length;
        mostrarImagen();
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
  include_once("../componentes/footer.php");
?>