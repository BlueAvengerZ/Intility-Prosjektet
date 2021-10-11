<?php
include("server.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrer deg</title>
  </head>
  <body>
  <style type="text/css">
  h1 {
  color: white;
}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

<div id="box">
    <h1>Registrer deg</h1>
    <p>Har du konto? <a href="logginn.php">Logg deg inn</a>. </p>
   
    <form method="post">
      <p>E-post</p>
      <input type="email" name="epost" required>
      <p>Fornavn</p>
      <input type="text" name="fornavn">
      <p>Etternavn</p>
      <input type="text" name="etternavn">
      <p>Lag et passord</p>
      <input type="password" name="passord_1">
      <p>Bekreft passord</p>
      <input type="password" name="passord_2">
      <p>Velg et brukernavn</p>
      <input type="text" name="brukernavn">
      <p></p>
      <input type="submit" name="registrer" value="Registrer">

    </form>
</div>

  </body>
</html>
