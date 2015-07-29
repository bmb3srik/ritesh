<?php
define("HOST","http://localhost/dental/");
 
function create_meta_contents($meta_title="",$meta_author="",$meta_description="",$meta_keywords="",$meta_language="en-GB",$meta_search="",$meta_revisit_after="30")
{
   echo "\n";
   echo "    <title>{$meta_title}</title>\n";
   echo "    <meta name='Author' content='{$meta_author}' />\n";
   echo "    <meta name='description' content='{$meta_description}'/>\n";
   echo "    <meta name='keywords' content='{$meta_keywords}' />\n";
   echo "    <meta http-equiv='Content-language' content='{$meta_language}' />\n";
   echo "    <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'/>";
   echo "    <meta name='search' content='{$meta_search}' />\n";
   echo "    <meta name='REVISIT-AFTER' content='{$meta_revisit_after} days'/>\n";
   echo "    <meta name='ROBOTS' content='ALL' />\n";
   echo "    <meta name='distribution' content='global' />\n";
}

function display_pagination($size,$total,$page)
{
    $showpage=10;
   $pages = ceil($total/$size);

   //START: handle query part
    $query_string_part="";
   $query_string = $_SERVER['QUERY_STRING'];
   parse_str($query_string,$querystr_in_arr);
   if(isset($querystr_in_arr["page"]))
      unset($querystr_in_arr["page"]);
   if(count($querystr_in_arr)>0)
      $query_string_part = "&".http_build_query($querystr_in_arr);
    //END: handle query part
   
   if ($pages >= 2)
   {
      if ($pages > $showpage)
      {
         echo '<hr style="width:75%; color:#1152AC;" />'."\n";
         echo '<div style="text-align:center;" class="description">';
         if ($page > 1){echo '<a style = "text-decoration:none;color:#1152AC;" href="?page='.($page-1).$query_string_part.'">&laquo; Prev</a> || ';}				
         
         //if page is less than equal to half of $showpage
         if ($page <=($showpage/2))
         {
            for ($i = 1; $i <= $showpage; $i++) 
            {
               if ($page==$i){echo "&nbsp;&nbsp;<span style = 'color:#1152AC;' >[".$i."]</span>&nbsp;&nbsp;";}
               else{echo '&nbsp;&nbsp;<a style = "text-decoration:none;color:#1152AC;" href="?page='. $i.$query_string_part.'">',$i,'</a>&nbsp;&nbsp;';}
            }
         }
         else // if page is more than half of the $showpage
         {
            //if $page + ($showpage/2) >$pages
            if (($page + ($showpage/2)) > $pages)
            {
               $prev=$pages-$showpage;
               $next=$pages;
               for ($i = $prev; $i <= $next; $i++) 
               {
                  if ($page==$i){echo "&nbsp;<span style = 'color:#1152AC;' >&nbsp;[".$i."]&nbsp;</span>&nbsp;";}
                  else{echo '&nbsp;&nbsp;<a style = "text-decoration:none;color:#1152AC;" href="?page='.$i.$query_string_part. '">',$i,'</a>&nbsp;&nbsp;';}
               }
            }
            else
            {
               // subtract $showpage/2 previous and add $showpage/2 to next pages
               $prev=$page-($showpage/2);
               $next=$page+($showpage/2);
               for ($i = $prev; $i <= $next; $i++) 
               {
                  if ($page==$i){echo "&nbsp;<span style = 'color:#1152AC;' >&nbsp;[".$i."]&nbsp;</span>&nbsp;";}
                  else{echo '&nbsp;&nbsp;<a style = "text-decoration:none;color:#1152AC;" href="?page='.$i.$query_string_part. '">'.$i.'</a>&nbsp;&nbsp;';}
               }
            }
         }
         if ($page < $pages){echo'<a style = "text-decoration:none;color:#1152AC;" href="?page='.($pages).$query_string_part.'">....'.$pages.'</a> || <a style = "text-decoration:none;color:#1152AC;"  href="?page='. ($page+1).$query_string_part.'">Next &raquo;</a>';}
         echo '</div>'."\n";
      }
      else
      {
         //show all pages
         echo '<hr style="width:75%; color:#D3875B;" />'."\n";
         echo '<div style="text-align:center;" class="description">';
         if ($page > 1){echo '<a style = "text-decoration:none;color:#1152AC;" href="?page='.($page-1).$query_string_part.'">&laquo; Prev</a> || ';}
         for ($i = 1; $i <= $pages; $i++) 
         {
            if ($page==$i){echo "&nbsp;<span style = 'color:#1152AC;'>&nbsp;[".$i."]&nbsp;</span>&nbsp;";}
            else{echo '&nbsp;&nbsp;<a style = "text-decoration:none;color:#1152AC;" href="?page='.$i.$query_string_part.'">'.$i.'</a>&nbsp;&nbsp;';}
         }
         if ($page < $pages){echo '<a style = "text-decoration:none;color:#1152AC;" href="?page='.($pages).$query_string_part.'">....'.$pages.'</a>|| <a style = "text-decoration:none;color:#1152AC;" href="?page='.($page+1).$query_string_part.'">Next &raquo;</a>';}
         echo '</div>'."\n";
      }
   }
}



function strip_html_tags( $text )
{
    $text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
    return strip_tags( $text );
}
?>