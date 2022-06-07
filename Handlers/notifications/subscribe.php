<?php 
    header('Content-Type:application/json');
    require_once '../../vaccum.php';
    require_once '../../notifiers/send_email.php';
    use validate\number_n_email_validate as email_validate;
    $vaccum = new email_validate();
    $response = array(
        'isset'=>0,
        'empty'=>0,
        'exist'=>0,
        'subscribed'=>0,
        'valid'=>0,
        'sent'=>0
    );
    if(isset($_POST["email"]))
    {
        $response["isset"] =1; 
        if(!empty($_POST["email"]))
        {   $response["empty"] =1;
            $email = $_POST["email"];
            if($email = $vaccum->clean_email_address($email)){
                $response["valid"] = 1;
                $v_message = $_POST['message'];
                $v_subject = $_POST['subject'];
                $fname = $_POST['fname'];
                $sname = $_POST['sname'];
                $v_email = $_POST['email'];
                $v_mobile = $_POST['fmobile'];
                $v_name = $fname.' '.$sname;
                if(sendMail($v_email,$v_mobile,$v_name,$v_subject,$v_message))
                    $response["sent"] = 1;
                else 
                    $response["sent"] = 0;
            }
            else
                $response["valid"] = 404;
        }else
            $response["empty"] = 404;
    }
    else
        $response["isset"] = 404;
     
    echo json_encode($response);
    $o = null;
    $response = null;
    $_POST = null;
?>