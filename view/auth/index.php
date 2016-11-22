<span><strong><?php echo $this->msg;?></strong></span>
<div id="login">
<h2>USE EXCISTING ACCOUNT</h2>
<form action="<?php echo BASE;?>auth/auth" method="post">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <button type="submit">Log In</button>
</form>
</div>