<html>
<head>





<style>


header {
 background-color: #e398ea;
 padding: 30px;
 text-align: center;
 font-size: 35px;
 color: white;
}

footer {
 background-color: #c47ccb;
 padding: 10px;
 text-align: center;
 color: white;
}
    
</style>
</head>


<body>

<header>
 <h2>Friend book</h2>
</header>    
    
<form action="index.php" method="post">
<br>Name: <input type="text" name="name">
<input type="submit" >
</form>

<?php
echo "<h1>My best friends: </h1>";
    
echo "<ul>";

$filename = 'newfile.txt';

$file = fopen( $filename, "r" );
    
if( $file != false ) {
    
    while(!feof($file)){
        
        $friend = fgets($file);
        if(strlen($friend) > 0) {
            echo "<li>$friend</li>";
        }
    }
}
fclose( $file );
    
if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
    $name = $_POST['name'];
    $file = fopen( $filename, "a" );
    if($file != false){
         echo "<b><li>$name</li></b>"; 
         fwrite( $file, $name . "\n" );
         fclose( $file );
    }

}
?>
  
    
<br>
	<form method="post" action="index.php" >
	<input type="text" name="filter">
	<input type="submit" value="Filter list">
	</form>
<br> 
    
<?php
    
$file = fopen( $filename, "r" );
    
	while (!feof($file)) {
	    $line=fgets($file);
        
	    if(isset($_POST['filter'])){
            $filter = $_POST['filter'];
	    	$line=strstr($line, $filter,true).strstr($line, $filter);
	    	if($line)echo "<ul><li>$line</ul></li><br>";
	    }
	    
	}
    
fclose($file);
    
echo "</ul>"; 

?>
      

<footer>
 <p>Walking with a friend in the dark is better than walking alone in the light. (to be pronounced with a french accent)</p>
</footer>
    
</body>
    
</html>