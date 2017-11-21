

<body bgcolor='<{#color#}>'>
<h2>自定义函数</h2>
<{zq con="hello" color="red" size="3"}>

<h2>块自定义函数</h2>
<{fun1 color="blue" size="3"}>
    hello,zhangqie
<{/fun1}>

<h2>练习</h2>
<{jisuan num1="3" num2="3" oper="/"}>


<h2>自定义插件函数  在libs下面的plugins下的function_zhangqie 文件下</h2>
<{zhangqie con="hello" color="green" size="3"}>


<h2>自定义插件块函数  在libs下面的plugins下的block_zhangq 文件下</h2>
<{zhangq color="blue" size="3"}>
    hello,zhangqie
<{/zhangq}>

<h2>直接调用smarty提供的标签</h2>
<{html_select_date prefix="StartDate" time=$time start_year="-5" end_year="+1" display_days=true
}>
<{html_select_time use_24_hours=true}>

</body>