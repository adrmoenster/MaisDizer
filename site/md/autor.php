
<?php
if ($Link->getDados()):
    extract($Link->getDados());
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;
?>
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <div class="author">

                    <?php
                    if ($usuario_avatar == null || $usuario_avatar == ''):
                        ?>
                        <img class="author-img center-block" src="<?= INCLUDE_PATH; ?>/img/avatar88.png" alt="">
                        <?php
                    else:
                        ?>
                        <img class="author-img center-block" src="<?= HOME; ?>/avatars<?= $usuario_avatar ?>" alt="">
                    <?php
                    endif;
                    ?>

                    <h1 class="text-uppercase"><?= $usuario_nome; ?></h1>
                    <p class="lead"><?= $usuario_sobre; ?></p>
                    <ul class="author-social">
                        <li><a target="_blank" href="<?= $usuario_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="<?= $usuario_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="<?= $usuario_googleplus; ?>"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="<?= $usuario_instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->	
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <?php
                $ReadPost = new Read;
                $ReadPost->ExeRead('post', "WHERE post_status = 'on' AND post_autor = :user", "user={$usuario_id}");
                if ($ReadPost->getResult()):
                    foreach ($ReadPost->getResult() AS $post):
                        ?>
                        <!-- post -->
                        <div class="post post-row">
                            <a class="post-img" href="<?= HOME; ?>/post/<?= $post['post_nome'] ?>"><img src="<?= HOME; ?>/uploads/<?= $post['post_capa']; ?>" alt=""></a>
                            <div class="post-body">
                                <?php
                                $ReadCat = new Read;
                                $ReadCat->ExeRead('categoria', "WHERE categoria_status = 'on' AND (categoria_id = :cat OR categoria_pai = :cat)", "cat={$post['post_categoria']}");
                                if ($ReadCat->getResult()):
                                    foreach ($ReadCat->getResult() AS $cat):
                                        ?>
                                        <div class="post-category">
                                            <a href="<?= HOME; ?>/categoria/<?= $cat['categoria_nome']; ?>"><?= $cat['categoria_titulo'] ?></a>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                                <h3 class="post-title"><a href="<?= HOME; ?>/post/<?= $post['post_nome'] ?>"><?= Check::Words($post['post_titulo'], 7); ?></a></h3>
                                <ul class="post-meta">
                                    <?php
                                    if ($post['post_autor'] == $usuario_id):
                                        ?>
                                        <li><a href="<?= HOME; ?>/autor/<?= $usuario_link ?>"><?= $usuario_nome; ?></a></li>
                                        <?php
                                    endif;
                                    ?>
                                    <li><?= strftime('%d de %B de %Y', strtotime($post['post_data'])); ?></li>
                                </ul>
                                <p><?= Check::Words($post['post_conteudo'], 16); ?></p>
                            </div>
                        </div>
                        <!-- /post -->
                        <?php
                    endforeach;
                endif;
                ?>



                <div class="section-row loadmore text-center">
                    <a href="#" class="primary-button">Load More</a>
                </div>
            </div>

            <div class="col-md-4">
                <!-- ad widget-->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="<?= INCLUDE_PATH; ?>/img/ad-3.jpg" alt="">
                    </a>
                </div>
                <!-- /ad widget -->

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Seguidores</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Seguidores</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Seguidores</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- categoria widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categorias</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <?php
                            $ReadCat = new Read;
                            $ReadCat->ExeRead('categoria', "WHERE categoria_status = 'on' ORDER BY categoria_id DESC");
                            if ($ReadCat->getResult()):
                                foreach ($ReadCat->getResult() AS $rcat):
                                    $ReadQtd = new Read;
                                    $ReadQtd->ExeRead('post', "WHERE post_categoria = :cat", "cat={$rcat['categoria_id']}");
                                    if ($ReadQtd->getRowCount() >= 1):
                                        ?>
                                        <li><a href="<?= HOME; ?>/categoria/<?= $rcat['categoria_titulo']; ?>"><?= $rcat['categoria_titulo']; ?> <span><?= $ReadQtd->getRowCount(); ?></span></a></li>
                                        <?php
                                    endif;
                                endforeach;

                            endif;
                            ?>

                        </ul>
                    </div>
                </div>
                <!-- /categoria widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Receba em primeira mão nossas ultimas publicações.</p>
                            <input class="input" name="newsletter" placeholder="Informe seu Email">
                            <button class="primary-button">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->
                <!-- Ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="<?= INCLUDE_PATH; ?>/img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /Ad widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->