<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Registration</title>
<body>
 <body bgcolor="#CD5C5C"></body>
<div align='center'>
  <form action="prosesdaftar2.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>New Member</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Email</td><td> : <input name="email" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Register" type="submit"> <input value="Cancel" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Have an Account ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>