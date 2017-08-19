<?php
// require_once "recaptchalib.php";
// // your secret key
// $secret = "6Lc3HioUAAAAAKyhd4PAAVWkgkNhej04Qm4eS4TD";
 
// // empty response
// $response = null;
 
// // check secret key
// $reCaptcha = new ReCaptcha($secret);

// if ($_POST["g-recaptcha-response"]) {
//     $response = $reCaptcha->verifyResponse(
//         $_SERVER["REMOTE_ADDR"],
//         $_POST["g-recaptcha-response"]
//     );
// }
// if ($response != null && $response->success) {
//     $data['respuesta'] = true;
// }else{
//     $data['respuesta'] = false;
// }
// $data["remote"] = $_SERVER["REMOTE_ADDR"];
// $data['re'] = $_POST["g-recaptcha-response"];
// $data['res'] = $response;

// header('Content-Type: application/json');
// echo json_encode($data);

function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Lc3HioUAAAAAKyhd4PAAVWkgkNhej04Qm4eS4TD',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    // Agregarmos una variable CaptCha
    echo post_captcha($_POST['g-recaptcha-response']);
    // header('Content-Type: application/json');
    // echo json_encode($data);
    // Fin Agregarmos una variable CaptCha