<!--	<html>

<head>	-->
<link rel='stylesheet' href='upload/picStyle.css' />
<h1>sme v uploadsoch</h1>
<div class="galleryDiv">
  <?php
  $filelist = glob("./pics/*");

  foreach ($filelist as $filename) {
    echo "<a href='upload/galleryScript.php?picture=" .
      $filename . "'><img class='galleryPic' src='" .
      $filename . "'></a>";
  }
  ?>
</div>


<!--	</body>

</html>	-->