

<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){


$movie_name =$_POST['movie_name'];
echo $movie_name ;
echo "   jkjkjkjk   ";
$pieces = explode(" ", $movie_name );
$c= count($pieces);
$ans="";
if($c>1){
foreach ($pieces  as $x ) {
    $ans=$ans.'+'.$x;
    
} 
$ans=substr($ans, 1);

}
else
{
$ans= $movie_name;

}


$url = "http://www.omdbapi.com/?t='".$ans."'&apikey=841f2b97";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

$_SESSION['data']=$json_data;
$_SESSION['check']=1;                       

}
header("location: index.php#myform");


?>