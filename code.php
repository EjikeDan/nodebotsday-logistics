<?php
session_start();
include('db.php');


if(isset($_POST['booking'])){
    $sendername=$_POST['sendername'];
    $senderphonenumber=$_POST['senderphonenumber'];
    $pickupaddress=$_POST['pickup-no-apt'].' '.$_POST['pickup-address'].' '.$_POST['pickup-city'].' '.$_POST['pickup-state'];
    $senderemail=$_POST['senderemail'];
    $receivername=$_POST['receivername'];
    $receiverphonenumber=$_POST['receiverphonenumber'];
    $deliveryaddress=$_POST['delivery-no-apt'].' '.$_POST['delivery-address'].' '.$_POST['delivery-city'].' '.$_POST['delivery-state'];
    $receiveremail=$_POST['receiveremail'];
    $description=$_POST['description'];
    $tracking_no="PT-".rand(1000000000,9999999999);
    $order_stat="pending";
    
    $pickup_no_apt=$_POST['pickup-no-apt'];
    $pickup_address=$_POST['pickup-address'];
    $pickup_city=$_POST['pickup-city'];
    $pickup_state=$_POST['pickup-state'];
    
    $delivery_no_apt=$_POST['delivery-no-apt'];
    $delivery_address=$_POST['delivery-address'];
    $delivery_city=$_POST['delivery-city'];
    $delivery_state=$_POST['delivery-state'];
    
    $query="INSERT INTO `orders`(`sendername`, `senderphonenumber` , `pickupaddress` , `senderemail`,  `receivername` , `receiverphonenumber` , `deliveryaddress`,  `receiveremail` , `description` , `tracking_no`,`orderstatus`, 
    `p-no-apt`, `p-address`, `p-city`, `p-state`, `d-no-apt`, `d-address`, `d-city`, `d-state`, `readstat`) 
    VALUES  ('$sendername','$senderphonenumber', '$pickupaddress', '$senderemail', '$receivername','$receiverphonenumber', '$deliveryaddress', '$receiveremail', '$description', '$tracking_no','$order_stat'
    ,'$pickup_no_apt','$pickup_address', '$pickup_city', '$pickup_state', '$delivery_no_apt','$delivery_address', '$delivery_city', '$delivery_state', 'unread')";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        // $_SESSION['success']="Order Added";
        // echo "Task Added";
        // header('Location: addtask.php');

    }
    else{
        // $_SESSION['success']=mysqli_error($connection);
        // echo "Task Not Added";
        // header('Location: addtask.php');
    }
        
        $txtmsg = 'Dear customer, thank you for your patronage. Your Tracking No is: PT-'.$tracking_no.'. A representative will contact you shortly. Enquiries: 09062547388. Pectratech';
        
        $msg = 'Sender\'s Name: <b>'.$sendername.'</b><br><br>Sender\'s Phone Number: <b>'.$senderphonenumber.'</b><br><br>Pick Up Address: <b>'.$pickupaddress.'</b><br><br>Sender\'s Email: <b>'.$senderemail.'</b><br><br>Receiver\'s Name: <b>'.$receivername.'</b><br><br>Receiver\'s Phone Number: <b>'.$receiverphonenumber.'</b><br><br>Delivery Address: <b>'.$deliveryaddress.'</b><br><br>Receiver\'s Email: <b>'.$receiveremail.'</b><br><br>Description: <b>'.$description.'</b><br><br>Tracking Number: <b>'.$tracking_no.'</b><br><br>';
        
        $msg2 = 'Dear customer, thank you for your patronage. You submitted an order on our website with the following details:<br><br><br>  Sender\'s Name: <b>'.$sendername.'</b><br><br>Sender\'s Phone Number: <b>'.$senderphonenumber.'</b><br><br>Pick Up Address: <b>'.$pickupaddress.'</b><br><br>Sender\'s Email: <b>'.$senderemail.'</b><br><br>Receiver\'s Name: <b>'.$receivername.'</b><br><br>Receiver\'s Phone Number: <b>'.$receiverphonenumber.'</b><br><br>Delivery Address: <b>'.$deliveryaddress.'</b><br><br>Receiver\'s Email: <b>'.$receiveremail.'</b><br><br>Description: <b>'.$description.'</b><br><br><br>Your Tracking Number is: <b>'.$tracking_no.'</b><br><br><br> A representative will contact you shortly. <br><br>Enquiries: 09062547388.';
    //   mail($senderemail,"Test mail",$msg);
       
       $api = "KyXPZHzE3Yra3s3ZV19G8byK9LWmk8Bkvv16udAfXFxOYXYtbLoPb7fPh9iu";
       $from = "Pectratech";
       $to = $senderphonenumber;
       $body = $txtmsg;
        
         //Here is the function to send via POST using CURL
function sendViaPost($senderID, $phone, $message) {
    $response = array();
    $headers = array('Content-Type: application/x-www-form-urlencoded');
    $url = 'https://www.bulksmsnigeria.com/api/v1/sms/create';
    $arr_params = [
        'from'  	=>  $senderID,
        'to'  		=>  $phone,
        'body'  	=>  $message,

        'append_sender' => 1, // Choose your Append Sender ID Option:
        //1 for none,
        // 2 for Hosted SIM Only
        // and 3 for all

        'api_token' =>  'KyXPZHzE3Yra3s3ZV19G8byK9LWmk8Bkvv16udAfXFxOYXYtbLoPb7fPh9iu', //Todo: Replace with your API Token

        'dnd'       =>  4 //Choose your preferred DND Management Option:
        // 1 for Get a refund,
        // 2 for Direct hosted SIM,
        // 3 for Hosted SIM Only,
        // 4 for Dual-Backup and
        // 5 for Dual-Dispatch
    ];
    if (is_array($arr_params)) {
        $final_url_data = http_build_query($arr_params, '', '&');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $final_url_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response['body'] = curl_exec($ch);
    $response['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $response['body'];
}


//Call the SendViaPost function to dispatch your message passing in your Sender ID, Phone Number and Message Body)





sendViaPost($from, $to, $txtmsg);


if ($senderphonenumber !== $receiverphonenumber){
    sendViaPost($from, $receiverphonenumber, $txtmsg);

}


        
        $subject = "New Website Order!";
        $email = "pectratechbookings@gmail.com";
        
        $subject2 = "Order Submitted!";
        $email2 = $senderemail;
        
        
         echo '<script> 
//         var xmlhttp = new XMLHttpRequest(); 
        
// xmlhttp.open("GET", "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token='.$api.'&from='.$from.'&to='.$to.'&body='.$body.' ", true);
// xmlhttp.send();
// xmlhttp.onreadystatechange = function() {
// if (this.readyState == 4 && this.status == 200) {
//  document.getElementById("txtHint").innerHTML = this.responseText;
// }
// };


 var xmlhttp = new XMLHttpRequest(); 
        
xmlhttp.open("GET", "http://pectratech.com/test/index2.php?email='.$email2.'&msg='.$msg2.'&subject='.$subject2.'", true);
xmlhttp.send();

        </script>';
        
        
        
        
        echo '<script> 
//         var xmlhttp = new XMLHttpRequest(); 
        
// xmlhttp.open("GET", "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token='.$api.'&from='.$from.'&to='.$to.'&body='.$body.' ", true);
// xmlhttp.send();
// xmlhttp.onreadystatechange = function() {
// if (this.readyState == 4 && this.status == 200) {
//  document.getElementById("txtHint").innerHTML = this.responseText;
// }
// };


 var xmlhttp = new XMLHttpRequest(); 
        
xmlhttp.open("GET", "http://pectratech.com/test/index.php?email='.$email.'&msg='.$msg.'&subject='.$subject.'", true);
xmlhttp.send();

window.location="http://pectratech.com/home/pickup-and-delivery/index.php?submit=sub&trk='.$tracking_no.'";
        </script>';
        
    
    
}



if(isset($_POST['tracking'])){
    $track_btn=$_POST['track_btn'];
    
    $tn = preg_replace('/[^0-9]/', '', $track_btn);
    
    $query="SELECT * FROM orders WHERE `tracking_no` ='$track_btn'";
    $query_run=mysqli_query($connection,$query);
    
    if(mysqli_num_rows($query_run)>0){    
        echo '<script> window.location="http://pectratech.com/home/pickup-and-delivery/track.php?tn='.$tn.'"; </script>';
}
    else {
        $query2="SELECT * FROM reports WHERE `shipmentcode` ='$track_btn'";
    $query_run2=mysqli_query($connection,$query2);
    
    if(mysqli_num_rows($query_run2)>0){    
        echo '<script> window.location="http://pectratech.com/home/pickup-and-delivery/track.php?tn='.$tn.'"; </script>';
}
    else {
        echo '<script> window.location="http://pectratech.com/home/pickup-and-delivery/index.php?tn=nf"; </script>';
    }
        
    }
    
}


?>