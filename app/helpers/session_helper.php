<?php
    if (!isset($_SESSION)) {    //Jika tidak terdapat session
        session_start();        //Melakukan start session
        }

    function isLoggedIn() {
        if (isset($_SESSION['id_user'])) {
            return true;
        } else {
            return false;
        }
    }
