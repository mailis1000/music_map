<html>
<head>
    <title></title>
    <link href="<?php echo BASE;?>public/css/site.css" rel="stylesheet" />
</head>
<body>
<span><?php echo (isset($_SESSION['login']))? $_SESSION['login']: '';?></span>
<div id="menubar">
<ul>
    <li><a href="<?php echo BASE; ?>index/index">Index</a></li>
    <?php if(isset($_SESSION['login'])):?>
        <li><a href="<?php echo BASE; ?>dashboard/index">Dashboard</a></li>
        <li><a href="<?php echo BASE; ?>auth/logout">Logout</a></li>

    <?php else:?>
        <li><a href="<?php echo BASE; ?>auth/index">Login</a></li>
        <li><a href="<?php echo BASE; ?>search/find">Search</a></li>
    <?php endif;?>



</ul>
</div>
<div id="content">