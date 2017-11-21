
<{capture name=banner}>
    我的capture
<{/capture}>
<p><{$smarty.capture.banner}></p>

<{foreach from=$a item=city}>
    <{$city}>
<{foreachelse}>
<{"没有值"}>
<{/foreach}>

<{if "2" is odd}>
    <p>是一个奇数</p>
<{else}>
    <p>是一个偶数</p>
<{/if}>

<p>分隔符：输出 <{ldelim}> <{rdelim}>  </p>

<p>数据将被当作文本处理</p>
<{literal}>
<{$hello}>
<{/literal}>

<p>section 用于遍历数组中的数据</p>
<{*给数组取一个名字 loop表示对那个数组循环*}>
<{section name=city start="0" step="2"  loop=$arr1}>
    name:<{$arr1[city]}>
<{/section}>

<br>
<{section name=nmen loop=$arr2}>
<{$arr2[nmen].a}>---<{$arr2[nmen].b}><br>
<{/section}>

<p>strip:空格和回车影响HTML输出的情形(查看源码)</p>
<{strip}>
    <table border=0>
        <tr>
            <td>
                <A HREF="{$url}">
                    <font color="red">This is a test</font>
                </A>
            </td>
        </tr>
    </table>
<{/strip}>


<{include file="top.tpl" title="我是标题"}>

<p>index</p>

<{include file="bottom.tpl"}>



