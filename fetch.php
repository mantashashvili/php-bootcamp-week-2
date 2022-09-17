<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>chllange2</title>
</head>
<body>
<?php
         if(isset($_POST['submit']) && empty($_POST['username'])){
          echo "empty username";
         }


         ?>
    <section>
    <div class="conteiner">
    <form action="/search.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">
      
        <br>
        <br>

        <select name="data">
        <option value="follower">follower</option>
        <option value="repositories">repositories</option>
        <option value="both">followers & repositories</option>
      </select>
            <button type="submit" name="submit">search</button>

       
    </form>
    </div>
    </section>
    
    <style>
        body{
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg,#cc5333, #23074d);
        }
        section{
            display: flex;
    align-items: center;
    justify-content: center;
        }
  .conteiner{
    width: 500px;
    border: 2px solid black;
    margin: auto;
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50vh;
    border-radius: 25px;
    background: linear-gradient(135deg, #23074d, #cc5333 );
  }
  button{
    padding: 10px 0;
    margin-top: 10px;
    height: 100%;
    width: 50%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg,#cc5333, #23074d);
  }
    </style>
</body>
</html>

