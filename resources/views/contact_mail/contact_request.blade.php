@extends('layouts/template')

@section('main')

    <?php
        $base_email_sender = Config::get('mail.email_sender');
        $base_password_email_sender = Config::get('mail.password_email_sender');
        $base_email_receiver = Config::get('mail.email_receiver');

        $name = $contact[0];
        $email = $contact[1];
        $message = $contact[2];

    $message1 =
            'Name: ' . $name . '<br>'.
            'Email: ' . $email . '<br>'.
            'More Detail Message: <br>'.
            $message
    ;
    echo $base_email_sender;
    echo $base_email_receiver;
    echo  $base_password_email_sender;
            echo $message1;
    exit();

    $pEmailGmail = $base_email_sender;
    $pPasswordGmail = $base_password_email_sender;
    $pFromName = $base_email_sender; //display name

    //destination email
    $pSubjetc = "Contact Information"; //the subjetc
    $pBody = $message1; //body html

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername($pEmailGmail)
            ->setPassword($pPasswordGmail);

    $mMailer = Swift_Mailer::newInstance($transport);

    $mEmail = Swift_Message::newInstance();
    $mEmail->setSubject($pSubjetc);
    $mEmail->setTo(array($base_email_receiver));
    $mEmail->setFrom(array($pEmailGmail => $pFromName));
    $mEmail->setBody($pBody, 'text/html'); //body html

    if ($mMailer->send($mEmail) == 1) {
        echo '';
    } else {
        echo '';

    }

    ?>

    <script language="javascript">
        window.location = "<?php echo url()?>/thank-you-for-contact"
    </script>


@stop