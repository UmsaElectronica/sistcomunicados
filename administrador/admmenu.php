 <div class="navbar">
    <div class="navbar-inner">
    <ul class="nav">
               <li><a href="admin.php">Administrador de Usuarios</a></li> 
               <li><a href="../admusuarios.php">Registro de Comunicados</a></li> 
               <li><a href="aulas.php">Actualizar Aulas</a></li> 
               <li><a href="fondo.php">Temas de Fondo</a></li> 
               <li><a href="subirvideo.php">Videos</a></li> 
              </ul>
            <ul class="nav pull-right">
            <li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
            <li><a href="../funciones/desconectar.php"> Cerrar Sesión </a></li>       
            </ul>
            </div>
    </div>    
  <div class="navbar">
          <div class="container">
           <div class="navbar-collapse">
            <ul class="nav">
            <li><a href="admregExam.php" style="background-color: #0066cc; font-size: 12pt; color:#ffffff;">Plantilla de Examenes</a></li>
            <li><a href="admregClas.php" style="background-color: #009900; font-size: 12pt; color:#ffffff;">Plantilla de Clases</a></li>
            <li><a href="admregVar.php" style="background-color: #ff9900; font-size: 12pt; color:#ffffff;">Plantilla Otras Actividades</a></li>
            <li><a href="admelimAct.php" style="background-color: #ff3333; font-size: 12pt; color:#ffffff;">Eliminar Actividades</a></li>
             <li><a href="admsubirarchivos.php" style="background-color:#EB2fff;"><img src="../images/upload.png" width='20' height='20'></a></li>           
            </ul>             
            </div>
          </div>
        
      </div>