<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://allfont.ru/allfont.css?fonts=sansation-light" rel="stylesheet" type="text/css" />

    <title>Hello, world!</title>

    <style type="text/css">
      @font-face {
    font-family: Sansation-Light; /* Гарнитура шрифта */
    src: url(Sansation-Light.ttf); /* Путь к файлу со шрифтом */
   }
   
   h1 {
   font-family: `Sansation-Light`;
   }
   h2 {
   font-family: `Sansation-Light`;
   }
    </style>
  </head>
  <body>
    <?php 
        $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'project1');
        $query = mysqli_query($connect, 'SELECT * FROM project1');
    ?>






      <div style="height:100px; background-color: #E95258" class="row">
          <div>
            <img src="logo.png" style="width:400px" class="col-2">
            <!---<h1 style="color:white; font-family:Sansation-Light" class="text-end col-9 pt-3">Зарегестрироваться</h1> -->
            <a href="Login.php"><button type="button" class="btn btn-danger col-9" href="Login.php">Регистрация</button></a>
          </div>
      </div>  

      <!--люди находят людей-->
      <div class="row">
       <div class="col-6" style="background-color: #E95258; height: 2000px">
          <h1 class="text-center pt-5 " style="color:white; font-family:Sansation-Light; font-size: 500%">Докторы находят клиентов</h1>
          <h2 class="text-center pt-5" style=" color: white; font-size: 250%"> текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст   </h2>
       </div>
       <div class="col-6" style="height: 2000px">
          <h1 class="text-center pt-5" style="font-family:Sansation-Light; font-size: 500%">Клиенты находят докторов</h1>
          <h2 class="text-center pt-5" style="font-family:Sansation-Light; font-size: 250%">  текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст   </h2>
       </div>
      </div>

      <!---Услуги врачей-->
      <div style="height:1500px; background-color: #32495E">
        <div>
          <h1 style="color:white; font-family:Sansation-Light; font-size: 500%" class="">Услуги врачей</h1>
          
        </div> 
        <div class="row">
          <div class="col-4 bg-light" style="height:500px; margin-left: 50px">
            <img src="image.jpg" style="width:500px">
            <div style="height:100px; background-color: #E95258; margin-bottom: 100px">
            </div>
          </div>

          <div class="col-4 bg-light ms-5" style="height:500px">
            <img src="image.jpg" style="width:500px">
            <div style="height:100px; background-color: #E95258; margin-bottom: 100px">
            </div>
          </div>

          <div class="col-3 bg-light ms-5" style="height:500px">
            <img src="image.jpg" style="width:500px">
            <div style="height:100px; background-color: #E95258; margin-bottom: 100px">
              
            </div>
          </div>
         

        </div> 
      </div>

      <div style="height:2000px; background-color: #32495E">
        <div>
          <h1 style="color:white; font-family:Sansation-Light; font-size: 500%" class="">Наши врачи</h1>
          
        </div> 
        <div class="row">
          <div class="col-4 bg-light" style="height:450px; margin-left: 300px">
            <img src="image.jpg" style="width:618px; height: 334px">
            <div style="height:117px; background-color: #E95258; margin-bottom: 700px">
               <?php $result = $query->fetch_assoc();  ?>
            <h1>ФИО<?php echo $result['Name']; ?> </h1>
            <p><?php echo $result['Number']; ?> </p>
            <p> Эмейл<?php echo $result['Email']; ?> </p>
            </div>
          </div>
          <div class="col-4 bg-light" style="height:450px; margin-left: 300px">
            <img src="image.jpg" style="width:618px; height: 334px">
            <div style="height:117px; background-color: #E95258; margin-bottom: 700px">
               <?php $result = $query->fetch_assoc();  ?>
            <h1>ФИО<?php echo $result['Name']; ?> </h1>
            <p><?php echo $result['Number']; ?> </p>
            <p> Эмейл<?php echo $result['Email']; ?> </p>
            </div>
          </div>
          <div class="col-4 bg-light" style="height:450px; margin-left: 300px">
            <img src="image.jpg" style="width:618px; height: 334px">
            <div style="height:117px; background-color: #E95258; margin-bottom: 700px">
               <?php $result = $query->fetch_assoc();  ?>
            <h1>ФИО<?php echo $result['Name']; ?> </h1>
            <p><?php echo $result['Number']; ?> </p>
            <p> Эмейл<?php echo $result['Email']; ?> </p>
            </div>
          </div>

         

        </div> 
      </div>
      <div style="background-color: #333333; height: 200px">
        <a href="Login.php"><button type="button" class="btn btn-danger">Login</button></a>
        <a href="Login.php"><button type="button" class="btn btn-danger">Sign up</button></a>

      </div>
      <
      









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>