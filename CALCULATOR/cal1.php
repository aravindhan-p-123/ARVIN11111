<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    if(isset($_POST['Result'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $option = $_POST['option'];
        switch ($option) {
            case 'add':
                $ans = $n1+$n2;
            break;
            case 'sub':
                $ans = $n1-$n2;
            break;
            case 'multi':
                $ans = $n1*$n2;
            break;
            case 'div':
                $ans = $n1/$n2;
            break;          
        }
    }
    ?>
    <div class="Calculator">
        <h2 class="title">Calculator</h2>
        
        <form>           
            <input type="text" name="n1" class="n"  placeholder="Enter The Number" required>
            <input type="text" name="n2" class="n"  placeholder="Enter The Number" required>
            <select class="opt" name="option">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="multi">x</option>
                <option value="div">/</option>
            </select>
            <input type="submit" name="Result" value="<?php  echo @$Result;?>"/ class="result">                                         
        </form>
        <?php if(isset($_POST['Result'])){ ?>
            <input type="text" value="<?php echo $ans; ?>" class="n">
        <?php }else{ ?>
            <input type="text" value="0" class="n">
        <?php } ?>            
    </div>
</body>
</html>