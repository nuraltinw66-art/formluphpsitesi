<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
     <link rel=" stylesheet" type="text/css" href="style.css"  >
</head>
<body>
  <div class="ustkisim">
<nav class="navbar navbar-expand-lg nav-bg">
  <div class="container p-0">
    <a class="navbar-brand" style="color:white;" href="index.php">
        <img class="logo"  src="resimler/kayitcik.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item d-flex align-items-center p-2">
          <a class="nav-link"  href="index.php">Kayıt Formu</a>
          <span class="ayrac">|</span>
        </li>
        
      </ul>
      <?php
      function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;


      }
      ?>
      <?php
      $username=$surename=$password=$repassword=$email=$city=$hobiler="";
      $nameErr =$emailErr=$passwordErr=$repasswordErr=$cityErr=$hobiErr=$surenameErr="";

      if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(empty($_POST["username"])){
          $nameErr="Adınız zorunludur.";
        }
        else{
          $username = test_input($_POST["username"]);
          
        }
       if(empty($_POST["surename"])){
        $surenameErr="soyadı zorunludur.";
       }
       else{
        $surename= test_input($_POST["surename"]);
       }
       if(empty($_POST["email"])){
        $emailErr="email gerekli alan.";
       }
       else{
        $email= test_input($_POST["email"]);
       }
       if(empty($_POST["password"])){
        $passwordErr="şifre gerekli.";
       }
       else{
        $password=test_input($_POST["password"]);
       }
       if(($_POST["password"]) != ($_POST["repassword"])){
        $repasswordErr="önceki şifrenizle uyuşmuyor...";
       }
       else{
        $repassword=test_input($_POST["password"]);
       }
if(!isset ($_POST["hobiler"])){
  $hobiErr="hobi seçin.";
}
else{
  $hobiler=($_POST["hobiler"]);
}
if($_POST["city"]==-1){
  $cityErr="Bir şehir seçiniz.";
}
else{
  $city=$_POST["city"];
}




      }




      ?>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
      <h1 class="display-2 text-center text-white bosluk fw-bold shadow">Bize Kayıt Olmaya Ne Dersin?</h1>
      <h2 class="display-3 text-center text-white  fw-bold shadow">Aşağıya kaydır.</h2>
    </div>
  </div>
</div>
</div>
<div class="container-fluid bg-dark py-3 ">
  <div class="row">
    <div class="col-md-12">
  <h4 class="display-4 text-center text-white">Haydi Kayıt ol.</h4></div>
  </div>
</div>
<div class="container mb-3 py-4">
<div class="container kayit">
<legend class="mt-3 mb-3 py-2">Kayıt Formu</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-controller">

  <div class="row mb-3">
    
  <div class="col">
    <label for="username">İsim</label>
    <input type="text" name="username" class="form-control" value="<?php echo $username ; ?>">
     <div class="text-danger"><?php echo $nameErr; ?></div>
  </div>

  <div class="col">
    <label for="surename">Soyisim</label>
    <input type="text" name="surename" class="form-control" value="<?php echo $surename ; ?>" >
     <div class="text-danger"><?php echo $surenameErr ;?></div>
  </div>
</div>

 <div class="mb-3">
  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" value="<?php echo $email ; ?>" placeholder="isim@info.com">
  <div class="text-danger"><?php echo $emailErr ; ?></div>
</div>
<div class="row mb-3">
 <div class="col-6">
  <label for="password">Şifre</label>
  <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
  <div class="text-danger"><?php echo $passwordErr ; ?></div>
</div>

 <div class="col-6">
  <label for="repassword">Tekrar Şifreniz</label>
  <input type="password" name="repassword" class="form-control" value="<?php echo $repassword ; ?>">
  <div class="text-danger"><?php echo $repasswordErr ; ?></div>
</div>
</div>
<div class="row mb-3">
 <div class="col-6">
  <label for="city">Şehir</label>
  <select name="city" class="form-select">
    <option value="-1" selected>Şehir seçiniz</option>
    <option value="1">Kocaeli</option>
    <option value="2">Bursa</option>
    <option value="3">İzmir</option>
  </select>  
  <div class="text-danger"><?php echo $cityErr ;?></div>
</div>
<div class="row">
<div class="col-6 mt-4 ">

  <label for="hobiler">Hobiler</label>

<div class="form-check">
<input type="checkbox" name="hobiler[]" value="film <?php echo $hobiler ; ?>" id="hobiler_0">
<label for="hobiler_0" class="form-check-label">Film</label>
</div>

<div class="form-check">
<input type="checkbox" name="hobiler[]" value="Spor <?php echo $hobiler ; ?>" id="hobiler_0">
<label for="hobiler_0" class="form-check-label">Spor</label>
</div>

<div class="form-check">
<input type="checkbox" name="hobiler[]" value="Oyun " id="hobiler_0">
<label for="hobiler_0" class="form-check-label">Sanat</label>
</div>
<div class="text-danger"><?php echo $hobiErr ; ?></div>
</div>
</div>
</div>
<button type="submit" class="btn btn-dark mt-3" value="submit">Kayıt ol</button>
</form>
</div>
</div>
<div class="footer bg-dark align-items-center text-center ">
  
    <p class="m-0 pt-4 text-white shadow">&copy;tüm hakları saklıdır.  </p>
  
</div>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
</body>
</html>