<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
/*
(c)Copyright wiz64 & PHP_New ;
Released under MIT LICENSE ;
v0.9.1

Github Repo : https://github.com/wiz64/Crayon-Telegram-ProfileBot ;
Contact Telegram @wiz64bot | https://t.me/wiz64bot ;
Donate: Telegram @wiz64 | https://t.me/wiz64 ;
You Can't edit these lines. Doing So will only harm your self-dignity.
*/
if (!file_exists('madeline.php')) {
    /*Include MadelineProto Client*/
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

echo "Session Success !<br>";
date_default_timezone_set('Asia/Kolkata'); /* Your Time Zone Here*/
$time= date('h A'); echo "Time is : $time<br>";
$kun=date('d-m-y');
echo "date is $kun<br>";
$nik = ["C9903✈","Falcon🦅","Death💀","Heat🔥"]; /* Write Names Here */
$nikrand=array_rand($nik);
$niktxt=$nik[$nikrand];
echo "Name is $niktxt<br>";
$biotxt=["Never Gonna Give You Up","You Know The Rules & So Do I","Never gonna let you down","Never Gonna Say Goodbye"]; /* Write Bio TEXTs HERE */
$biorand=array_rand($biotxt);
$bio=$biotxt[$biorand];
/*!!!! BIO SHOULD NOT BE TOO LONG OR SCRIPT WILL NOT WORK!!!*/

echo "Bio Text : $bio <br>";

$profilepic=["1.jpg","2.jpg","3.jpg","4.jpg"]; /* Write file names of All images here */
$profilerand=array_rand($profilepic);
$soat_jpg=$profilepic[$profilerand];

$MadelineProto->account->updateProfile(['first_name'=>"$niktxt|⏰$time",'about'=>"$bio|⏰$time |📆$kun"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
echo "Successful<br>";

if(isset($time)){
$a = $time;
//header('content-type: image/jpg');
//unlink("goto.jpg");
$img = imagecreatefromjpeg($soat_jpg);
$font = __DIR__ ."/font.ttf"; 
$oq = imagecolorallocate($img, 255, 255, 255);
$txt = $a;
/******************FIND MIDDLE OF IMAGE *******************/
//Get image dimensions
  $width = imagesx($img);
  $height = imagesy($img);
// Get center coordinates of image
  $centerX = $width / 2;
  $centerY = $height / 2;
// Get size of text
  list($left, $bottom, $right, $top) = imageftbbox(100, 0, $font, $txt);
// Determine offset of text
  $left_offset = ($right - $left) / 2;
  $top_offset = ($bottom - $top) / 2;
// Generate coordinates
  $x = $centerX - $left_offset;
  $y = $centerY - $top_offset;
// Add text to image
echo "x:$x ; y:$y";
echo "<br>USED IMAGE :<br><img style=\"width:100px;height:100px;\" src='$soat_jpg'>";

imagettftext($img, 120, 0, $x,$y, $oq, $font, $txt);
imagejpeg($img,"goto.jpg");
//header ('location: goto.jpg');
}
$logopic="goto.jpg";
file_put_contents("goto.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);

$MadelineProto->photos->uploadProfilePhoto(['file' => "goto.jpg"]);
echo "<br>Result :<br><img style=\"width:100px;height:100px;\" src='goto.jpg'>";
unlink("MadelineProto.log");
unlink("session.madeline");
?>