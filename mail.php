<?php

$to = "advisory@globalthought.co.uk";

$name = $_POST['name'];
$email = $_POST['email'] ;
$subject = $_POST['subject'];
$text=$_POST['message'];
$message = '
<html>
<head>
    <title>Feedback</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th,
        td {
            text-align: left;
            padding: 8px;
            border : 1px solid black;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        th {
            background-color: #4CAF50;
            color: white;
            width: 40%;
        }
    </style>
</head>
<body>
    <table border="0">
        <tr>
            <th>Name</th>
            <td>'.$name.'</td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <th>Subject</th>
            <td>'.$subject.'</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>'.$text.'</td>
        </tr>     
    </table>
</body>
</html>

';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

$check = mail($to,$subject,$message,$headers);

if($check){
   echo '1';
}
else
{
    echo '2';
}

?>