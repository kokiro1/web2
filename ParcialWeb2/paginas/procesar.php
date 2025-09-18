<?php
include_once("../componentes/header.php");

if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $nombre_imagen = $_FILES['imagen']['name'];
    $temporal = $_FILES['imagen']['tmp_name'];

    move_uploaded_file($temporal, "../imagenes/" . $nombre_imagen);
?>

<style>
    .contenedor-imagen {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding: 20px;
    }
    .tarjeta-imagen {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.1);
        max-width: 700px;
        text-align: center;
        border: 1px solid #e0e0e0;
    }
    .titulo-imagen {
        color: #2c3e50;
        margin-bottom: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 28px;
        font-weight: 300;
    }
    .imagen-mostrada {
        border: 4px solid #27ae60;
        border-radius: 12px;
        padding: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .boton-volver {
        background: #3498db;
        color: white;
        padding: 14px 30px;
        text-decoration: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-block;
        margin-top: 25px;
        border: none;
        cursor: pointer;
    }
    .boton-volver:hover {
        background: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }
</style>

<div class="contenedor-imagen">
    <div class="tarjeta-imagen scroll-animado">
        <h2 class="titulo-imagen">Imagen Subida Exitosamente</h2>
        
        <img src="../imagenes/<?php echo $nombre_imagen; ?>" class="imagen-mostrada" width="500">
        
        <br><br>
        
        <a href="subir.php" class="boton-volver">
            Subir otra imagen
        </a>
    </div>
</div>

<?php
} else {
    echo '<div class="contenedor-imagen"><div class="tarjeta-imagen scroll-animado"><h2 class="titulo-imagen" style="text-align:center">No se ha subiste nada tovadia</h2><a href="subir.php" class="boton-volver" style="text-align:center">Volver a subir</a></div></div>';
}
?>

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