




<!-- Main content -->
<div class="content-wrapper">
    <div class="content">
        <!-- Input formatter -->
        <?php
        //Aqui está filtrando com segurança as informações que vem pelo post
        $CatDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $CatId = filter_input(INPUT_GET, 'catid', FILTER_VALIDATE_INT);
        if (isset($CatDados)):

            //Aqui está requerindo o (Classe)model responsável por atualizar as Categorias, obs. como é front controler não precisa passar retorno de pastas, isso porque estará rodando dentro do painel.php
            require_once ('model/AdminCategoria.class.php');
            $edita = new AdminCategoria;
            $edita->EditaCategoria($CatId, $CatDados);

            ZTErro($edita->getError()[0], $edita->getError()[1]);

        else:
            $read = new Read;
            $read->ExeRead("categoria", "WHERE categoria_id = :id", "id={$CatId}");
            if (!$read->getResult()):
                //Aqui da redirecionamento parar index
                header('Location: painel.php?exe=categoria/lista&empty=true');
            endif;
            $CatDados = $read->getResult()[0];
        endif;

        //Aqui irá verificar existencia do parametro cadastra na url e exibir a mensagem
        $checkCreate = filter_input(INPUT_GET, 'cadastra', FILTER_VALIDATE_BOOLEAN);
        if ($checkCreate && empty($cadastra)):
            //Aqui verifica se é uma seção ou uma categoria
            $tipo = (empty($CatDados['categoria_pai']) ? 'seção' : 'categoria');
            ZTErro("A {$tipo} <b>{$CatDados['categoria_titulo']}</b> foi cadastrada com sucesso no sistema! Continue atualizando a mesma!", ZT_ACCEPT);

        endif;
        ?>
        <div class="card">

            <div class="card-header header-elements-inline">
                <h5 class="card-title">Editar Categoria</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="painel.php?exe=categoria/cadastra"><button class="btn bg-teal-400">Cadastrar Novo</button></a>
                    </div>
                </div>
            </div>
            <form method="post" name="CategoriaEditForm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">Status <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="categoria_status" value="on" data-fouc <?php if (isset($CatDados['categoria_status']) && $CatDados['categoria_status'] == 'on') echo 'checked="""'; ?>>
                                        Ativo
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="categoria_status" value="of" data-fouc <?php if (isset($CatDados['categoria_status']) && $CatDados['categoria_status'] == 'of') echo 'checked="""'; ?>>
                                        Inativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="categoria_data" value="<?php if (isset($CatDados)) echo $CatDados['categoria_data']; ?>">
                                <span class="form-text text-muted">99/99/9999</span>
                            </div>      
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Seção / Categoria <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="categoria_titulo" value="<?php if (isset($CatDados)) echo $CatDados['categoria_titulo']; ?>" placeholder="Informe o nome da Categoria ou Seção">

                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <h6 class="font-weight-semibold">Descrição</h6>
                                <p class="mb-3">Descreva informações pertinentes a esta categoria/Seção, as informações aqui descritas aparecerão nos motores de busca.</p>

                                <div class="form-group">
                                    <textarea rows="4" cols="4" class="form-control elastic" placeholder="Textarea" name="categoria_descricao"><?php if (isset($CatDados)) echo $CatDados['categoria_descricao']; ?></textarea>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Escolha Seção </label>
                                <div class="col-lg-9">
                                    <select name="categoria_pai" class="form-control form-input-styled" data-fouc>
                                        <option value="<?= null; ?>">Escolha uma Seção</option> 
                                        <?php
                                        $readSes = new Read;
                                        $readSes->ExeRead("categoria", "WHERE categoria_pai IS NULL ORDER BY categoria_titulo ASC");
                                        if (!$readSes->getResult()):
                                            echo '<option disabled="disabled" value="null"> Cadastre antes uma seção! </option>';
                                        else:
                                            foreach ($readSes->getResult() as $ses):
                                                //Primeiro laço está recebendo um id para vincular os resultados
                                                echo "<option value=\"{$ses['categoria_id']}\" ";
                                                //Se essa condição for verdadeira quer dizer que esse que será o selecionado então persiste
                                                if ($ses['categoria_id'] == $CatDados['categoria_pai']):
                                                    echo ' selected="selected" ';
                                                endif;
                                                //Aqui é parar poder saber a qual seção é categoria que está selecionando 
                                                echo "> {$ses['categoria_nome']} </option>";
                                            endforeach;
                                        endif;
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-between align-items-center bg-blue-400 border-top-0">

                    <button type="submit" class="btn btn-outline bg-white text-white border-white border-2">Salvar <i class="icon-paperplane ml-2"></i></button>
                </div>

            </form>
        </div>
        <!-- /input formatter -->

    </div>


</div>
<!-- /main content -->