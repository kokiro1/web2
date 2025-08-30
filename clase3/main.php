<?php
    include_once("header.php");
?>

<body>
    <table>
        <caption>Notas</caption>
        <thead>
            <tr>
                <th>Alumno/a</th>
                <th>Parcial I</th>
                <th>Parcial II</th>
                <th>Rec Parcial I</th>
                <th>Rec Parcial II</th>
                <th>Final</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombre = htmlspecialchars($_REQUEST["nombre"]);
                $p1 = htmlspecialchars($_REQUEST["p1"]);
                $p2 = htmlspecialchars($_REQUEST["p2"]);
                $rp1 = htmlspecialchars($_REQUEST["rp1"]);
                $rp2 = htmlspecialchars($_REQUEST["rp2"]);
                $final = htmlspecialchars($_REQUEST["final"]);
            }
            print "<tr>
                    <td>$nombre</td>
                    <td>$p1</td>
                    <td>$p2</td>
                    <td>$rp1</td>
                    <td>$rp2</td>
                    <td>$final</td>
                    </tr>";
            ?>
            <tr>
                <td>Amoroso</td>
                <td>10</td>
                <td>10</td>
                <td>-</td>
                <td>-</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Guerri</td>
                <td>4</td>
                <td>8</td>
                <td>-</td>
                <td>-</td>
                <td>7</td>
            </tr>
            <tr>
                <td>Ramirez</td>
                <td>10</td>
                <td>10</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
            </tr>
            <tr>
                <td>Limeres</td>
                <td>2</td>
                <td>7</td>
                <td>7</td>
                <td>-</td>
                <td>8</td>
            </tr>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
        <form action="<?php print $_SERVER["PHP_SELF"] ?>" method="post">
            <div>
                <label for="nombre">Nombre Alumno</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="p1">Parcial 1</label>
                <input type="number" name="p1" id="p1">
            </div>
            <div>
                <label for="p2">Parcial 2</label>
                <input type="number" name="p2" id="p2">
            </div>
            <div>
                <label for="rp1">Rec P1</label>
                <input type="number" name="rp1" id="rp1">
            </div>
            <div>
                <label for="rp2">Rec P2</label>
                <input type="number" name="rp2" id="rp2">
            </div>
            <div>
                <label for="final">Final</label>
                <input type="number" name="final" id="final">
            </div>

                    <button type="submit">Cargar datos</button>
    </form>
</body>
<?php
    include_once("footer.php");
?>