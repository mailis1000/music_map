<!DOCTYPE>
<html>
<p>
    <h3> Search for bands, genres and countries </h3>
<p>Enter band, genre or country</p>
<form title="searchform" method="post" action="search.php?go"  id="searchform">
    <input  type="text" name="name">
    <input  type="submit" name="submit" value="Search">
</form>
<?php
if(isset($_POST['submit'])){
    if(isset($_GET['go'])){
        if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
            $name=$_POST['name'];
            //connect  to the database
            $db= mysqli_connect("localhost", "root",  "mysql", 'music1');
            if (!$db) {
                die('mysqli connection failed: ' . mysql_error());
            }
            //-query  the database table
            $mysql="SELECT bandname, genre, country FROM bands WHERE bandname LIKE '%" . $name . "%'OR genre LIKE '%" . $name ."%' OR country LIKE '%" . $name ."%'";
            //-run  the query against the mysql query function
            $result = $db->query($mysql);

            //-create  while loop and loop through result set
            while($row=mysqli_fetch_assoc($result)){
                // var_dump($row);
                $bandname1=$row['bandname'];
                $genre=$row['genre'];
                $countrey=$row['country'];
                //$user_id=$row['user_id'];
                //-display the result of the array
                echo "Name of the band: ".$bandname1. '<br>';
                echo "Genre: ".$genre. '<br>';
                echo "Country: ".$countrey. '<br>';
            }
        }
        else{
            echo  "<p>Please enter a search query</p>";
        }
    }
}
?>