<?php
$file = fopen("test.txt","w") or die("unable to open!");
$txt = "hello world";
fwrite($file,$txt);
fclose($file) ;
$file1 = fopen("test.txt","r");
echo fread($file1,filesize("test.txt"));
fclose($file1);
?>

<?php
$file = "tes.txt";
if(file_exists($file))
{
    $f = fopen($file,"r");
    echo fread($f,filesize("test.txt"));
    fclose($f);
}
else{
    die('Error');
}

?>
