
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vila e Vitória</title>

<link rel="stylesheet" href="estilo.css" type="text/css" />

</head>

<body>
        <div id="containerParaBotoes">lo
            <?php
            include_once './conexao.php'; 
            $sql = "select nome from produto";            
            $result = mysqli_query($conexao,$sql);
            
            while($row = mysqli_fetch_array($result)){
            ?>
            <div id="containerBotao">
            <h2><?php echo $row["nome"]?></h2></div>
            <?php }?>
        </div>
</body>
<?php        ?>
