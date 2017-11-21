<h6>计算所得税</h6>
<{$sal*0.85+300-22}>

<h6>取常量</h6>
<{$smarty.const.TMAX}><br>
<{$smarty.const.TMAX*5}>

<h6>变量调节器</h6>
<{$a|capitalize}>   长度：<{$a|count_characters}>
<h6>自定义调节器多个参数</h6>
<{"aFFFB"|mycap:"hello"}><br>

<p>统计段落数：<{$articleTitle|count_paragraphs}></p>

<p>统计句数：<{$articleTitle|count_sentences}></p>

<p>统计单词个数：<{$articleTitle|count_words}></p>

<p>当前时间:<{$smarty.now|date_format}></p>
<p>time：<{$smarty.now|date_format:"%Y-%m-%d %A"}></p>
<p>当前时间:<{$smarty.now|date_format:"%H:%M:%S"}></p>

<p>default: <{$aa|default:"默认值"}></p>

<p>html文本输出  escape: <{$bb|escape}></p>

<p>换行符：<{$cc|nl2br}></p>

<p>正则：<{$dd|regex_replace:"/(\d\d\d\d)/":"四个数字"}></p>

<p>插空：<{$dd|spacify:"^^"}></p>

<p>去空格替换其他：<{$ee|strip:"--"}></p>

<p>截取：<{$ff|truncate:6}></p>

<p>截取(中文乱码)：<{$ff|truncate:6:"---"}></p>
<p>截取：<{$ff|truncate:6:"":true}></p>

<p>截取(解决中文乱码)：<{$ff1|truncateutf8:8}></p>

<p>行宽约束：<{$gg|wordwrap:10}></p>
<p>行宽约束：<{$gg|wordwrap:20:"<br>\n"}></p>

<p>测试邮箱 <{"zz@qq.com"|ismail}></p>

<p>组合使用<{$a|upper|spacify:"^"|truncate:8}></p>

