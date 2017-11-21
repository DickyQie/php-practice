<?php

require_once("./libs/smarty.class.php");
$smarty=new Smarty();
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

/***
 * 设置缓存30秒不变
 * 30秒后自动缓存新数据
 * 新闻每隔几分钟刷新一下
 * 缓存效率高，Html 的编译比PHP文件快
 */
$smarty->cache_lifetime=30;
$smarty->caching=true;

$arr=array("北京","上海1","天津1");
$smarty->assign("arr",$arr);

//清除缓存
//$smarty->clear_cache('test7.tpl');

/****
 * 局部缓存
 * 一个界面分开缓存
 * 另外一部分时时更新
 *
 * Insert 函数类似欲 inluce 函数，不同之处是 insert 所包含的内容不会被缓存，每次调用该模板都会重新执行该函数.
 *
 * 函数名必需是 insert_xxx()
 *
 */

function insert_mytime(){
    return date("Y-m-d H:i:s");
}

function insert_mycount(){
    $time="";
    if(!is_file("b.txt")){
        $time="1";
        file_put_contents("b.txt","1");
    } else{
        $aa=intval(file_get_contents("b.txt"));
        $time=$aa+1;
        file_put_contents("b.txt",$time);
    }
    return $time;
}

/****
 * append使用
 */
//一维数组
$smarty->append("aaa","北京");
$smarty->append("aaa","深圳");

$arrm=array('a'=>'北京','b'=>'上海','c'=>'天津');
//复制方式
/*$smarty->append("bb",$arrm);
$smarty->append("bb",array('a'=>'小七','b'=>'董永','c'=>'玉帝'));*/

//采用引用的方式,值改变那过去的值得也改变 $arrm=array();
$smarty->append_by_ref("bb",$arrm);
//$arrm=array();

/****
 * 引用传递  对象和资源
 * 值传递：基本数据类型+数组
 */
//$smarty->assign()//值传递

//$smarty->append_by_ref();//引用传递




/**
 * 一个模板可以产生多个缓存
 */

if($smarty->template_exists("test7.tpl")){
    //判断模板是否存在
}

$smarty->display("test7.tpl");

//$smarty->display("test7.tpl");//删除指定文件

//$smarty->clear_all_cache();//清除所有缓存  可以指定一个以秒为单位的最小时间

//$id=$_GET['id'];
//$smarty->display("test7.tpl",$id);//生成新的$id开头的缓存文件


//$smarty->clear_cache("test7.tpl",$id);//清除指定ID缓存文件

