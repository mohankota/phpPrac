<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function login()
    {
        #checking whether username entered
        if(empty($_POST['user_name']))
        {
            $this->HandleError("User name is empty!");
            return false;
        }
        
        #checking whether E-mail entered
        if(empty($_POST['user_mail']))
        {
            $this->HandleError("Email is empty");
            return false;
        }
        
        #save username and email to a variable
        $userName = trim($_POST['user_name']);
        $userMail = trim($_POST['user_mail']);
        
        session_start();
        
    }
?>