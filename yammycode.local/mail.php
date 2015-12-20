<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
   <title>YammYcode: отправка сообщения</title>
   <style>
   html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}
   @media screen and (max-width: 768px){body{background-image:url(images/backgroundHtml_xs.png)}}@media screen and (min-width: 768px){body{background-image:url(images/backgroundHtml_sm.png)}}@media screen and (min-width: 992px){body{background-image:url(images/backgroundHtml_md.png)}}@media screen and (min-width: 1200px){body{background-image:url(images/backgroundHtml_lg.png)}}
   @font-face {
        font-family: "FregatBold";
        src: url("/fonts/Fregat/FregatBold/FregatBold.eot");
        src: url("/fonts/Fregat/FregatBold/FregatBold.eot?#iefix")format("embedded-opentype"),
        url("/fonts/Fregat/FregatBold/FregatBold.woff") format("woff"),
        url("/fonts/Fregat/FregatBold/FregatBold.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    @font-face {
        font-family: "FregatRegular";
        src: url("/fonts/Fregat/FregatRegular/FregatRegular.eot");
        src: url("/fonts/Fregat/FregatRegular/FregatRegular.eot?#iefix")format("embedded-opentype"),
        url("/fonts/Fregat/FregatRegular/FregatRegular.woff") format("woff"),
        url("/fonts/Fregat/FregatRegular/FregatRegular.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
   html, body {height: 100%;}
   body{font-size: 24px;}
   .main {
      min-height: 100%;
      width: 100%;
      margin: 0 auto;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      resize: both;
      overflow: auto;
    }
    .message{
        font-family: FregatRegular, Arial, sans-serif;
        text-align: center;
        color: #d2d2d2;
        border: 2px solid;
        border-radius: 10px;
        line-height: 2.5rem;
        padding: 15px;
        background: rgba(0, 0, 0, 0.8);
    }
    .wrong span{
        font-family: FregatBold;
        color: #F80000;
    }
    .wrong {
        border-color: #F80000;
    }
    .right {
        border-color: #00ff00;
    }
    .right span{
        font-family: FregatBold;
        color: #00ff00;
    }    
    button{
        background-color: rgba(255, 255, 255, 0.3);
        border: 2px solid #d2d2d2;
        border-radius: 10px;
        color: #d2d2d2;
        font-size: 18px;
        font-family: FregatBold;
        padding:  5px 15px;
        margin: 24px 0 12px 0;
        cursor: pointer;
    }
    button:hover{
        color: #00ff00;
        border-color: #00ff00;
    }
   </style>
    <link rel="stylesheet" type="text/css" href="/libs/animate/my.animate.min.css" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="favicons/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16" />
</head>
<body>
<?php
if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['textMessage'])) {
    $date = date('F j, Y, H:i:s');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $textMessage = $_POST['textMessage'];
    
    $message = 'Дата отправки: ' . $date . "\n";
    $message .= 'Имя пользователя: ' . $name . "\n";
    $message .= 'Email пользователя: ' . $email . "\n";
    $message .= 'Телефон: ' . $phone . "\n";
    $message .= 'Текст сообщения: ' . $textMessage;
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "From: " . $email . "\r\n";

    mail("info@yammycode.com", "Сообщение с сайта YammYcode.com", $message, $headers);
    echo "
    <div class='main'>
        <div class='message right bounceIn animated'><span>Сообщение отправлено!</span><br>Мы свяжемся с Вами в ближайшее время!<br> 
        	<button type='button' onclick='location.href=\"http://yammycode.com\"'>Вернуться на сайт YammYcode!</button>
        </div>
    </div>
    ";
    exit;
} else {
    echo "
    <div class='main'>
        <div class='message wrong bounceIn animated'><span>Сообщение не отправлено!</span><br>Пожалуйста, проверьте правильность заполнения формы!<br> 
        	<button type='button' onclick='javascript: history.back()'>Вернуться к форме сообщения!</button>
        </div>
    </div>
    ";
    exit;
}
?>
</body>
</html>