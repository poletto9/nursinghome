<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use View, Request;

class HomeController extends Controller{

    public function __construct()
    {

    }

    public function index(){
        return View::make('site/index');
    }

    public function clinic(){
        return View::make('site/clinic');
    }

    public function care_giver(){
        return View::make('site/care_giver');
    }

    public function rooms(){
        return View::make('site/rooms');
    }

    public function facility(){
        return View::make('site/facility');
    }

    public function contact(){
        return View::make('site/contact_us');
    }

    public function contact_request(){

        /**
         * Get input value from Refer and Earn Page
         */
        $name = Request::input('name');
        $email = Request::input('email');
        $message = Request::input('message');
        $copy = Request::input('newsletter');

        if($copy == ''){
            $copy = '0';
        }

        $contact_data = array(
            $name,
            $email,
            $message
        );

//        echo json_encode($contact_data);
//        exit();

        return View::make('contact_mail/contact_request')->with('contact', $contact_data);
    }

    public function thank_contact(){
        return View::make('contact_mail/thank_you');
    }

    /**
     * Article
    */

    public function article_01(){
        return View::make('article/article_01');
    }

    public function change_language($locale){
        Session::put('locale', $locale); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา
        return Redirect::back(); // สั่งให้โหลดหน้าเดิม
    }
}