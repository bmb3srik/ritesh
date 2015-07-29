<?php

   $_SESSION['USER_NAME'] = '';      
   $_SESSION['ROLE_ID'] = '';
   $_SESSION = array();	
   session_unset();
   session_destroy();
   session_write_close();
   if (isset($_COOKIE[session_name()]))
   {
      setcookie(session_name(), '', time()-42000, '/');
	
   }
?>