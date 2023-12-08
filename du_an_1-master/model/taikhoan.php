<?php
function insert_taikhoan($user,$pass,$email){
    $sql="insert into taikhoan(user,pass,email)values ('$user','$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' and pass='".$pass."' ";
    $sp=pdo_query_one($sql);
    return $sp;
}
function  update_taikhoan($id_tk,$user,$pass,$email,$diachi,$tel){
    
    $sql="update taikhoan set  user='".$user."',pass='".$pass."',email='".$email."',diachi='".$diachi."' ,tel='".$tel."'where id_tk=".$id_tk;
pdo_execute($sql);
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkusermail($user, $email)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' OR email='" . $email . "'";
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}
function loadall_taikhoan(){
    $sql="select * from taikhoan order by id_tk desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id_tk){
    $sql="delete from taikhoan where id_tk=".$id_tk;
    pdo_execute($sql);
}
function sendMailPass($email, $user, $pass) {
    require '../../PHPMailer/src/Exception.php';
    require '../../PHPMailer/src/PHPMailer.php';
    require '../../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ngthththanh2003@gmail.com';                     //SMTP username
        $mail->Password   = 'ngthththanh';                    //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('ngthththanh2003@gmail.com', 'Shop Shose');
        $mail->addAddress($email, $user);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mật khẩu mới';
        $mail->Body    = 'Mật khảu của bạn là:: ' .$pass;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
 ?>