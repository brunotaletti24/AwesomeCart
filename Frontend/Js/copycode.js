var btnCode = document.getElementById('btnCode');
btnCode.onclick = function(){
        var myCode = document.getElementById('copyCode').value;
        var code = document.createElement('input');
        document.body.appendChild(code);
        code.value = myCode;
        code.select();
        document.execCommand("copy", false);
        code.remove();
        alert("Code: " + code.value);
    }