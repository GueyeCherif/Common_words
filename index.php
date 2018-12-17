<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <textarea name="chaine1" rows="8" cols="40"></textarea>
      <br>
      <textarea name="chaine2" rows="8" cols="40"></textarea>
      <br>
      <input type="submit" name="valider" value="Combien">
    </form>
    <?php
      if (isset($_POST['valider'])) {
        $phrase1 = $_POST['chaine1'];
        $phrase2 = $_POST['chaine2'];
        $array1 = explode(" ", $phrase1);
        $array2 = explode(" ", $phrase2);
        echo "<h1>Mots en commun</h1>";
        for($i = 0; $i < sizeof($array1); $i++ ){
          for($j = 0; $j < sizeof($array2); $j++){
            if ($array1[$i] == $array2[$j]){
               echo $array1[$i] . "<br>";
            }
          }
        }
      }
     ?>
  </body>
</html>
