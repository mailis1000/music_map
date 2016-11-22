<html>
<head>
    <title></title>
    <link href="<?php echo BASE;?>public/css/site.css" rel="stylesheet" />
</head>
<body>
<span><?php echo (isset($_SESSION['login']))? $_SESSION['login']: '';?></span>
<div id="menubar">
<ul>
    <li><a href="<?php echo BASE; ?>index/index">Register</a></li>
    <li><span> | </span></li>
    <?php if(isset($_SESSION['login'])):?>
        <li><a href="<?php echo BASE; ?>dashboard/index">Dashboard</a></li>
        <li><a href="<?php echo BASE; ?>auth/logout">Log Out</a></li>

    <?php else:?>
        <li><a href="<?php echo BASE; ?>auth/index">Log In</a></li>
    <?php endif;?>



</ul>
</div>
<div id="content">