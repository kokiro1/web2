<?php
  include_once("../componentes/header.php");
?>


    <main class="contacto">
    <section class="formulario-contacto" style="text-align: center;">
        <h2>Formulario De Contacto</h2>
        
        <form method="POST" action="mostrar_info.php">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            
            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>

      <section class="mapa">
        <h3>Ubicación de la sede central</h3>
        <div class="mapa-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.882719560991!2d-58.43708938477099!3d-34.60989748045901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb77bb29f4b1%3A0x3452f1835e7a8d58!2sAv.%20Rivadavia%202000%2C%20C1033AAR%20CABA%2C%20Argentina!5e0!3m2!1ses-419!2sar!4v1719422871701!5m2!1ses-419!2sar"
            width="100%"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>
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
