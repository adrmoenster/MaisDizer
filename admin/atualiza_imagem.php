<?php
require_once '../_app/Config.inc.php';
require_once 'model/AdminPost.class.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //Buscando as informações passadas por post
$imgid = filter_input(INPUT_GET, 'gbup', FILTER_VALIDATE_INT); //Verificando na url e procurando pela string postid(postid=)

$readLeg = new Read;
$readLeg->ExeRead('postgaleria', "WHERE galeria_id = :id", "id={$imgid}");
if ($readLeg->getRowCount() >= 1):
    foreach ($readLeg->getResult() AS $ses):
        if (isset($dados) && $dados['SendPostForm'])://Verifica se existe o post e precisa ter indice SendPostForm, se sim entra então neste if
            unset($dados['SendPostForm']);

            $salva = new AdminPost; //Instanciando a classe AdminPost
            $salva->gbUpdate($imgid, $dados); //Executando o metodo ExeUpdate da classe AdminUpdate, neste passando resultado obtido pela verificação na url $postid e os dados vindos via $post
            ZTErro($salva->getError()[0], $salva->getError()[1]); //Mensagem de erro retornada pela classe AdminPost
            ?>
            <script>
                window.close();
            </script>

            <?php
        endif;
        ?>

        <html>
            <head>
                <title>

                </title>
            </head>
            <body>

                <form name="PostForm" action="" method="post">
                    <label>Descrição da Imagem</label>

                    <br/>

                    <textarea class="span9" name="galeria_legenda" rows="10" cols="65">
                        <?php if (isset($ses['galeria_legenda'])) echo htmlspecialchars($ses['galeria_legenda']); ?>
                    </textarea>


                </textarea>

                <br/>
                <input type="submit" name="SendPostForm" value="SALVAR">

            </form>
        </body>
        </html>
        <?php
    endforeach;
endif;
?>