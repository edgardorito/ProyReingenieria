<?php
  session_start();
   if(!isset($_SESSION['usuario'])){
    header('Location: login.php' );
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cursos</title>

    <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
       <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Cursos</a>
    </div>
  </nav>
</head>
<body>

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     

    <div class="row">
    <form class="col s12" action="conexioncurso.php" method="POST" >
      <div class="row">
        <div class="input-field col s12">
          <input type="text" class="validate" name="materia">
          <label >Materia</label>
        </div>
        <div class="input-field col s12">
          <input type="text" class="validate" name="cuatri">
          <label>Cuatrimestre</label>
        </div>
        <div class="input-field col s12">
          <input type="text" class="validate" name="grupo">
          <label>Grupo</label>
        </div>
        <div class="input-field col s12">
          <input type="text" class="validate" name="horario">
          <label>Horario</label>
        </div>
        <?php    
          
          echo ' <div class="input-field col s12" style="display:none"><input type="text" value="'. $_SESSION['id'].'" class="validate" name="id"> </div>';
        ?>        
       
      </div>
      <div class="col s12">
      
      <!--<input type="submit" name="Enviar" id="enviar-btn"">  -->
       <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i>
                </button>
        
      </div>  
       
    
    </form>
  </div>



</body>
</html>