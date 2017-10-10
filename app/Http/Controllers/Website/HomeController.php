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

    public function postcontact(){
        $name = Request::input('name');
        $email = Request::input('email');
        $message = Request::input('message');
        $telephone = Request::input('tel');
        $date_time = Request::input('dt');

        #lets first init the config
        ###########################
        ####### init Config #######
        ###########################

        /**
         * thinkactivecnx mailgun
         */
        #api key and domain (from mailgun.com panel)
//        $secretkey='key-6b30e26007a9580ea808297c75368f32';
        #source domain (you can add your own domain at mailgun panel and use it)
//        $domain = "sandboxbc7d90120525484b948a2a3b6aa56c3d.mailgun.org";

        # email options
        //$Option['FROM_MAIL']="postmaster@sandboxbc7d90120525484b948a2a3b6aa56c3d.mailgun.org";

        /**
         * aecnursinghome mailgun
         */
        #api key and domain (from mailgun.com panel)
        $secretkey='key-8149afe51e31337a6c273908bba95afb';
        #source domain (you can add your own domain at mailgun panel and use it)
        $domain = "sandbox31d284f90769435888b8f55d87732bfa.mailgun.org";

        # email options
        $Option['FROM_MAIL']="postmaster@sandbox31d284f90769435888b8f55d87732bfa.mailgun.org";
        $Option['FROM_NAME']="aecnursinghome MailGun";//any name you want it to appear
        $Option['TO_MAIL']="aecnursinghome.th@gmail.com";
        $Option['TO_NAME']="aecnursinghomethailand";
        //$Option['TO_MAIL']="thinkactivecnx@gmail.com";
        //$Option['TO_NAME']="ThinkactiveCNX";
        //$Option['CC_MAIL']=$email;
        //$Option['CC_NAME']=$name;
        $Option['SUBJECT']="contact mail from customer";
        $Option['BODY_TEXT']="Customer Name: ".$name."<br>"."Customer Email: ".$email."<br>"."Message: ".$message."<br>"."Telephone: ".$telephone."<br>"."Convenient date and time:".$date_time;// if html is not supported then use text message instead
        $Option['BODY_HTML']="<b style='color:#000000'><div>Customer Name: ".$name."</div><div>Customer Email: ".$email."</div><div>Message: ".$message."</div><div>Telephone: ".$telephone."</div><div>Convenient date and time: ".$date_time."</div></b>";

//        $Option['BODY_TEXT']="Contact Name: A.E.C. Nursing Home Thailand"."<br>"."Contact Email: aecnursinghome.th@gmail.com"."<br>"."Customer Name: ".$name."<br>"."Customer Email: ".$email."<br>"."Message: ".$message;// if html is not supported then use text message instead
//        $Option['BODY_HTML']="<b style='color:#000000'><div>Contact Name: A.E.C. Nursing Home Thailand</div><div>Contact Email: aecnursinghome.th@gmail.com</div><div>Customer Name: ".$name."</div><div>Customer Email: ".$email."</div><div>Message: ".$message."</div></b>";


        ###########################
        ### Calling mailGun API ###
        ###########################

        # Include the Autoloader

        // localhhost
        //require '../vendor/autoload.php';

        // on steam
        require '/home/aecnursing/domains/aecnursinghomethailand.com/laravel/vendor/autoload.php';


        # Instantiate the client with option to disable ssl verfication.
        $client = new \GuzzleHttp\Client([
            'verify' => false,
        ]);

        # pass the client to Guzzle Adapter
        $adapter = new \Http\Adapter\Guzzle6\Client($client);

        # pass the Adapter to mailgun object
        $mailgun = new \Mailgun\Mailgun($secretkey, $adapter);



        # Make the call to the client.
        $result = $mailgun->sendMessage($domain, array(
            'from'    => $Option['FROM_NAME']." <".$Option['FROM_MAIL'].">",
            'to'      => $Option['TO_NAME']." <".$Option['TO_MAIL'].">",
            //'cc'      => $Option['CC_NAME']." <".$Option['CC_MAIL'].">",
            'subject' => $Option['SUBJECT'],
            'text'    => $Option['BODY_TEXT'],
            'html'    => $Option['BODY_HTML'],
        ));
        # result will return as object //lets test it
        //var_dump($result);

        Session::flash('success', 'Your Email was Sent!');

//      return back()->withInput();
        return View::make('contact_mail.thank_you');
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

    public function article_02(){
        return View::make('article/article_02');
    }

    public function change_language($locale){
        Session::put('locale', $locale); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา
        return Redirect::back(); // สั่งให้โหลดหน้าเดิม
    }
}