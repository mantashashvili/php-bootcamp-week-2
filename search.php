
<?php
          // Create a stream
          $opts = array(
            'http'=>array(
              'method'=>"GET",
              'header'=>'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36'
            )
          );

          $context = stream_context_create($opts);

           ?>

        


   
<?php  $username = $_POST['username'];
          $userChoice = $_POST['data'];
    ?>
          
       
    
   <?php if(isset($_POST['submit'] ) && $userChoice == "follower"): ?>


    
 
      <?php  $file = file_get_contents("https://api.github.com/users/$username/followers", false, $context);
          $decode = json_decode($file, true); 
          
       
          echo "<h1 class='title-repo'>Followers</h1>";
            foreach($decode as $data){
              $login =  $data['login'] . "<br>";
              $url = $data['html_url'];
              echo "<a class='href' href='$url' target=_blank><h1 class='title'>$login</h1></a>";
              $image = $data['avatar_url'];
              echo "<a class='href' href='$url' target=_blank><img class='img' src=$image ></a>";
            }
          
            
    
        
            
          ?>
      
      
         
    

    <?php endif; ?>

    <?php if(isset($_POST['submit'] ) && $userChoice == "repositories"): 
      $repo = file_get_contents("https://api.github.com/users/$username/repos", false, $context);
      $decoded = json_decode($repo, true);
      // 
      echo "<h1 class='title-repo'>Repositories</h1>";
      foreach($decoded as $info){
        $name = $info['name'];
        
        echo "<a class='href' href='https://github.com/$username/$name' target=_blank><h1 class='title'>$name</h1></a>" . "</br>";

      }

      ?>

      <?php endif; ?>
<?php if(isset($_POST['submit'] ) && $userChoice == "both"): 
    $file = file_get_contents("https://api.github.com/users/$username/followers", false, $context);
    $decode = json_decode($file, true);
    echo "<h1 class='title-repo'>Followers</h1>";
    foreach($decode as $data){
      $login =  $data['login'] . "<br>";
      $url = $data['html_url'];
      echo "<a class='href' href='$url' target=_blank><h1 class='title'>$login</h1></a>";
      $image = $data['avatar_url'];
      echo "<a class='href' href='$url' target=_blank><img class='img' src=$image ></a>";
    }

    
    echo "<br>";
    echo "<br>";
    echo "<h1 class='title-repo'>Repositories</h1>";
    $repo = file_get_contents("https://api.github.com/users/$username/repos", false, $context);
      $decoded = json_decode($repo, true);
      foreach($decoded as $keys => $info){
        $name = $info['name'];
        
        echo "<a class='href' href='https://github.com/$username/$name' target=_blank><h1 class='title'>$name</h1></a>" . "</br>";

      }

  
  ?>
  <?php endif; ?>


 
<?php if($username== ""):  ?>
    
  <h1>empty username</h1>
 

  <?php endif; ?>