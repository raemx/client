<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Contact form submission</title>
</head>
<body>


<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   $contact =$_POST['contact'];
   $company =$_POST['company'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'rachel@amoo.com';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Company: {$company}", "Contact: {$contact}",  "Message:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) 

           header('Location: contacted.html');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nzube Ufodike</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <style>
    body.contact {
  
  font-family: "Roboto", sans-serif;
  /* background-color: black; */
  line-height: 1.9;
  position: relative; }

/* h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; } */

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.contentc {
  margin: 0 auto;
  position: relative;
  top: 80px;
  background-color: black;
}

.container{
  margin: 0 auto;
  position: relative;
  top: 80px;
  background-color: black;

}

.col-md-6 .form.h-100{
  background-color: black;
}

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 10;
  background: none; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000;
  font-size: 13px; }

.btn, .form-control, .custom-select {
  height: 45px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.btn {
  border-radius: 30%;
  border: 1px black solid;
  font-size: 12px;
  letter-spacing: .2rem;
  text-transform: uppercase; }
  .btn.btn-primary {
    background: black;
    border: 1px black solid;
    color: #fff;
    padding: 15px 20px; }
  .btn:hover {
    color: black;
  background-color: white; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.contact-wrap .col-form-label {
  font-size: 14px;
  color: #b3b3b3;
  margin: 0 0 10px 0;
  display: inline-block;
  padding: 0; }

.contact-wrap .form, .contact-wrap .contact-info {
  padding: 40px; }

.contact-wrap .contact-info {
  color: rgba(255, 255, 255, 0.5); }
  .contact-wrap .contact-info ul li {
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.5); }
    .contact-wrap .contact-info ul li .wrap-icon {
      font-size: 20px;
      color: #fff;
      margin-top: 5px; }

.contact-wrap .form {
  background: #fff; }
  .contact-wrap .form h3 {
    color: #35477d;
    font-size: 20px;
    margin-bottom: 30px; }

.contact-wrap .contact-info {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat; }
  .contact-wrap .contact-info a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0; }
  @media (max-width: 1199.98px) {
    .contact-wrap .contact-info {
      height: 400px !important; } }
  .contact-wrap .contact-info h3 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 30px; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

  .media-icons.tl{
    background-color: black;
  }

  .media-icons.tl a{
    color: white;
  }

  html {
  font: 5vmin/1.3 Serif;
  overflow: hidden;
  background: #123;
}

body, head {
  display: block;
  font-size: 52px;
  color: transparent;
}

head::before, head::after,
body::before, body::after {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 3em;
  height: 3em;
  content: ".";
  mix-blend-mode: screen;
  animation: 44s -27s move infinite ease-in-out alternate;
}

body::before {
  text-shadow: -0.1050254661em 1.4064915409em 7px rgba(255, 64, 0, 0.9), 1.58752755em 0.1192282015em 7px rgba(143, 255, 0, 0.9), -0.3606742588em 2.3011549174em 7px rgba(230, 255, 0, 0.9), 2.164883781em 2.1194607272em 7px rgba(138, 0, 255, 0.9), 2.4367713546em -0.0772963326em 7px rgba(255, 215, 0, 0.9), 0.093369078em 2.2392442213em 7px rgba(109, 255, 0, 0.9), 0.4383243248em 1.0024671227em 7px rgba(255, 0, 114, 0.9), 2.4667740714em 1.7142235075em 7px rgba(255, 18, 0, 0.9), -0.3678573231em 1.9983725064em 7px rgba(0, 255, 254, 0.9), 1.9503708425em 1.4626031058em 7px rgba(0, 255, 74, 0.9), 1.7020530066em -0.0843205547em 7px rgba(0, 158, 255, 0.9), 1.7646596833em 2.0900885637em 7px rgba(0, 5, 255, 0.9), 1.7414651376em 1.0497423076em 7px rgba(213, 0, 255, 0.9), 0.4519013548em 2.1617274829em 7px rgba(0, 184, 255, 0.9), 0.3399434753em 1.4629909115em 7px rgba(0, 255, 103, 0.9), 1.7276412832em 2.1496706827em 7px rgba(0, 178, 255, 0.9), 0.0414558363em 1.1186498974em 7px rgba(255, 96, 0, 0.9), 0.2680565802em 1.5861572811em 7px rgba(0, 255, 152, 0.9), 1.5861586687em 1.6560570309em 7px rgba(255, 239, 0, 0.9), -0.387656717em -0.1136606912em 7px rgba(2, 0, 255, 0.9), 1.8422208896em 1.5052490641em 7px rgba(255, 41, 0, 0.9), 2.0774260027em 0.210721331em 7px rgba(255, 0, 191, 0.9), 1.6311775726em 2.4058024765em 7px rgba(29, 255, 0, 0.9), 0.682653104em 0.2167331116em 7px rgba(0, 158, 255, 0.9), 2.1299031857em 1.9175764598em 7px rgba(101, 255, 0, 0.9), 0.1420753258em 0.3093620124em 7px rgba(0, 255, 179, 0.9), 1.50519393em 0.8103773773em 7px rgba(215, 0, 255, 0.9), 1.0190201264em 2.3446113138em 7px rgba(255, 0, 14, 0.9), 0.4462065842em 1.969373047em 7px rgba(255, 0, 57, 0.9), 0.2580285285em 0.0528331749em 7px rgba(255, 129, 0, 0.9), 0.0397945929em -0.2704933319em 7px rgba(255, 0, 138, 0.9), 1.3344680329em 0.8811080477em 7px rgba(65, 255, 0, 0.9), 0.9280975848em 2.12820643em 7px rgba(202, 0, 255, 0.9), 0.9241855149em -0.2556580438em 7px rgba(255, 60, 0, 0.9), -0.1614208197em -0.077382496em 7px rgba(0, 255, 236, 0.9), 1.4935146386em 1.1252753833em 7px rgba(0, 142, 255, 0.9), 1.8909131872em -0.0223495502em 7px rgba(0, 161, 255, 0.9), 2.3835368102em 0.2864827737em 7px rgba(255, 177, 0, 0.9), 2.2090138406em 2.1423778925em 7px rgba(0, 90, 255, 0.9), 0.141954081em 1.3832926945em 7px rgba(0, 164, 255, 0.9), 1.4263637824em -0.1246455752em 7px rgba(110, 0, 255, 0.9);
  animation-duration: 44s;
  animation-delay: -27s;
}

body::after {
  text-shadow: 0.3191163058em 2.3133549026em 7px rgba(0, 148, 255, 0.9), 2.3390726721em -0.4123313211em 7px rgba(58, 0, 255, 0.9), 0.5772777472em 0.8072562817em 7px rgba(255, 0, 160, 0.9), -0.2511837632em -0.2218907218em 7px rgba(0, 248, 255, 0.9), 1.7590495362em 1.678441871em 7px rgba(0, 137, 255, 0.9), 1.5646899706em 2.3133628945em 7px rgba(255, 0, 94, 0.9), 1.6385677021em 0.7052975161em 7px rgba(255, 0, 20, 0.9), 0.1363064072em -0.1400669231em 7px rgba(0, 255, 18, 0.9), 1.1012350818em 1.5241628237em 7px rgba(255, 0, 126, 0.9), 0.8575769219em 1.8911265134em 7px rgba(255, 0, 51, 0.9), -0.1215102293em -0.2161501137em 7px rgba(0, 255, 23, 0.9), 1.20123785em 1.5284965259em 7px rgba(255, 0, 40, 0.9), 0.0280062463em 0.8115911722em 7px rgba(91, 255, 0, 0.9), -0.3410443752em 0.8994880573em 7px rgba(255, 180, 0, 0.9), -0.3150304316em -0.3548606222em 7px rgba(0, 255, 211, 0.9), 1.8220651264em 0.1342997075em 7px rgba(65, 255, 0, 0.9), 0.2341257064em -0.2094826369em 7px rgba(255, 0, 5, 0.9), 1.9377132244em -0.0335731381em 7px rgba(255, 69, 0, 0.9), 0.1202719557em 1.7680243075em 7px rgba(255, 75, 0, 0.9), 1.3821491339em 1.9267791714em 7px rgba(97, 0, 255, 0.9), 1.5244637184em 0.7741996571em 7px rgba(110, 0, 255, 0.9), 1.5971682268em 0.2332319712em 7px rgba(255, 67, 0, 0.9), 0.3621565646em 2.0587489357em 7px rgba(255, 208, 0, 0.9), 2.1473013519em 1.1088387814em 7px rgba(3, 0, 255, 0.9), 0.7133449102em 1.1550550184em 7px rgba(255, 41, 0, 0.9), 0.0640133859em 2.4018146118em 7px rgba(166, 0, 255, 0.9), 1.4382556368em 0.5163698947em 7px rgba(255, 0, 155, 0.9), 1.7559156794em -0.3171004675em 7px rgba(0, 255, 37, 0.9), 1.1861341688em 2.2466683062em 7px rgba(255, 0, 215, 0.9), 2.1439374015em 1.2277930953em 7px rgba(107, 0, 255, 0.9), 1.7286072622em 2.2080028882em 7px rgba(112, 255, 0, 0.9), 0.9607885533em 0.1460451016em 7px rgba(0, 184, 255, 0.9), 1.6583753892em 1.5699874805em 7px rgba(0, 255, 63, 0.9), -0.243890889em 1.3848597708em 7px rgba(191, 255, 0, 0.9), 1.5822192935em 0.5648777012em 7px rgba(21, 255, 0, 0.9), 2.2946067675em -0.1835470284em 7px rgba(224, 0, 255, 0.9), 1.9691458106em 0.8421575205em 7px rgba(170, 0, 255, 0.9), 1.3886217168em -0.0157191836em 7px rgba(0, 255, 156, 0.9), 2.1687585046em 2.043937684em 7px rgba(1, 255, 0, 0.9), 0.3647462508em -0.1739377878em 7px rgba(194, 255, 0, 0.9), 1.6901864028em 0.9496044969em 7px rgba(114, 255, 0, 0.9);
  animation-duration: 43s;
  animation-delay: -32s;
}

head::before {
  text-shadow: 0.7043393319em 1.9624570718em 7px rgba(10, 0, 255, 0.9), -0.3997073898em 0.8782594746em 7px rgba(255, 32, 0, 0.9), 0.6983030157em 1.2743509846em 7px rgba(0, 184, 255, 0.9), 0.8553779485em 1.9139738831em 7px rgba(255, 220, 0, 0.9), 0.5334274858em 1.525256567em 7px rgba(21, 0, 255, 0.9), 1.9206864113em 1.0732775577em 7px rgba(255, 213, 0, 0.9), 1.6610236581em 1.494972418em 7px rgba(0, 149, 255, 0.9), 1.2008014917em 1.9336818967em 7px rgba(163, 255, 0, 0.9), 1.0392988198em 1.5065362711em 7px rgba(89, 0, 255, 0.9), 2.2651693727em 2.4639624412em 7px rgba(28, 255, 0, 0.9), 1.900219933em 1.5281903242em 7px rgba(255, 156, 0, 0.9), 2.203526611em 1.6452276572em 7px rgba(223, 255, 0, 0.9), 0.8825195763em 1.9868270954em 7px rgba(0, 255, 84, 0.9), 0.1547856935em 0.4395206039em 7px rgba(0, 255, 120, 0.9), -0.351281091em 0.5656878638em 7px rgba(0, 255, 39, 0.9), -0.0166243948em 0.2016395161em 7px rgba(255, 163, 0, 0.9), 2.3735330706em -0.4116380524em 7px rgba(255, 35, 0, 0.9), -0.4297686708em 1.0365440295em 7px rgba(0, 255, 176, 0.9), 1.4180674513em 0.7043721857em 7px rgba(178, 255, 0, 0.9), 0.7644173727em 0.0265914307em 7px rgba(0, 8, 255, 0.9), 0.2639180786em -0.0660551302em 7px rgba(255, 79, 0, 0.9), 0.5940918174em 1.5135421694em 7px rgba(255, 172, 0, 0.9), 0.9363368045em 1.0189907212em 7px rgba(0, 65, 255, 0.9), 1.0106389354em 2.4009141597em 7px rgba(0, 255, 73, 0.9), -0.4085897555em 0.6090699038em 7px rgba(0, 255, 27, 0.9), 0.3119383782em 1.2346698761em 7px rgba(255, 0, 28, 0.9), 0.5479917093em 1.3301431814em 7px rgba(255, 0, 155, 0.9), -0.1470801623em 1.4081257658em 7px rgba(0, 255, 3, 0.9), 2.1751866611em 1.088795499em 7px rgba(255, 0, 119, 0.9), 0.4902831006em 0.3864296495em 7px rgba(0, 67, 255, 0.9), 0.9490583009em 2.4177205957em 7px rgba(0, 213, 255, 0.9), 0.2726475867em 0.2384707844em 7px rgba(230, 255, 0, 0.9), 0.0529188797em -0.0011112084em 7px rgba(255, 164, 0, 0.9), 1.3364104069em 0.2851776251em 7px rgba(0, 255, 159, 0.9), 1.8087231805em 1.7253752077em 7px rgba(255, 0, 65, 0.9), 2.0267644964em 1.8471942845em 7px rgba(86, 255, 0, 0.9), 1.3045384017em 0.0106582482em 7px rgba(255, 66, 0, 0.9), -0.1721731798em 2.1300275122em 7px rgba(0, 255, 39, 0.9), 2.0871573939em 1.7807385702em 7px rgba(255, 0, 199, 0.9), 0.5525686527em 1.2293460662em 7px rgba(255, 250, 0, 0.9), 2.4486039605em 1.0156602828em 7px rgba(0, 255, 182, 0.9);
  animation-duration: 42s;
  animation-delay: -23s;
}

head::after {
  text-shadow: 1.5578942629em 2.2643004244em 7px rgba(0, 255, 166, 0.9), 1.0704477238em 0.8220552911em 7px rgba(82, 0, 255, 0.9), 0.1427942493em 0.7709146331em 7px rgba(255, 158, 0, 0.9), 2.2058434125em -0.042944482em 7px rgba(0, 223, 255, 0.9), 0.775521567em 0.4091446307em 7px rgba(0, 137, 255, 0.9), 0.3850955672em 2.2362970801em 7px rgba(0, 255, 229, 0.9), 2.4078659122em 2.0682939337em 7px rgba(173, 0, 255, 0.9), 1.3721566845em 2.4251969928em 7px rgba(236, 0, 255, 0.9), -0.3227277482em 2.3439226816em 7px rgba(255, 26, 0, 0.9), 1.3743095674em 0.6652127404em 7px rgba(255, 92, 0, 0.9), 1.2111524316em 1.6605115457em 7px rgba(255, 0, 62, 0.9), -0.0784045112em 1.2694000909em 7px rgba(255, 191, 0, 0.9), 1.3875037766em 0.5777633864em 7px rgba(0, 255, 102, 0.9), 1.7643212033em 1.8993344621em 7px rgba(255, 47, 0, 0.9), -0.3600660256em 0.6274813732em 7px rgba(255, 0, 99, 0.9), 2.4675189662em 1.9605354419em 7px rgba(255, 49, 0, 0.9), -0.108210097em -0.2794858577em 7px rgba(255, 195, 0, 0.9), -0.4021572253em 1.4261592208em 7px rgba(0, 29, 255, 0.9), -0.2302537841em 0.7420622789em 7px rgba(255, 143, 0, 0.9), 0.7261185961em -0.0664833698em 7px rgba(38, 255, 0, 0.9), 0.2354743473em 0.4408906526em 7px rgba(0, 255, 158, 0.9), 1.1473951462em -0.3458863748em 7px rgba(0, 255, 211, 0.9), 1.6245647981em 2.078077824em 7px rgba(41, 255, 0, 0.9), 1.018967895em 1.0395541068em 7px rgba(255, 0, 196, 0.9), 0.9187720343em 1.8613450895em 7px rgba(0, 255, 147, 0.9), 1.4841659254em 0.3997808218em 7px rgba(68, 255, 0, 0.9), -0.4857606776em 1.9567799344em 7px rgba(179, 255, 0, 0.9), 1.4125546001em 0.8311867349em 7px rgba(255, 207, 0, 0.9), -0.1691955416em 0.5549955582em 7px rgba(0, 255, 51, 0.9), -0.262792917em -0.1024825311em 7px rgba(33, 255, 0, 0.9), 2.462510791em 0.3856214182em 7px rgba(255, 0, 101, 0.9), 0.2247466799em -0.2177744654em 7px rgba(57, 0, 255, 0.9), 1.5321763773em 2.1254438068em 7px rgba(0, 213, 255, 0.9), -0.3888086907em 1.9661922576em 7px rgba(0, 230, 255, 0.9), -0.2815783255em 0.5791087598em 7px rgba(255, 128, 0, 0.9), 1.8309492687em 2.078537009em 7px rgba(0, 0, 255, 0.9), 0.7735447058em 2.1676142741em 7px rgba(111, 0, 255, 0.9), 2.138685971em 1.7408282354em 7px rgba(192, 0, 255, 0.9), 0.1323140562em 1.976780119em 7px rgba(75, 255, 0, 0.9), -0.0481176118em 1.4819571181em 7px rgba(0, 232, 255, 0.9), -0.4109266362em 0.6653425347em 7px rgba(125, 0, 255, 0.9);
  animation-duration: 41s;
  animation-delay: -19s;
}

@keyframes move {
  from {
    transform: rotate(0deg) scale(12) translateX(-20px);
  }
  to {
    transform: rotate(360deg) scale(18) translateX(20px);
  }
}

  </style>
  
  
  </head>
  <body class="contact">

    
    <header>
      <div class="menu-btn">
      <div class="navigation">
        <div class="navigation-items">
          <a href="journey.html">Journey</a>
          <a href="index.html">Home</a>
          <a href="portfolio.html">Portfolio</a>
          <a href="contact.php">Contact</a>
          <a href="media.html">Media</a>
        </div>
      </div>
    </header>

    <div class="contentc">
    
      <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
          <div class="col-md-6">
            <div class="form h-100">
              <h3>Get in touch with me</h3>
              <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
              <form class="mb-5" method="post" id="contactForm">
                <div class="row">
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Name *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Email *</label>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">
                  </div>
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">Company</label>
                    <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="message" class="col-form-label">Message *</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-1 py-2 px-4">
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>
  
              <div id="form-message-warning mt-4"></div> 
  
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-info h-100" style="background-image: url('img/nzube.jpg'); background-size: cover;">
              <a href="https://www.google.com/maps" target="_blank"></a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
      

      <div class="media-icons tl">
        <a href="https://uk.linkedin.com/in/nzube"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/nzube.inclusive/?hl=en"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/nzube?lang=en"><i class="fab fa-twitter"></i></a>
      </div>
      

<script src="home.js"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
<script>


     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>

  </body>
</html>
