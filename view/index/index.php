<?php



?>
<h2>Add new login</h2>
<form action="<?php echo BASE;?>auth/addnew" method="post">
    <input type="text" name="username" placeholder="Username" />
    <input type="password" name="password" placeholder="Password" />
    <input type="email" name="email" placeholder="Email" />
    <button type="submit">Add new</button>
</form>