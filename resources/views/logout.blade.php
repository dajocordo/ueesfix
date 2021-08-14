<?php
	session_start();
  if(isset($_SESSION['student'])){
	session_destroy();
	  echo "<script>
         	  alert('Cerraste sesión correctamente');
           	  window.location.href='/index';
        	</script>";

  } elseif(isset($_SESSION['support'])){
	session_destroy();
      echo "<script>
           	  alert('Cerraste sesión correctamente');
           	  window.location.href='/index';
         	</script>";

  } elseif(isset($_SESSION['admin'])){
	session_destroy();
      echo "<script>
           	  alert('Cerraste sesión correctamente');
           	  window.location.href='/index';
         	</script>";

	} else {
      echo "<script>
           	  alert('Debes iniciar sesión primero');
           	  window.location.href='/index';
         	</script>";
    }
?>