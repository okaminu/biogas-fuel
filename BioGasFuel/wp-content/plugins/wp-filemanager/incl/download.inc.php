<?php
if (!@include_once(WP_CONTENT_DIR . "/plugins/wp-filemanager/incl/auth.inc.php"))
 include_once(WP_CONTENT_DIR . "/plugins/wp-filemanager/incl/auth.inc.php");


if ($AllowDownload)
{
/*if (isset($_GET['action']) && $_GET['action'] == "download")
{
//    session_cache_limiter("public, post-check=50");
//    header("Cache-Control: private");
}
if (isset($session_save_path)) session_save_path($session_save_path);

if (isset($_GET['path'])) $path = validate_path($_GET['path']);
if (!isset($path)) $path = FALSE;
if ($path == "./" || $path == ".\\" || $path == "/" || $path == "\\") $path = FALSE;

if (isset($_GET['filename'])) $filename = basename(stripslashes($_GET['filename']));

 if (isset($_GET['filename']) && isset($_GET['action']) && is_file($home_directory.$path.$filename) || is_file("../../../".$home_directory.$path.$filename))
 {
// echo "file found";
  if (is_file($home_directory.$path.$filename) && !strstr($home_directory, "./") && !strstr($home_directory, ".\\"))
   $fullpath = $home_directory.$path.$filename;
  else if (is_file("../../../".$home_directory.$path.$filename))
   $fullpath = "../../../".$home_directory.$path.$filename;
//echo $fullpath;
  if (!$AllowDownload && $AllowView && !is_viewable_file($filename))
  {
   print "<font color='#CC0000'>$StrAccessDenied</font>";
   exit();
  }

  header("Content-Type: ".get_mimetype($filename));
  header("Content-Length: ".filesize($fullpath));
  if ($_GET['action'] == "download");
   header("Content-Disposition: attachment; filename=$filename");

  readfile($fullpath);
}
*/
  print "<table class='index' width=500 cellpadding=0 cellspacing=0>";
   print "<tr>";
    print "<td class='iheadline' height=21>";
     print "<font class='iheadline'>&nbsp;$StrDownload \"".htmlentities($filename)."\"</font>";
    print "</td>";
    print "<td class='iheadline' align='right' height=21>";
     print "<font class='iheadline'><a href='$base_url&amp;path=".htmlentities(rawurlencode($path))."'><img src='" . WP_CONTENT_URL . "/plugins/wp-filemanager/icon/back.gif' border=0 alt='$StrBack'></a></font>";
    print "</td>";
   print "</tr>";
   print "<tr>";
    print "<td valign='top' colspan=2>";
     print "<center><br />";
      print "$StrDownloadClickLink<br /><br />";
      print "<a href='" . WP_CONTENT_URL . "/plugins/wp-filemanager/incl/libfile.php?".SID."&amp;path=".htmlentities(rawurlencode($path))."&amp;filename=".htmlentities(rawurlencode($filename))."&amp;action=download'>$StrDownloadClickHere <i>\"".htmlentities($filename)."\"</i></a>";
     print "<br /><br /></center>";
     print "</td>";
   print "</tr>";
  print "</table>";
}
else
 print "<font color='#CC0000'>$StrAccessDenied</font>";

?>