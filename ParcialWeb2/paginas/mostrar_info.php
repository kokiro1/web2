<?php
    include_once("../componentes/header.php");
?>
<html style="text-align: center;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
} else {
    header("Location: contacto.php");
    exit();
}


$headerFile = "header.php";
if (file_exists($headerFile)) {
    include_once($headerFile);
} else {

    echo '<!DOCTYPE html><html><head><title>Información Recibida</title></head><body>';
}
?>

<h1>Información Recibida</h1>
<div class="info-container">
    <div class="info-item">
        <span class="label">Nombre:</span> <?php echo $name; ?>
    </div>
    <div class="info-item">
        <span class="label">Email:</span> <?php echo $email; ?>
    </div>
    <div class="info-item">
        <span class="label">Asunto:</span> <?php echo $subject; ?>
    </div>
    <div class="info-item">
        <span class="label">Mensaje:</span> <?php echo nl2br($message); ?>
    </div>
</div>
<a href="contacto.php" class="back-link">Volver al formulario</a>

<?php
$footerFile = "footer.php";
if (file_exists($footerFile)) {
    include_once($footerFile);
} else {
    echo '</body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script></html>';
    
}
?>
</html>
<?php
    include_once("../componentes/footer.php");
?>