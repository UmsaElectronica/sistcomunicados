<?php
  require("funciones/conexion.php");
    $sql1=("SELECT * FROM fondos");
    $query1=mysqli_query($con,$sql1);
    if ($query1 == FALSE) 
    {
        echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta";
    }
    else 
    {
        $Arreglo = mysqli_fetch_array($query1);

        switch ($Arreglo[1]) {
            case 'electronica':

            include("fondodepantalla/electronica.php");
                break;
            
            case 'invierno':

            include("fondodepantalla/invierno.php");
                break;
            
            case 'primavera':

            include("fondodepantalla/primavera.php");
                break;

            case 'telecomunicacion':
            
            include("fondodepantalla/telecomunicaciones.php");
                break;

            case 'redes':
            
            include("fondodepantalla/redes.php");
                break;
                
            case 'web':
            
            include("fondodepantalla/web.php");
                break;
            case 'nuevo':
            
            include("fondodepantalla/nuevo.php");
                break;
            default:
            include("fondodepantalla/electronica.php");
                break;
        }

    }
  ?>  
  <main>
  <font face="prueba">
      <h1 style="background-color: #145a32; color:#ecf0f1;">COMUNICADOS ELECTRÓNICA</h1></font>
      <span id="liveclock" style="position:absolute;right:15px;top:7px;"></span>
      <div class="contenedor"> 
        <div class="cuadro">
        <div class="pantalla1">
        <div class="fila">
          <div class="columna-1">
            <div class="fila">
                <div class="columna-1">
                    <div class="largo">
                        <div id="variosasc" class="sldvarasc">
                            <?php
                            require("funciones/actualizar.php");
                            ?>
                        </div>
                    </div>
                    <div class="pequenio">
                    <div id="clasesasc" class="sldclasasc">
                    
                        </div>
                    </div>
                    
                    <div class="pequenio">
                        <div id="examasc" class="sldexamasc">
                        
                        </div>
                    </div>
                </div>
                <div class="columna-1">
                    <div class="pequenio">
                        <div id="examrdm" class="sldexamrdm">
                        
                        </div>
                    </div>
                    <div class="largo">
                   
                        <div id="imgasc" class="sldimgasc">
                            
                        </div>
                    </div>
                   <div class="pequenio">
                        <div id="clasesrdm" class="sldclasrdm">                          
                        </div>
                    </div>      
                </div>
            </div>
          </div>
          <div class="columna-1">
            <div class="normal">
                <div id="imgdesc" class="sldimgdesc"> 
                </div>
                </div>
            <div class="fila">
                <div class="columna-1">
                    <div class="largo">
                        <div id="variosdesc" class="sldvardesc"></div>
                    </div>
                </div>
                <div class="columna-1">
                    <div class="pequenio">
                        <div id="clasesdesc" class="sldclasdesc">
                        
                        </div>
                    </div>
                    <div class="pequenio">
                        <div id="examdesc" class="sldexamdesc">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>   
      </div> <!--pantalla1-->

      <div id="mp4" class="pantalla2">
        <video src="" id="audioPlayer" width="1366"></video>
            <ul id="playlist">
                <?php
                require("funciones/conexion.php");
                            $sql=("SELECT * FROM videos ORDER BY idvideo ASC");
                            $query=mysqli_query($con,$sql);
                            if ($query == FALSE) {
                    echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta";
                } else {
                    $Rows = mysqli_num_rows($query);
                                                              
                    for ($i=0; $i<$Rows; $i++) {
                        $Auto = mysqli_fetch_array($query);
                        if ($i == 0) {
                            echo '<li class="videoactivo">';
                        } else {
                            echo '<li>';
                        }
                        echo '<a href="comunicados/' . $Auto[1] .'"/>';
                        echo '</li>';//ITEM

                    }//FOR
                    
                }//ELSE
                ?>

            </ul>

      </div>
      </div>
      <div id="piedepagina" class="footer"> 
        </div> 
    </div> <!--contenedor-->
   </main>  

        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript">
        audioPlayer();    
        </script>
        <script type="text/javascript">
        
            $(document).ready(function(){
                setTimeout(function(){
                $("#variosasc").load("funciones/variosasc.php")
                $("#variosdesc").load("funciones/variosdesc.php")
                $("#clasesasc").load("funciones/clasesasc.php")
                $("#clasesdesc").load("funciones/clasesdesc.php")
                $("#clasesrdm").load("funciones/clasesrdm.php")
                $("#examasc").load("funciones/examasc.php")
                $("#examdesc").load("funciones/examdesc.php")
                $("#examrdm").load("funciones/examrdm.php")
                $("#imgasc").load("funciones/imgasc.php")
                $("#imgdesc").load("funciones/imgdesc.php")
                $("#piedepagina").load("funciones/footer.php")
                
                },200);
                setInterval(function(){
                $("#variosasc").load("funciones/variosasc.php")
                $("#variosdesc").load("funciones/variosdesc.php")
                },306000);
                });
            $(document).ready(function(){
                setInterval(function(){
                $("#clasesasc").load("funciones/clasesasc.php")
                $("#clasesdesc").load("funciones/clasesdesc.php")
                $("#clasesrdm").load("funciones/clasesrdm.php")
                },170000);
                });
            $(document).ready(function(){
                setInterval(function(){
                $("#examasc").load("funciones/examasc.php")
                $("#examdesc").load("funciones/examdesc.php")
                $("#examrdm").load("funciones/examrdm.php")
                },170000);
                });
            $(document).ready(function(){
                setInterval(function(){
                $("#imgasc").load("funciones/imgasc.php")
                $("#imgdesc").load("funciones/imgdesc.php")
                
                },255000);
                });
            $(document).ready(function(){
                setInterval(function(){
                $("#piedepagina").load("funciones/footer.php")
                },1800000);
                 $(document).ready(function(){
                    var t=setTimeout(function(){myFunction();},1);
        var t=setInterval(function(){myFunction();},898000);
        }); 
        
        function myFunction() {
            var x = document.getElementById('audioPlayer');
                if (x.muted === true) {
            setTimeout(function(){x.muted = false; x.play();},600000);  
                } else {
                x.muted = true;
                x.pause();
                }
                }
                });
        </script>
    </body>
  
</html>


