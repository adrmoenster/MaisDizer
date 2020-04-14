

<div class="content-wrapper">
    <div class="row">


        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <?php
                    extract($_SESSION['userlogin']);
                    $UsuarioDados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //Recebendo via post os dados informados pelo formulario
                    $usuarioId = $_SESSION['userlogin']['usuario_id']; //Atribuindo a váriável $usuarioId o conteudo usuario_id da seção userlogin
                    var_dump($UsuarioDados);

                    if (isset($UsuarioDados))://Verificando se existe o conteudo enviado por post e atribuido a variável $UsuarioDados e também se o nome do post enviado é SendPostForm 
                        $UsuarioDados['usuario_avatar'] = ( $_FILES['usuario_avatar']['tmp_name'] ? $_FILES['usuario_avatar'] : 'null' );

                        extract($UsuarioDados);
                        require_once('model/AdminUsuario.class.php'); //Requerindo acesso a classe AdminUsuario
                        $cadastra = new AdminUsuario; //Estanciando a classe AdminUsuario
                        $cadastra->EditaUsuario($usuarioId, $UsuarioDados); //Executando o metodo ExeUpdate da Classe AdminUsuario, este metodo recebendo o id do usuário e os dados via post

                        if ($cadastra->getResult()):

                            ZTErro($cadastra->getError()[0], $cadastra->getError()[1]);
                        else:

                            ZTErro($cadastra->getError()[0], $cadastra->getError()[1]);
                        endif;
                    else:

                        extract($_SESSION['userlogin']);

                    endif;
                    ?>
                    <h4 class="card-title">Meu Perfil</h4>
                    <form class="form-sample" method="post" name="UserCreateForm" autocomplete="off" enctype="multipart/form-data">
                        <p class="card-description">
                            Informações do sistema
                        </p>
                        <div class="form-group">
                            <label>Foto do Perfil</label>
                            <input type="file" name="usuario_avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" value="<?= $usuario_email ?>" name="usuario_email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Senha</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control"title = "Informe uma senha [ de 6 a 12 caracteres! ]" value="" name="usuario_senha"/>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <p class="card-description">
                            Informações Pessoais
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nome</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_nome ?>" name="usuario_nome"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sobrenome</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_sobrenome ?>" name="usuario_sobrenome"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Genêro</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Masculino</option>
                                            <option>Feminino</option>
                                            
          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Data Nascimento</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control" placeholder="dd/mm/yyyy" value="" name="usuario_nascimento"/>
                                                                    </div>
                                                                </div>-->
                            </div>
                        </div>


                        <p class="card-description">
                            Endereço
                        </p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">CEP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_cep ?>" name="usuario_cep"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Endereço</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_endereco ?>" name="usuario_endereco"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Numero</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_numero ?>" name="usuario_numero"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Referência</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario_referencia ?>" name="usuario_referencia"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">País</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="usuario_pais">
                                            <option disabled=\"disabled\">Escolha...</option>
                                            <?php
                                            $ReadPais = new Read;
                                            $ReadPais->ExeRead("pais", "WHERE pais_id != 'null' ORDER BY pais_nome");
                                            if ($ReadPais->getRowCount() >= 1):

                                                foreach ($ReadPais->getResult() AS $PA):
                                                
                                                    echo "<option ";

                                                    
                                                    echo "selected=\"selected\" value=\"{$PA['pais_id']}\"> {$PA['pais_nome']} - {$PA['pais_sigla']}</option>";
                                                
                                                endforeach;



                                            endif;
                                            ?>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Estado</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="usuario_estado">
                                            <option disabled=\"disabled\">Escolha...</option>
                                            <?php
                                            $ReadEstado = new Read;
                                            $ReadEstado->ExeRead("estado", "WHERE estado_id != 'null' ORDER BY estado_nome");
                                            if ($ReadEstado->getRowCount() >= 1):
                                                foreach ($ReadEstado->getResult() AS $ES):
                                                    echo "<option ";

                                                    echo "selected=\"selected\" value=\"{$ES['estado_id']}\"> {$ES['estado_nome']} - {$ES['estado_sigla']}</option>";
                                                endforeach;

                                            endif;
                                            ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Cidade</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="usuario_cidade">
                                            <option disabled=\"disabled\">Escolha...</option>
                                            <?php
                                            $ReadCidade = new Read;
                                            $ReadCidade->ExeRead("cidade", "WHERE cidade_id != 'null' ORDER BY cidade_nome");
                                            if ($ReadCidade->getRowCount() >= 1):
                                                foreach ($ReadCidade->getResult() AS $CI):
                                                    echo "<option ";

                                                    echo "selected=\"selected\" value=\"{$CI['cidade_id']}\"> {$CI['cidade_nome']}</option>";
                                                endforeach;

                                            endif;
                                            ?>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" value="Salvar">Salvar</button>
                        <button class="btn btn-light">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>      







    </div>
</div>
<!-- content-wrapper ends -->



