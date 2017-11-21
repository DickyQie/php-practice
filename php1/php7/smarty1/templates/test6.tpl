<{assign var="aa" value='hello'}>
<p><{$aa}></p>

<p>counter相当于计数器,start起始值,skip记数器间隔、步长,print:是否输出值</p>
<{*counter start=0 skip=2 print=true}>
<{counter}>
<{counter}>
<{counter*}>

<{*mycounter=0  输出值将被赋给模板变量的名称*}>
<{counter start=0 skip=1 assign=mycounter print=false }><br>


<{*间隔换色*}>
<table border="1" width="500px">
    <tr><td>id</td><td>name</td><td>nickname</td></tr>
    <{foreach from=$arr item=sing}>
    <{counter}>
    <{if $mycounter is odd}>
    <tr bgcolor="#8a2be2"><td><{$sing.id}></td><td><{$sing.name}></td><td><{$sing.nickname}></td></tr>
    <{/if}>
    <{if $mycounter is even}>
    <tr bgcolor="aqua"><td><{$sing.id}></td><td><{$sing.name}></td><td><{$sing.nickname}></td></tr>
    <{/if}>
    <{/foreach}>
</table>


<p>cycle</p>

<table border="1" width="500px">
    <tr><td>id</td><td>name</td><td>nickname</td></tr>
    <{foreach from=$arr item=sing}>
    <tr bgcolor="<{cycle values="#8a2be2,aqua"}>"><td><{$sing.id}></td><td><{$sing.name}></td><td><{$sing.nickname}></td></tr>
    <{/foreach}>
</table>

<p>fetch：抓取文件 看成在 TestController5.php中来取路径</p>
<{fetch file="aa.txt"}><br>
<{fetch file="./templates/aa.txt"}>

<p>html_checkboxs:数据创建复选按钮组 </p>
<form action="/PhpPrimary/php1/php7/smarty1/TestControll6post.php" method="post">
<{html_checkboxes options=$arr2 name="hobby" separator="----" selected=$arr3}>
 <input type="submit" value="提交">
</form>

<p>html_options</p>
<select name="myhobby" multiple>
<{html_options options=$arr2 selected=$arr3}>
</select>

<p>html_radio</p>
<{html_radios name="id" options=$arr4 checked="b" separator="&nbsp;"}>
<br>
<{html_select_date start_year="2012"}><br>
<{html_select_time use_24_hours=true }>


<p>html_table</p>
<{html_table loop=$arr5 cols=3 table_attr='border="1"' tr_attr='bgcolor="red"'}>

<p>mailto 联系管理员  火狐IE看效果</p>
<{mailto address='zhangqiem@126.com' text="联系管理员" subject="hello"}>
<br>
<{popup_init src="./js/overlib.js"}>

<a href="#" <{

popup text="<ul><li>支持文本</li><li>支持超文本</li><li><img src='./js/nm.jpg' width='200'/></li></ul>"
caption="我是窗口" width=300 fgcolor="red" sticky=true
textcolor="blue"  snapx=110
}>>书本信息</a>


<{*数据库获取 数据
    <{foreach from=$arr item=book }>
    <{assign var=into value=$book.into}> 数组对应的值
    <a href="#" <{popup text="$into"}>> </a>
    前面有案例(第十行)

*}>
<br>
<br>

<{*自动换行*}>
<{textformat wrap=40}>

This is foo.
This is foo.
This is foo.
This is foo.
This is foo.
This is foo.

This is bar.

bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.
bar foo bar foo foo.

<{/textformat}>
<br>
<br>
<br>




