<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>计算器</title>
</head>

<body>
<form action="#" method="post" >
    num1:<input type="text" name="num1" id=""/>
    op:<select name="op" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>

    </select>
    num2:<input type="text" name="num2" id=""/>
    <input type="submit" name="sub" value="计算" />

</form>
<?php
    $num1=$_POST['num1'];
    $num2=$_REQUEST['num2'];
    $op=$_POST['op'];
    $sub=$_POST['sub'];
    var_dump($sub);
    if(isset($sub)){
        if(is_numeric($num1) && is_numeric($num2)){
            if($op=='+'){
                $re=$num1+$num2;
            }elseif($op=='-'){
                $re=$num1-$num2;
            }elseif($op=='*'){
                $re=$num1*$num2;
            }elseif($op=='/'){
                if($num2==0){
                    echo '除数不能为0';
                    exit;
                }else{
                    $re=$num1/$num2;
                }
            }elseif($op=='%'){
                $re=$num1%$num2;
            }else{
                echo "语法错误";
            }
            echo "{$num1}{$op}{$num2}={$re}";
        }else{
            echo '请输入数字';
        }
    }else{
        echo '按钮错误';
    }

?>
</body>
</html>