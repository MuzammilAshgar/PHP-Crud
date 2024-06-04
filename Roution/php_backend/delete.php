<?php include("../database/conntion.php"); ?>
<?php


    $d_id =  $_GET['id'];
    if ($d_id == true) {
        delete();
    }
    
    function delete(){

       
                global $d_id, $conn;
                $sql = "DELETE FROM curd WHERE id = $d_id";
                $res = mysqli_query($conn, $sql);
                if($res){
                    header("Location:../../index.php");	
                }else{
                    echo 'error go to home page' ;
                }
            }
            
        
     
  
    




?>