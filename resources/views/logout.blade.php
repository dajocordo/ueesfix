<?php
	session_start();
	session_destroy();

	      echo "<script>
            alert('Cerraste sesión correctamente');
            window.location.href='/index';
          </script>";
?>