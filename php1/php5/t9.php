<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/Examples/jpgraph/jpgraph.php');
require_once ('jpgraph/Examples/jpgraph/jpgraph_bar.php');


//http://localhost:63342/PhpPrimary/php1/php5/t9.php?id=2


// Create the graph.
$graph = new Graph(350,250);
$graph->SetScale('textlin');
$graph->SetMarginColor('red');

// Setup title

$graph->title->SetFont(FF_ARIAL,FS_NORMAL,16);

//$graph->title->Set("统计情况:万");
//$graph->title->setFont(FF_CHINESE,FS_BOLD,16);  //中文字体报错


if($_REQUEST['id']==1){
    $datay1=array(13,8,19,7,17,6);
    $datay2=array(1,5,2,7,5,25);//绿色柱状图值*/
    $graph->title->Set('zhangqie');
    $graph->title->SetColor('navy');//修改颜色
}else {
    $datay1 = array(13, 8, 19, 7);
    $datay2 = array(1, 5, 2, 25);
    $graph->title->Set('zq');
    $graph->title->SetColor('red');
}



// Create the first bar
$bplot = new BarPlot($datay1);
$bplot->SetFillGradient('AntiqueWhite2','AntiqueWhite4:0.8',GRAD_VERT);
$bplot->SetColor('darkred');

// Create the second bar
$bplot2 = new BarPlot($datay2);
$bplot2->SetFillGradient('olivedrab1','olivedrab4',GRAD_VERT);
$bplot2->SetColor('darkgreen');

// And join them in an accumulated bar
$accbplot = new AccBarPlot(array($bplot,$bplot2));
$graph->Add($accbplot);

$graph->Stroke();
?>
