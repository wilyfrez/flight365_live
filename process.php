<?php
session_start();

  include('dbconnector.php');

  if(!isset($_SESSION['joined'])) {
	header('Location: index.php');
}

  
 if(isset($_POST['joinFlight'])) {

         // Store the IP address 
         $ip = getVisIpAddr();
         $ipdata = @json_decode(file_get_contents( 
             "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
 
            

        $fullname = $conn->real_escape_string($_POST['fullname']);
        $email = $conn->real_escape_string($_POST['email']);
        $dept = $conn->real_escape_string($_POST['dept']);
      //  $country = 'Nigeria';
       
        $country = $ipdata->geoplugin_countryName; 

        $sql = $conn->query("INSERT INTO viewers (id, name, email, dept, country, signInTime) 
        VALUES(NULL, '$fullname', '$email', '$dept', '$country', NOW())");  

if($sql) {

    $_SESSION['joined'] = true;
    $_SESSION['fullname'] = $fullname;
    $_SESSION['email'] = $email;
    $_SESSION['dept'] = $dept;
    $_SESSION['country'] = $country;
    header("Location: live.php"); 
     //exit("successful");
 } else {
    $_SESSION['joined'] = false;
    // exit("".mysqli_error($conn)."");
    header("Location: index.php?q=failed"); 
}
 
    }

    if(isset($_POST['signOut'])) {
        unset($_SESSION['info']);
        unset($_SESSION['joined']);
        unset($_SESSION['fullname']);
        unset($_SESSION['email']);
        unset($_SESSION['dept']);
        unset($_SESSION['country']);
        header("Location: index.php?logout=1"); 

    }

    if(isset($_POST['testify'])) {
        
        $fullname = $_SESSION['fullname'];
        $email =$_SESSION['email'];
        $dept = $_SESSION['dept'];
        $country = $_SESSION['country'];
        $testimony = $conn->real_escape_string($_POST['testimony']);


       $sql = $conn->query("INSERT INTO testimonies (id, name, email, dept, country, testimonies, time) 
       VALUES(NULL, '$fullname', '$email', '$dept', '$country', '$testimony', NOW())");  

                  
      if(!$sql) {
      
      // exit("".mysqli_error($conn)."");
        exit('<small >Sorry there was an error, Kindly try again</small>');

     } else {
       
         exit('<small>Congratulations! Your Testimony was recieved</small>');
    }
        
    }   

   

    if(isset($_POST['addComment'])){
                   
        $fullname = $_SESSION['fullname'];
        $email =$_SESSION['email'];
        $dept = $_SESSION['dept'];
        $country = $_SESSION['country'];
        $comment =  $conn->real_escape_string($_POST['comment']);
    
        $conn->query("INSERT INTO comments (id, name, email, dept, country, comment, time) 
        VALUES (NULL, '$fullname', '$email','$dept', '$country', '$comment', NOW())");
    
        
        $output =  ' <div class="d-flex flex-row container-fluid mb-1">
                        <div class="pic">
                             <img class="rounded-circle  mr-3" src="img/pic.png" height="40px" width="40px" alt="">
                        </div>
                         <div class="flex-grow-1">
                            <div class=" comment-box w-100  p-2">
                                <span class="commentor-name mr-2 mr-md-3 ">'.$fullname.'</span>'.$comment.'
                            </div>
                         <div class="col-12 timeAgo"></div>
                         </div>
                     </div>';
      
       exit($output);     

        }

        if(isset($_POST['updateComment'])){

            $commentSql = $conn->query("SELECT * FROM comments ORDER BY comments.id DESC");
            $output ="";
            while($$data = $commentSql->fetch_assoc() ) {
               
                $output .= '<div class="d-flex flex-row container-fluid mb-1">
                <div class="pic">
                     <img class="rounded-circle  mr-3" src="img/pic.png" height="40px" width="40px" alt="">
                </div>
                 <div class="flex-grow-1">
                    <div class=" comment-box w-100  p-2">
                        <span class="commentor-name mr-md-3 ">'.$data['name'].'</span>'.$data['comment'].'
                    </div>
                 <div class="col-12 timeAgo"><time class="date timeago" datetime="'.$data['time'].'"></time> </div>
                 </div>
             </div>';
            }
           echo $output;   
            
           
            }

             
  

  // Extract IP  
  
function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
  

