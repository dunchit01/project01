
<?php
$i = 115; // 점수를 입력하는 구간
if($i>=90){ // $i가 90보다 크면
    echo "A"; // A를 말하세요 조건
}elseif($i>=80){ // 만약에 $i가 80보다 크거나 같으면
echo "B"; // B를 말하세요 조건
}elseif($i<80){ // 80보다 낮은 점수를 입력하는 경우
echo "쟌넨, 점수가 모자르네용~ ★";
}

echo "<br><br>";
?>

<?php
$i=85; // 점수 입력 구간. 
if($i<0 || $i>100){
    echo "1~100 사이의 값을 입력해 주세요.";
}elseif($i>90){
    echo "와우~! S급 헌터 확정입니다!";
}elseif($i>80){
    echo "A급 헌터시네요! 조금더 노력해봐요~";
}else{
    echo "전투에 투입할 수 없는 인력이네요 ㅠㅠ";
}
echo "<br><br>";
?>

<?php
$fruits = ["Apple", "Banana", "Cherry"];

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
echo "<br><br>"
?>

<?php
$student=["홍길동"=>90,"장발장"=>85,"이미영"=>75]; // 학생이라는 그룹에 이름과 점수를 세트로 묶어서 구성시켰어.
    foreach($student as $name=>$score){
        if($score>90){
            $grade='A';
        }elseif($score>80)
        $grade='B';
    else{
            $grade='F';
        } //학생 그룹에 있는 정보를 반복해서 말하라 시켰어. 다만, 어떻게 반복해서 말하라는 아직 시킨게 아니야. 정보의 내용을 반복해야한다고 말한거지.
    
    echo "학생:$name, 점수: $score, 등급: $grade","<br>";
    }
?>

<?php
$student=["김철수"=>95,"김희애"=>56,"한기봉"=>98,"천명한"=>100,];
foreach($student as $name=>$score){
    if($score>=90){
        $grade="S급";
    }elseif($score>=80){
        $grade="A급";
    }elseif($score>=70){
        $grade="B급";
    }else{
        $grade="일반인";
    }   
    echo "학생:$name, 점수:$score, 등급:$grade <br>";
}
?>

<?php
for ($i=1; $i<9; $i++){
    if($i=3){
        continue;
    } 
    echo "{$i}단<br>";  
    for ($n=1; $n<9; $n++){
        $mul= $i*$n; 
        echo "$i x $n = $mul 입니다.";
    } 
    echo"<br><br>";    
    }
    
?>

