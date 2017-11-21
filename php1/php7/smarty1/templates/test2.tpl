<{config_load file="../config/my.conf"}>


<body bgcolor='<{#color#}>'>
<h1>内建函数</h1>
<p>取一维索引数组</p>
<{foreach from=$arr1 item=temp key=ll}>
    <{$ll}>=><{$temp}>
<{/foreach}>
<p>取一维关联数组</p>
<{foreach from=$arr2 item=temp key=k}>
   <{$k}>=><{$temp}>
<{/foreach}>

<p>取二维索引数组</p>
<{foreach from=$arr3 item=temp key=k}>
    <{foreach from=$temp item=val}>
       <{$val}>
    <{/foreach}>
    <br>
<{/foreach}>

<p>取二维关联索引数组</p>
<{foreach from=$arr4 item=temp}>
    <{foreach from=$temp item=val key=k}>
        <{if $k!="b"}>
            <{$k}>=><{$val}>
        <{/if}>
    <{/foreach}>
<br>
<{/foreach}>


<p>取二维关联关联数组</p>
<{foreach from=$arr5 item=temp}>
    <{foreach from=$temp item=val key=k}>
        <{$k}>=><{$val}>
    <{/foreach}>
<br>
    <{/foreach}>

<p>if elseif else</p>
<{if $num>0 and $num<=5}>
    你的数字小于5====<{$num}>
<{elseif $num>5 and $num<10}>
    你的数字大于5====<{$num}>
<{else}>
    你的数字大于10====<{$num}>
<{/if}>
</body>