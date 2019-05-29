<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //TODO: DBから取得
        $title = 'W.Spring';
        //TODO: DBから取得
        $slide_img = array('/images/DSC00247.jpg', '/images/DSC01300.jpg', '/images/DSC01311.jpg');
        //TODO: DBから取得
        $lineup_array = array(
            'test1' => array(
                'img'=>'/images/DSC00247.jpg', 
                'title'=>'test1', 
                'desc'=>'テスト1という商品です。',),
            'test2' => array(
                'img'=>'/images/DSC01300.jpg', 
                'title'=>'test2', 
                'desc'=>'テスト2という商品です。'),
            'test3' => array(
                'img'=>'/images/DSC01311.jpg', 
                'title'=>'test3', 
                'desc'=>'テスト2という商品です。'),
            'test4' => array(
                'img'=>'/images/DSC01311.jpg', 
                'title'=>'test4', 
                'desc'=>'テスト2という商品です。'),
            );
        return view('home', compact('title', 'slide_img', 'lineup_array'));
    }
}
