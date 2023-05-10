<?php

    // Função nativa do PHP -> não recomendado geralmente e-mails vão para o spam/lixeira
    /*function send($data)
    {
        $to = 'wilkerguilherme0@gmail.com';

        $subject = $data->subject;

        $message = $data->message;

        $headers = "From: {$data->email}\r\n".
        'Reply-To: wilkerguilherme0@gmail.com'."\r\n".
        'X-Mailer: PHP/'.phpversion();

        return mail($to, $subject, $message, $headers);
    }*/

    // Utilizando o PHP Mailer
    function send(array $data)
    {
        $email = new PHPMailer\PHPMailer\PHPMailer();
        $email->CharSet = 'UTF-8';
        $email->SMTPSecure = 'plain';
        $email->isSMTP();
        $email->Host = 'sandbox.smtp.mailtrap.io';
        $email->Port = 2525;
        $email->SMTPAuth = true;
        $email->Username = '137b0dc7baee34';
        $email->Password = 'c3c2e7af0a7fa8';
        $email->isHTML(true);
        $email->setFrom('wilkerguilherme0@gmail.com');
        $email->FromName = $data['quem'];
        $email->addAddress($data['para']);
        $email->Body = $data['mensagem'];
        $email->Subject = $data['assunto'];
        $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
        $email->MsgHTML($data['mensagem']);

        return $email->send();
    }
