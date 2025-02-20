<?php
for ($i=1; $i<10; $i++){
    if($i==3){
        continue;
    } 
    echo "{$i}단<br>";  
    for ($n=1; $n<9; $n++){
        $mul= $i*$n;
        echo "$i x $n = $mul 입니다.<br>";
     
    } 
    echo"<br><br>";    
    }
    
?>

<?php
$i=0;
do{
    echo "안녕하세요.<br>";
    $i++;
}
while($i<5);

?>