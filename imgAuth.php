<?php
    $str="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
    str_shuffle($str);
    $word=substr(str_shuffle($str),26,5);
?>

<h1>ImgAuth</h1>
<hr>
IMG :  <img src="imgforAuth.php?word=<?php echo $word;?>"
onclick="location.href='imgAuth.php'"><br>
Enter the word in the image:
<input type="text" name="auth" id="auth">
<input type="submit" value="enter" onclick="authWord()">
<span id="check"></span>

<script>
    function authWord() {
        let w = document.getElementById('auth').value;
        if (w == '<?php echo $word;?>') {
            document.getElementById('check').innerHTML='check OK';
        } else {
            document.getElementById('check').innerHTML='Wrong!!!';
        }
    }
</script>

