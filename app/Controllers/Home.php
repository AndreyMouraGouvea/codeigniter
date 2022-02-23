<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view ('Template/header') ;
        echo view ('home') ;
        echo view ('Template/footer');
    }

    public function page ($page='home') {

        echo view ('Template/header') ;
        echo view ($page) ;
        echo view ('Template/footer');
    
    }
}



