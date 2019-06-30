<?php
namespace App\Services;
use App\Footer;
class FooterService{

    public function getAllFooter(){
        return Footer::all();
    }

}