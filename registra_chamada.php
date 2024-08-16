
<?php 
/*print_r($_POST);*/

/* aqui a gente abriu o arquivo.hd , os dados serao adicionados ao final do arquivo e nao serao apagados */
$arquivo=fopen("arquivo.hd","a");

/* criamos variaveis para trocar o # por - para se alguem escrever # não der problema  */ 
$titulo=str_replace('#','-',$_POST['titulo']);
$categoria=str_replace('#','-',$_POST['categoria']);
$descricao=str_replace('#','-',$_POST['descricao']);

/*criamos uma variavel texto para guarda a informaçao # e concatenamos as variaves dentro da variavel texto / o PHP_EOL para ficar um em baixo do outro*/
$texto =$titulo .'#'. $categoria .'#'. $descricao. PHP_EOL;

/*escreve o conteudo do texto no arquivo*/
fwrite($arquivo,$texto);
 
/*echo $texto;*/

/*ele fecha o arquivo que abrimos que foi o foden */
fclose($arquivo);

/*redirecionamos o navegador para a pagina abrir_chamado.php*/
header('Location: abrir_chamado.php')

?>