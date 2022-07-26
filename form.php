<?php 
         $username="root";
         $password="";
         $server="localhost" ;
         $database="portfolio";
         $con=mysqli_connect($server,$username,$password,$database);
         if(isset($_POST['submit'])){
              $name=$_POST['name'];
              $email=$_POST['email'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
              $insert=  " INSERT INTO port VALUES( '$name ', ' $email' , '$subject' , '$message') ";
              $query=mysqli_query($con,$insert);
              if($query){
                  ?>
                    <script>
                      alert(" Your Data Saved Successfully and My expert Teams will Contact very soon ! Thank You");
                    </script>
                    <?php
              }
              else
              {
                ?>
                 <script>
                      alert("Data not saved");
                    </script>
                    <?php
              }
         }
          
    ?>