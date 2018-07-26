<?php
        require ("conexion.php");
        $footer=("SELECT * FROM documentos WHERE tipo='application/pdf'");
        $consulta=mysqli_query($con,$footer);
        echo "<marquee bgcolor=#145a32 scrollamount=5>";
        echo "ARCHIVOS DISPONIBLES PARA DESCARGA >>>>>>> ";
        while ($lista=mysqli_fetch_array($consulta)) {
        echo "*$lista[2]:  ";
        echo "$lista[1] - ";

        echo "$lista[6].........";
        }
        
        echo "</marquee>";
        ?>