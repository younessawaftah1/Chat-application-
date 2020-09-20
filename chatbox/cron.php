<?php
//   use   PHPMailer\PHPMailer\PHPMailer;
//   if(isset($_POST('button')))
//   {
//    require_once "PHPMailer/PHPMailer.php";
//    require_once "PHPMailer/SMTP.php";
//    require_once "PHPMailer/Exception.php";

//    $mail=new PHPMailer();
//    $mail->isSMTP();
//    $mail->Host = 'smtp.gmail.com'; 
//    $mail->SMTPAuth = true;
//    $mail->Username = 'younessawaftah57@gmail.com'; 
//    $mail->Password = '123456789.ys'; 
//    $mail->Port = 465; 
//    $mail->SMTPSecure = 'ssl';

//    $mail->isHTML(true);
//    $mail->setFrom($mail,$name);
//    $mail->addAddress('younessawaftah57@gmail.com');
//    $mail->Subject=$subject;
//    $mail->Body=$body;

//    if($mail->send()){
//       $status='success';
//       $respose='Email is sent';

//    }
//    else{
//       $status='Failed';
//       $respose='Email is not sent'.$mail->ErrorInfo;
      
//    }
//    exit(json_encode(array('status'=>$status,'respose'=>$respose)));
   
// $cron_file = 'cron.php';
// // Create the file
// touch($cron_file); 
// // Make it writable
// chmod($cron_file, 0777); 
// // Save the cron
// file_put_contents($cron_file, '* * * * * '); 
// // Install the cron
// exec('crontab cron_file');
// $path = dirname(__FILE__);
// $cron = $path . "/index.php";
// echo exec("***** php -q ".$cron." &> /dev/null");
// $deprecatedStatus = new ShellJob();
// $deprecatedStatus->setCommand('cd /app && /usr/local/bin/php cron/updateDeprecatedStatus.php');
// $deprecatedStatus->setSchedule(new CrontabSchedule('* * * * */2'));
// $displayDate = new ShellJob();
// $displayDate->setCommand('cd /app && /usr/local/bin/php cron/updateDisplayDate.php');
// $displayDate->setSchedule(new CrontabSchedule('* * * * */5'));


$path = dirname(__FILE__);
$cron = $path . "/run.php";
echo exec("***** php -q ".$cron." &> /dev/null");
$data = file("http://pearl.supplychain.com/cron.php");
date_default_timezone_set("Asia/Amman");
file_put_contents('./cron_result.txt', "IST — -> " . date('Y-m-d H:i:s') ."\t\t\t" . $text . "\n",FILE_APPEND);
?>
