<html>

<h1>Register a New Account</h1>

  <form name="register" method="post" action="register.php">

  <input name="loginid" type="text" value="loginid" size="20" />

  <input name="password" type="text" value="password" size="20" /><br />

  <input name="email" type="text" value="email" size="50" /><br />

  <input type="submit" name="submit" value="submit" />

  </form>
 
</html>

<?php
if ($_REQUEST['loginid']) {
   mysql_connect("10.72.109.36", "asim", "Conrad!1");
   mysql_select_db("user_accounts");
   $sql='INSERT INTO tbl_login (loginid, password, email) VALUES ("' . mysql_real_escape_string($_REQUEST['loginid']) . '","' . mysql_real_escape_string($_REQUEST['password']) . '","' . mysql_real_escape_string($_REQUEST['email']) . '")';

   echo $sql;

   $r = mysql_query($sql);
   if(!$r) {

    $err=mysql_error();

    print $err;

    exit();
   }
}
?>

