<{assign var="aa" value='hello'}>
<p><{$aa}></p>

<{$arr[1]}>



<p>当前时间:<{insert name=mytime}></p>
<p>time：<{$smarty.now|date_format:"%Y-%m-%d %A"}></p>
<p>当前时间:<{$smarty.now|date_format:"%H:%M:%S"}></p>

<p>访问该页面的次数是：<{insert name=mycount}></p>


<{foreach from=$aaa item=val}>
    <{$val}>
<{/foreach}>
<br>
<{foreach from=$bb item=val}>
    <{$val.a}> -- <{$val.b}> -- <{$val.c}>
    <br>
<{/foreach}>

