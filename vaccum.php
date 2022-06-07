<?php

namespace validate;
require_once 'database.php';
use server_database\init_database as knock;
$knockDb = new knock();
$conecKnockDb = $knockDb->knockDb();


    function char_handler($word_to_remove_html_chars)
    {
        $clean_word = trim($word_to_remove_html_chars);
        $clean_word = strtolower($word_to_remove_html_chars);
        $clean_word = htmlentities($clean_word,ENT_QUOTES);
        $clean_word = htmlspecialchars($clean_word);
        $clean_word = stripslashes($clean_word);
        $clean_word = $GLOBALS['conecKnockDb']->real_escape_string($clean_word);
        return $clean_word;
    }

    class name_cleaner
    {
        public function clean_subject($dirt_subject)
        {
           
                $subject = char_handler($dirt_subject);
                return $subject;
        }
        public function change_file_name($dirt_name,$rand_id)
        {
            $arr = [];
            $file_name_arr = explode('.',$dirt_name);
            $file_name = $file_name_arr[0] = $rand_id.'.'.end($file_name_arr);
            $arr['file_name'] = $file_name;
            $arr['ext'] = end($file_name_arr);
            return $arr;
        }
        public function clean_ref($dirty_ref)
        {
            if(preg_match("/^([a-zA-Z0-9]{4,10})?$/",$dirty_ref))
            {
                $cleaned_ref = char_handler($dirty_ref);
                return $cleaned_ref;
            }
            else 
                return false;
        }
        public function clean_aprt_num($dirty_ref)
        {
            if(preg_match("/^([0-9]{1,6})?$/",$dirty_ref))
            {
                $cleaned_ref = char_handler($dirty_ref);
                return $cleaned_ref;
            }
            else 
                return false;
        }
        public function clean_code($dirty)
        {
            if(preg_match("/^([0-9]{1,4})?$/",$dirty)){
                $cleaned_ref = char_handler($dirty_ref);
                return $cleaned_ref;
            }
            else 
                return false;
        }
        public function clean_name($dirty_name)
        {
            if(preg_match("/^(\s*[a-zA-Z\_\-&]*\s*)*(\s*[a-zA-Z\_\-&]*\s*)*$/",$dirty_name))
            {
                $cleaned_name = char_handler($dirty_name);
                return $cleaned_name;
            }
            else 
                return false;
        }

        public function clean_title($dirty_title_to_clean)
        {
            if(preg_match("/^(\s*[a-zA-Z\w\-\_]*\s*)*$/",$dirty_title_to_clean))
            {
                $cleaned_title = char_handler($dirty_title_to_clean);
                return $cleaned_title;
            }
            else 
                return false; 
        }

        public function clean_genre($dirty_genre_name)
        {
            if(preg_match("/^(\s*[a-zA-Z]\s*)*(\s*[a-zA-Z]\s*)*$/",$dirty_genre_name))
            {
                $cleaned_genre_name = char_handler($dirty_genre_name);
                return $cleaned_genre_name;
            }
            else 
                return false;
        }

        public function gender_cleaner($dirty_gender)
        {
            if(preg_match("/^[12]{1}$/",$dirty_gender))
            {
                $cleaned_gender = char_handler($dirty_gender);
                $cleaned_gender = filter_var($cleaned_gender,FILTER_VALIDATE_INT);
                return $cleaned_gender;
            }
            else 
                return false;
        }
        public function validate_or_send_to_register_form($validate_test_to_check,$error_name)
        {
            if($validate_test_to_check)
                return $validate_test_to_check;
            else
                header("Location: signup?$error_name");
        }
    }

    class password_validate
    {
        public function clean_password($dirty_password)
        {
            if(preg_match("/^[\w@,.$%^*\"\'~#?+=!]{3,20}$/",$dirty_password))
            {
                $cleaned_password = char_handler($dirty_password);
                return $cleaned_password;
            }
            else
                return false;
        }

        public function cypher_cleaned_password($unhashed_password)
        {   
            $this->clean_password($unhashed_password);
            $hashed_password = password_hash($unhashed_password,PASSWORD_DEFAULT);
            return $hashed_password;
        }
    }

    class number_n_email_validate 
    {
        public function clean_email_address($dirty_email_email)
        {
            if(preg_match("/^[a-zA-Z0-9.@]*$/",$dirty_email_email))
            {   
                $cleaned_email_address = char_handler($dirty_email_email);
                $cleaned_email_address = filter_var($dirty_email_email,FILTER_VALIDATE_EMAIL);
                $cleaned_email_address = filter_var($cleaned_email_address,FILTER_SANITIZE_EMAIL);
                return $cleaned_email_address;
            }
            else
                return false;
        }

        public function clean_mobile_number($dirty_mobile_number)
        {
            if(preg_match("/^[0-9]{10,30}+$/",$dirty_mobile_number))
            {
                $cleaned_mobile_number = char_handler($dirty_mobile_number);
                return $cleaned_mobile_number;
            }
            else
                return false;
        }

        public function solid_email_address($dirty_email_address)
        {
            if(preg_match("/^[a-zA-Z0-9.@]*$/",$dirty_email_address))
            {
                $cleaned_email_address = char_handler($dirty_email_address);
                $cleaned_email_address = filter_var($cleaned_email_address,FILTER_VALIDATE_EMAIL);
                $cleaned_email_address = filter_var($cleaned_email_address,FILTER_SANITIZE_EMAIL);
                return $cleaned_email_address;
            }
            else
                return false;
        }

        public function solid_mobile_number($dirty_mobile_number)
        {
            if(preg_match("/^[0-9]{10,30}$/",$dirty_mobile_number))
            {
                $cleaned_mobile_number = char_handler($dirty_mobile_number);
                return $cleaned_mobile_number;
            }
            else
                return false;
        }
    }

    class recognize_email_or_number extends number_n_email_validate 
    {   public function is_email_or_phone($is_email_or_phone)
        {   if($this->solid_email_address($is_email_or_phone))
            {   $is_email = $is_email_or_phone;
                return $is_email;
            }
            else 
            {
                if($this->solid_mobile_number($is_email_or_phone))
                {   $this_number = $is_email_or_phone;
                    return $this_number;
                }
                else
                    return false;
            }
        }

        public function compare_hashed_n_unhashed_password($unhashed_password,$hashed_password)
        {
            $unhashed_password = char_handler($unhashed_password);
            if(password_verify($unhashed_password,$hashed_password))
                return true;

            else 
                return false;
        }
    }

    class comments_n_story_validate
    {
        public function clean_message($message)
        {
            $message = char_handler($message);
            $message = nl2br($message);
            return $message;
          
        }

        public function clean_comment_from_database($word)
        {
            $clean_word = str_ireplace(array('\r\n\r\n','\r\n\r','\r\n', '\r', '\n'),"<br />",$word);
            $clean_word = html_entity_decode($clean_word);
            $cleaned_word =  htmlspecialchars_decode($clean_word);
            return $cleaned_word;
        }

        public function clean_description($dirty_description)
        {
                $clean_description = char_handler($dirty_description);
                $cleaned_description = nl2br($clean_description);
                return ucwords($cleaned_description);
        }
    }

    class monies 
    {
        public function clean_cash($dirty_mobile_number)
        {
            if(preg_match("/^[0-9]{1,6}$/",$dirty_mobile_number))
            {
                $cleaned_mobile_number = char_handler($dirty_mobile_number);;
                return $cleaned_mobile_number;
            }
            else
                return false;
        }
    }

    class user_search_term
    {
        public function clean_user_current_search_term($dirty_search_term)
        {
            if(preg_match("/^[\w]*[0-9]*$/",$dirty_search_term))
            {
                $cleaned_search_term = char_handler($dirty_search_term);
                return $cleaned_search_term;

            }else 
                return false;
        }
    }


    