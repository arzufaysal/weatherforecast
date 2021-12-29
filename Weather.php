
<?php
if(array_key_exists ('submit',$_GET)){
    if(!$_GET['city'] ){
        $error="your input field is empty";
    }
if($_GET['city']){
    $apiData=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=5285fd1843f48b1434b717bd4609c230");

$weatherArray=json_decode($apiData, true);
print_r($weatherArray);


}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
        <h1> search global weather</h1>
<form action="" method ="GET">
<p><label for="city">Enter your city name</label></p>
<p><input type="text" name="city" id="city" placeholder="city name"> </p>
<button type="submit" name="submit" class="btn btn-success">Submit Now</button>

<div class="output">

<?php 
 echo  '<div class="alert alert-danger" role="alert">
'. $error.'
</div>'
?>


</div>
</form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>