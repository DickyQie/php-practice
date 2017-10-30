<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>title</title>

</head>
<body>
<form action="t6.php?act=add" method="post">
    <h1>留言薄</h1>
    <table width="50%" border="1" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4">
        <tr>
            <td align="right">姓名：</td>
            <td><input type="text" name="name" placeholder="请输入名字"/></td>

        </tr>
        <tr>
            <td align="right">标题：</td>
            <td><input type="text" name="title" placeholder="请输入标题"/></td>

        </tr>
        <tr>
            <td align="right">内容：</td>
            <td><textarea rows="6" cols="50" width="500px" placeholder="请输入内容" name="text"></textarea> </td>

        </tr>
        <tr>
            <td align="right">表情：</td>
            <td>
                <input type="radio" name="gif" value="li" checked="checked" />
                <img alt="" width="100" height="50" src="../image/ll.jpg">
                <input type="radio" name="gif" value="baizihua"/>
                <img alt="" width="100" height="50" src="../image/ll.jpg">
                <input type="radio" name="gif" value="rand"/>
                <img alt="" width="100" height="50" src="../image/ll.jpg">
            </td>

        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="sub" value="提交"></td>

        </tr>
    </table>


</form>



</body>

</html>
