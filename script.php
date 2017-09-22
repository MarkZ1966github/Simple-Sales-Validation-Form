<?php
if(isset($_POST['company']) && isset($_POST['fname'])) {
    $filedate = gmdate("Y-m-d\TH-i-s\Z");
    $file = 'Become-a-Customer-'.$filedate.'.txt';
    $data = 'Company: ' . ' ' . $_POST['company'] . ' Title: ' . $_POST['jobtitle'] . ' Name: ' . $_POST['fname'] . ' ' . $_POST['lname'] . "\r\n"; 
    $data2 = 'Email: ' . ' ' . $_POST['email'] . ' - ' . 'Phone: ' . $_POST['tel'] . "\r\n";
    $data3 = 'Do you currently have a Legal business license and re-sellers permit? ' . ' ' . $_POST['legalbiz'] . "\r\n";
    $data4 = 'Type of business document: ' . ' ' . $_POST['EIN'] . ' ' . $_POST['Business_License'] . ' ' . $_POST['Sales_Tax_ID'] . ' ' . $_POST['Reseller_Permit'] . ' ' . $_POST['Other_-_Please_Specify'] . "\r\n";
    $data5 = 'Please specify if you selected Other: ' . ' ' . $_POST['othdoc'] . "\r\n";
    $data6 = 'Billing Address: ' . ' ' . $_POST['billadd'] . "\r\n";
    $data7 = 'City: ' . ' ' . $_POST['billcity'] . "\r\n";
    $data8 = 'State or Province: ' . ' ' . $_POST['billstateprov'] . "\r\n";
    $data9 = 'Zip or Postal Code: ' . ' ' . $_POST['zip'] . "\r\n";
    $data10 = 'Country: ' . ' ' . $_POST['billcountry'] . "\r\n";
    $data11 = 'How long have you been in this business?: ' . ' ' . $_POST['howlong'] . "\r\n";
    $data12 = 'Type of business document: ' . ' ' . $_POST['bm'] . ' ' . $_POST['websell'] . ' ' . $_POST['ebay'] . ' ' . $_POST['amz'] . ' ' . $_POST['amzfba'] . ' ' . $_POST['local'] . ' ' . $_POST['othsell'] . "\r\n";
    $data13 = 'For Other checked above, please specify: ' . ' ' . $_POST['othsellexpla'] . "\r\n";
    $data14 = 'List all URL addresses and Storefronts you plan on offering our products: ' . "\r\n";
    $data15 = 'Are you currently listing products online? ' . ' ' . $_POST['list'] . "\r\n";
    $data16 = 'Website: ' . ' ' . $_POST['weburl'] . "\r\n";
    $data17 = 'Amazon: ' . ' ' . $_POST['amzurl'] . "\r\n";
    $data18 = 'Ebay: ' . ' ' . $_POST['ebayurl'] . "\r\n";
    $data19 = 'Other: ' . ' ' . $_POST['othurl'] . "\r\n";
    $data20 = 'Inventory: ' . ' ' . $_POST['phys'] . ' ' . $_POST['ds'] . ' ' . $_POST['physdrop'] . "\r\n";
    $data21 = 'Which product categories interest you? ' . ' ' . $_POST['app'] . ' ' . $_POST['arch'] . ' ' . $_POST['co'] . ' ' . $_POST['fish'] . ' ' . $_POST['gn'] . ' ' . $_POST['golf'] . ' ' . $_POST['house'] . ' ' . $_POST['hunt'] . ' ' . $_POST['knive'] . ' ' . $_POST['lights'] . ' ' . $_POST['mar'] . ' ' . $_POST['optic'] . ' ' . $_POST['psle'] . ' ' . $_POST['shot'] . ' ' . $_POST['sport'] . "\r\n";
    $data22 = 'How did you find out about us? ' . ' ' . $_POST['previous'] . ' ' . $_POST['dsd'] . ' ' . $_POST['man'] . ' ' . $_POST['se'] . ' ' . $_POST['ano'] . ' ' . $_POST['ts'] . ' ' . $_POST['tp'] . ' ' . $_POST['othmot'] . "\r\n";
    $data23 = 'Other from above - please specify: ' . ' ' . $_POST['othmotexpl'] . "\r\n";
    $data24 = 'Payment Method: ' . ' ' . $_POST['payment'] . "\r\n";
    $data25 = 'Comments: ' . ' ' . $_POST['comments'] . "\r\n";
    $data26 = 'I agree with the Disclaimer: ' . ' ' . $_POST['disclaim'] . "\r\n";
   
    
    $ret = file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    $ret2 = file_put_contents($file, $data2, FILE_APPEND | LOCK_EX);
    $ret3 = file_put_contents($file, $data3, FILE_APPEND | LOCK_EX);
    $ret4 = file_put_contents($file, $data4, FILE_APPEND | LOCK_EX);
    $ret5 = file_put_contents($file, $data5, FILE_APPEND | LOCK_EX);
    $ret6 = file_put_contents($file, $data6, FILE_APPEND | LOCK_EX);
    $ret7 = file_put_contents($file, $data7, FILE_APPEND | LOCK_EX);
    $ret8 = file_put_contents($file, $data8, FILE_APPEND | LOCK_EX);
    $ret9 = file_put_contents($file, $data9, FILE_APPEND | LOCK_EX);
    $ret10 = file_put_contents($file, $data10, FILE_APPEND | LOCK_EX);
    $ret11 = file_put_contents($file, $data11, FILE_APPEND | LOCK_EX);
    $ret12 = file_put_contents($file, $data12, FILE_APPEND | LOCK_EX);
    $ret13 = file_put_contents($file, $data13, FILE_APPEND | LOCK_EX);
    $ret14 = file_put_contents($file, $data14, FILE_APPEND | LOCK_EX);
    $ret15 = file_put_contents($file, $data15, FILE_APPEND | LOCK_EX);
    $ret16 = file_put_contents($file, $data16, FILE_APPEND | LOCK_EX);
    $ret17 = file_put_contents($file, $data17, FILE_APPEND | LOCK_EX);
    $ret18 = file_put_contents($file, $data18, FILE_APPEND | LOCK_EX);
    $ret19 = file_put_contents($file, $data19, FILE_APPEND | LOCK_EX);
    $ret20 = file_put_contents($file, $data20, FILE_APPEND | LOCK_EX);
    $ret21 = file_put_contents($file, $data21, FILE_APPEND | LOCK_EX);
    $ret22 = file_put_contents($file, $data22, FILE_APPEND | LOCK_EX);
    $ret23 = file_put_contents($file, $data23, FILE_APPEND | LOCK_EX);
    $ret24 = file_put_contents($file, $data24, FILE_APPEND | LOCK_EX);
    $ret25 = file_put_contents($file, $data25, FILE_APPEND | LOCK_EX);
    $ret26 = file_put_contents($file, $data26, FILE_APPEND | LOCK_EX);

    if($ret25 === false) {
        die('There was an error writing this file');
    }
    else {
       // echo "$ret bytes written to file";
    }

    if($_POST && isset($_FILES['bizdoc']))
{

    $from_email         = 'fromemail@email.com'; //from mail, it is mandatory with some hosts
    $recipient_email    = 'toemail@email.com'; //recipient email (most cases it is your personal email)

    //Capture POST data from HTML form and Sanitize them, 
    $company    = filter_var($_POST["company"], FILTER_SANITIZE_STRING); //sender name

    $reply_to_email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    //$subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form
    //$message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING); //message
    $subject = 'Become a Customer Form Submission';
    
    //Get uploaded file data
    $file_tmp_name    = $_FILES['bizdoc']['tmp_name'];
    $file_name        = $_FILES['bizdoc']['name'];
    $file_size        = $_FILES['bizdoc']['size'];
    $file_type        = $_FILES['bizdoc']['type'];
    $file_error       = $_FILES['bizdoc']['error'];

    if($file_error > 0)
    {
        die('Must upload Business Credentials, click on the back arrow in your browser and upload your file.');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("simpleform");
        $content2 = file_get_contents($file);
        $encoded_content2 = chunk_split(base64_encode($content2));

        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 

        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($company)); 
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content;

        //attachment2
        $body .= "--$boundary\r\n";
        $body .="Content-Type: multipart/mixed; name=".$file."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content2; 
    
    $sentMail = @mail($recipient_email, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        die('Thank you for your email, a sales representative will be in touch soon!');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');  
    }
        }
    }
    else {
   die('no post data to process');
    }
?>