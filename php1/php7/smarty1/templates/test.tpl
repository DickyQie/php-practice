<{config_load file="../config/my.conf"}>



<body bgcolor='<{#color#}>'>
<h1>显示数据</h1>

<p><{$aa}></p>
<p><{$bb}></p>
<p><{$cc}></p>
<p><{$dd}></p>

<p>数组1 <{$arr1[0]}> --- <{$arr1[1]}> --- <{$arr1[2]}>   --- <{$arr1[3]}></p>

<p>数组2 <{$arr2.a}> --- <{$arr2.b}> </p>

<{* 注释：$arr3[0][0] 表示第一个数据 *}>
<p>二维数组1 <{$arr3[0][0]}> --- <{$arr3[0][1]}> --- <{$arr3[1][1]}> --- <{$arr3[1][2]}></p>

<p>二维数组2 <{$arr4[0].a}> --- <{$arr4[0].b}> --- <{$arr4[1].c}> --- <{$arr4[1].a}></p>

<p>二维数组3 <{$arr5.aa.a}> --- <{$arr5.aa.b}> --- <{$arr5.bb.c}> --- <{$arr5.bb.a}></p>

<p>二维数组4 <{$arr6.aa[0]}> --- <{$arr6.aa[1]}> --- <{$arr6.bb[2]}> --- <{$arr6.bb[0]}></p>

<{*取对象   取对象数组*}>
<p><{$obj->name}> -- <{$obj->age}> -- <{$obj->color}> -- <{$obj->arr[0]}></p>

<p><{$obj->name}> -- <{$obj->arr2[1].a}></p>

<{*对象取对象*}>
<p><{$obj->master->name}>  --- <{$obj->master->address}> </p>

<p>1:<{$obj->showM()}></p>


<{*取配置文件*}>
<p><{#title#}></p>

<{*取get post  session  server  Cookie*}>
<p>get:<{$smarty.get.username}></p>

<p>server:<{$smarty.server.SERVER_NAME}></p>

</body>