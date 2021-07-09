<?php

    function show($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    function err(){
        if(isset($_SESSION['err']) && $_SESSION['err'] !=""){
            echo $_SESSION['err'];
            unset($_SESSION['err']);
        }
    }