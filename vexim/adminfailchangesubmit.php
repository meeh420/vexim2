<?
  include_once dirname(__FILE__) . "/config/variables.php";
  include_once dirname(__FILE__) . "/config/authpostmaster.php";
  include_once dirname(__FILE__) . "/config/functions.php";

  $query = "UPDATE users SET localpart='$_POST[localpart]'
    WHERE localpart='$_POST[origlocalpart]' AND domain_id='" . $_COOKIE[vexim][2] . "'";
  $result = $db->query($query);
  if (!DB::isError($result)) { header ("Location: adminfail.php?updated=$_POST[localpart]"); }
  else { header ("Location: adminfail.php?failupdated=$_POST[localpart]"); }
?>
<!-- Layout and CSS tricks obtained from http://www.bluerobot.com/web/layouts/ -->