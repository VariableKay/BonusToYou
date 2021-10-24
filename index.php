<html>
<head>
  <title>BonusToYou</title>
  <link rel="icon" type="image/png" href="">
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="procrastinate all you want lol">
  <body>
    <div class="topnav">
         <p><font face="Comic Sans MS">NOTE: Please only submit links that lead to SCMP articles. Thank you. </font></p>
	  </div>
    <h1>Welcome</h1>
    <p>Still scratching that head of yours because of Margaret Chan's seemingly incompetent punishments? No worries!</p>
    <p>Simply submit a link (please heed the warning above thanks), and this handy dandy thing will generate a short paragraph based on the article you chose! Very pog</p>
    <form action="">
  <p><input type="text" id="lname" name="desiredURL" placeholder="gimme that URL"></p>
  <p><input type="submit" value="Submit"></p>
</form>
    <?php
      $url = $_GET['desiredURL'];
      error_reporting(0);
      $metas = get_meta_tags($url);
      $description = $metas['description'];
      echo "<p>{$description}</p>";
    ?>
  </body>
</html>
