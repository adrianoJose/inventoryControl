<?php
$botao1 = "";
$botao2 = "";

if ($acao == "adicionar") {
    $botao1 = "Salvar";
    $botao2 = "Limpar";
} else if ($acao == "atualizar") {
    $botao1 = "Salvar";
    $botao2 = "Cancelar";
} else if ($acao == "remover") {
    $botao1 = "Excluir";
    $botao2 = "Cancelar";
}else if($op == "usuario") {
	$botao1 = "Salvar";
	$botao2 = "Cancelar";
}
?>
<?php
if ($acao == "atualizar" || $acao == "remover" || $op == "usuario") {
    ?>
    <button type="submit" class="btn btn-success" id="adicionar" name="btn_adicionar" onclick="return confirm('Deseja realmente fazer isso?');"><?php echo $botao1 ?></button>
    <?php
} else {
    ?>
    <button type="submit" class="btn btn-success" id="adicionar" name="btn_adicionar"><?php echo $botao1 ?></button>	
    <?php
}
?>

<?php
if ($acao == "atualizar" || $acao == "remover") {
    ?>
    <button type="reset" class="btn btn-danger" id="limpar" name="btn_limpar" onclick="goHomeProduto();"><?php echo $botao2 ?></button>
    <?php
} else {
    ?>
    <button type="reset" class="btn btn-danger" id="limpar" name="btn_limpar"><?php echo $botao2 ?></button>		
    <?php
}
?>
