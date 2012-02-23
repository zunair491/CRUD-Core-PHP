<?php

   mysql_connect("localhost","root","123456");
   mysql_select_db("user_accounts");
   $sql="SELECT loginid FROM tbl_login WHERE loginid='"  .  mysql_real_escape_string($_REQUEST['loginid'])
 . "' AND password='".mysql_real_escape_string($_REQUEST['password'])  .  "'";


//   $sql='INSERT INTO tbl_login (loginid, password, email) VALUES ("' . mysql_real_escape_string($_REQUEST['loginid']) . '","' . mysql_real_escape_string($_REQUEST['password']) . '","' . mysql_real_escape_string($_REQUEST['email']) . '")';


   $r = mysql_query($sql);
   if(!$r) {
     $err=mysql_error();
     print $err;
     exit();
}

// not sure this part is actually working

if(mysql_affected_rows()==0){
    
    print "no such login in the system. Please try again.";
    
    exit();
} 

else{

    print "successfully logged into system.";

    header( 'Location: /user/account/index.html' );

    //proceed to perform website’s functionality – e.g. present information to the user
}

?>

