<?php 
require_once 'transactions.php';
require_once 'vaccum.php';
require_once 'pathFinder/pathFinder.php';
require_once 'notifiers/send_mail.php';
use business\book_ins as book;
use business\book_get as getbook;
use path_finder\resource_url;
use validate\name_cleaner;
use validate\comments_n_story_validate as description;
use validate\number_n_email_validate as contact;
use validate\password_validate;
use validate\monies as apart_num;

$book_apt = new book();
$book_fetch = new getbook();
$url_manager = new resource_url();
$clean_namer = new name_cleaner();
$clean_desc = new description();
$clean_password = new password_validate();
$clean_contact = new contact();
$apart_num = new apart_num();

if(isset($_POST['names']) && 
    isset($_POST['email']) && 
    isset($_POST['phone']) && 
    isset($_POST['enter-date']) &&
    isset($_POST['leave-date']) && 
    isset($_POST['enter-time']) && 
    isset($_POST['leave-time']) && 
    isset($_POST['apartment']) && 
    isset($_POST['rooms']) &&
    isset($_POST['special-request']) &&
    isset($_POST['services'])
){
    if(!empty($_POST['names'])&& 
        !empty($_POST['email'])&& 
        !empty($_POST['phone'])&& 
        !empty($_POST['enter-date'])&&
        !empty($_POST['leave-date']) && 
        !empty($_POST['enter-time']) &&
        !empty($_POST['leave-time']) && 
        !empty($_POST['apartment']) && 
        !empty($_POST['rooms']) && 
        !empty($_POST['special-request']) &&
        !empty($_POST['services'])
    ){

        $name = $_POST['names'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enter_date = $_POST['enter-date'];
        $leave_date = $_POST['leave-date'];
        $enter_time = $_POST['enter-time'];
        $leave_time = $_POST['leave-time'];
        $apartment = $_POST['apartment'];
        $rooms = $_POST['rooms'];
        $special_request = $_POST['special-request'];
        $services = $_POST['services'];

        $enter_date = date("Y-m-d",strtotime($enter_date));
        $leave_date = date("Y-m-d",strtotime($leave_date));

         if($name = $clean_namer->clean_name($name))
            $name = $name;
        else
            header('Location:book_form?error_name');

        if($email = $clean_contact->clean_email_address($email))
           $email = $email;
        else
            header('Location:book_form?error_email');

        
        if($phone = $clean_contact->clean_mobile_number($phone))
            $phone = $phone;
        else
            header('Location:book_form?error_phone');

        
        if($apartment = $apart_num->clean_cash($apartment))
           $apartment = $apartment;
        else
            header('Location:book_form?error_apartment_num');

      
        if($rooms = $apart_num->clean_cash($rooms))
           $rooms = $rooms;
        else
            header('Location:book_form?error_num_room');

        
        if($special_request= $clean_desc->clean_description($special_request))
           $special_request = $special_request;
        else
            header('Location:book_form?error_sp_r');

        $save_rand_letter_id ='';
        $last_three_random = substr(random_int(1,PHP_INT_MAX),0,2);
        $unique_letter_id = uniqid();
        $save_rand_letter_id = $unique_letter_id;
        $trim_letter_id = substr($unique_letter_id,4,3);
        $book_ref = $last_three_random.$trim_letter_id;
        $order = array(
            'randid'=>$save_rand_letter_id,
            'bookref'=>$book_ref,
            'name' =>$name,
            'email' =>$email,
            'phone' => $phone,
            'enterdate' =>$enter_date,
            'leavedate' =>$leave_date,
            'entertime' =>$enter_time,
            'leavetime' =>$leave_time,
            'apart' =>$apartment,
            'sp' =>$special_request,
            'service' =>$services,
            'rooms' => $rooms
        );
       
        $recipient_email = 'theecornelius@gmail.com'; 
        $subject = 'BOOKING OF MULENA APARTMENT '.$order['apart']; 
        $message = 'Hellow, Mr '.$order['name'].' is requesting to Reserve apartmnt '.$order['apart'].'
                    on the  '.$order['enterdate'].' to'.$order['leavedate'].' 
                    from '.$order['entertime'].' to '.$order['leavetime'].'.';

        $alt_message = 'Hellow, Mr '.$order['name'].' is requesting to Reserve apartmnt '.$order['apart'].'
                        on the  '.$order['enterdate'].' to'.$order['leavedate'].'.';
        if($last_book_id = $book_apt->book($order))
        {   $bookedContainer = $book_fetch->get_with_id($last_book_id);
            header("Location:book_form?success&&bookingRef=$bookedContainer[book_ref]");
        }
        else 
            header("Location:book_form?failed");
    }else 
        header("Location:book_form?Ooops!e");
}else 
    header("Location:book_form?Ooops!i");



  ?>