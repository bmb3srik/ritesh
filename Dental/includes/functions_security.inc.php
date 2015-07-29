<?php

/* SQL Injection: Function to handle string values for MySQL
function sqli_mysql_string($data) {
   if (get_magic_quotes_gpc()) {
      $data = stripslashes($data);
   }
   return mysql_real_escape_string($data);
}

// SQL Injection: Function to handle integers / numeric values
function sqli_is_num($value){
   if (!is_numeric($value))
   {
      $value = "'" . mysql_real_escape_string($value) . "'";
   }
   return $value;
   }
*/

// Cross-Site Scripting: Function to handle string values before being output 
// CROSS-Site Scripting: the second parameter ENT_QUOTES will handle both single and double quotes
function xss_echo($data) {
   return htmlspecialchars($data, ENT_QUOTES);
}

// File Includes: Function to handle string values to be used in include functions
function fi_include($data) {
   return preg_replace("[^A-Za-z0-9]", "", $data);
}

function get_ip_address()
{
   $ip=$_SERVER['REMOTE_ADDR'];
   if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
   {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
   }
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
   {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
   }
   $ip=htmlspecialchars($ip, ENT_QUOTES);
   return $ip;
}

function strip_javascript($sSource, $aAllowedTags = array(), $aDisabledAttributes = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavaible', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragdrop', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterupdate', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmoveout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'))
   {
      if (empty($aDisabledAttributes)) return strip_tags($sSource, implode('', $aAllowedTags));
      return preg_replace('/<(.*?)>/ie', "'<' . preg_replace(array('/javascript:[^\"\']*/i', '/(" . implode('|', $aDisabledAttributes) . ")[ \\t\\n]*=[ \\t\\n]*[\"\'][^\"\']*[\"\']/i', '/\s+/'), array('', '', ' '), stripslashes('\\1')) . '>'", strip_tags($sSource, implode('', $aAllowedTags)));
   }

?>
