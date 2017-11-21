<script type="text/javascript">

function checkPageNow(){
    var pageNow=document.getElementById('pageNow').value;
    var re = /^[1-9](\d)*$/;
    if(pageNow!=""){
        if(!re.test(pageNow)){
            alert("输入正确的字符1");
            document.getElementById("pageNow").value=pageNow.substring(0,pageNow.length-1);
            return false;
        }else{
            if(pageNow > <{$pagecount}>){
                alert("你的数字过大");
                document.getElementById("pageNow").value=pageNow.substring(0,pageNow.length-1);
                }
         }
    }else{
      alert("null");
    }
}
</script>