<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
    }

    public function page ($page='home') {

        echo view ('Template/header') ;
        echo view ($page) ;
        echo view ('Template/footer');
    
    }
}



