
<?php
if ($Link->getDados()):
    extract($Link->getDados());
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;

$View = new View;
?>
<!-- PAGE HEADER -->
<div class="page-header">
    <div class="page-header-bg" style="background-image: url('<?= HOME; ?>/site/md/img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase"><?= $categoria_titulo ?></h1>
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
                $ReadPostG = new Read;
                $ReadPostG->ExeRead("post", "WHERE post_status = 'on' AND (post_categoria_pai = :id OR post_categoria = :id) ORDER BY post_id DESC LIMIT 1 OFFSET 0", "id={$categoria_id}");
                if ($ReadPostG->getResult()):
                    foreach ($ReadPostG->getResult() AS $postg):
                        ?>

                        <!-- post -->
                        <div class="post post-thumb">
                            <a class="post-img" href="<?= HOME . '/post/' . $postg['post_nome']; ?>"><img src="<?= HOME; ?>/uploads<?= $postg['post_capa'] ?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="<?= HOME . '/categoria/' . $categoria_nome; ?>"><?= $categoria_titulo; ?></a>

                                </div>
                                <h3 class="post-title title-lg"><a href="<?= HOME . '/post/' . $postg['post_nome']; ?>"><?= Check::Words($postg['post_titulo'], 10); ?></a></h3>
                                <ul class="post-meta">
                                    <?php
                                    $ReadUser = new Read;
                                    $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$postg['post_autor']}");
                                    if ($ReadUser->getResult()):
                                        foreach ($ReadUser->getResult() AS $user):
                                            ?>
                                            <li><a href="<?= HOME . '/autor/' . $user['usuario_link']; ?>"><?= $user['usuario_nome']; ?></a></li>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                    <li><?= strftime('%d de %B de %Y', strtotime($postg['post_data'])); ?></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /post -->
                        <?php
                    endforeach;
                endif;
                ?>
                <div class="row">
                    <!-- post -->
                    <?php
                    $ReadFor = new Read;
                    $ReadFor->ExeRead('post', "WHERE post_status = 'on' AND (post_categoria_pai = :id OR post_categoria = :id) ORDER BY post_id DESC LIMIT 4 OFFSET 1", "id={$categoria_id}");
                    if ($ReadFor->getResult()):
                        foreach ($ReadFor->getResult() AS $rfor):
                            ?>
                            <div class="col-md-6">
                                <div class="post">
                                    <a class="post-img" href="<?= HOME . '/post/' . $rfor['post_nome']; ?>"><img src="<?= HOME; ?>/uploads<?= $rfor['post_capa'] ?>" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="<?= HOME . '/categoria/' . $categoria_nome; ?>"><?= $categoria_titulo ?></a>
                                        </div>
                                        <h3 class="post-title"><a href="<?= HOME . '/post/' . $rfor['post_nome']; ?>"> <?= Check::Words($rfor['post_titulo'], 6); ?></a></h3>
                                        <ul class="post-meta">
                                            <?php
                                            $ReadUser = new Read;
                                            $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$postg['post_autor']}");
                                            if ($ReadUser->getResult()):
                                                foreach ($ReadUser->getResult() AS $user):
                                                    ?>
                                                    <li><a href="<?= HOME . '/autor/' . $user['usuario_link']; ?>"><?= $user['usuario_nome']; ?></a></li>
                                                    <?php
                                                endforeach;
                                            endif;
                                            ?>
                                            <li><?= strftime('%d de %B de %Y', strtotime($rfor['post_data'])); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;
                    ?>
                    <!-- /post -->


                </div>

                <!-- post -->
                <?php
                $ReadList = new Read;
                $ReadList->ExeRead('post', "WHERE post_status = 'on' AND (post_categoria_pai = :id OR post_categoria = :id) ORDER BY post_id DESC LIMIT 10 OFFSET 5", "id={$categoria_id}");
                if ($ReadFor->getResult()):
                    foreach ($ReadList->getResult() AS $rlist):
                        ?>
                        <div class="post post-row">
                            <a class="post-img" href="<?= HOME . '/post/' . $rlist['post_nome']; ?>"><img src="<?= HOME; ?>/uploads<?= $rlist['post_capa']; ?>" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="<?= HOME . '/categoria/' . $categoria_nome; ?>"><?= $categoria_titulo; ?></a>

                                </div>
                                <h3 class="post-title"><a href="<?= HOME . '/post/' . $rlist['post_nome']; ?>"><?= Check::Words($rlist['post_titulo'], 9); ?></a></h3>
                                <ul class="post-meta">
                                    <?php
                                    $ReadUser = new Read;
                                    $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$postg['post_autor']}");
                                    if ($ReadUser->getResult()):
                                        foreach ($ReadUser->getResult() AS $user):
                                            ?>
                                            <li><a href="<?= HOME . '/autor/' . $user['usuario_link']; ?>"><?= $user['usuario_nome']; ?></a></li>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                    <li><?= strftime('%d de %B de %Y', strtotime($rlist['post_data'])); ?></li>
                                </ul>
                                <p><?= Check::Words($rlist['post_conteudo'], 25); ?></p>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>
                <!-- /post -->



                <div class="section-row loadmore text-center">
                    <a href="#" class="primary-button">Veja Mais</a>
                </div>
            </div>

            <div class="col-md-4">
                <!-- ad widget/Publicidade-->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="<?= INCLUDE_PATH; ?>/img/ad-3.jpg" alt="">
                    </a>
                </div>
                <!-- /ad widget /Publicidade-->

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Media Social</h2>
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
                                        <li><a href="<?= HOME;?>/categoria/<?= $rcat['categoria_titulo']; ?>"><?= $rcat['categoria_titulo']; ?> <span><?= $ReadQtd->getRowCount(); ?></span></a></li>
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
                            <input class="input" name="newsletter" placeholder="Informe seu e-mail">
                            <button class="primary-button">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Mais Populares</h2>
                    </div>
                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="<?= INCLUDE_PATH; ?>/img/widget-3.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="<?= INCLUDE_PATH; ?>/img/widget-2.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Technology</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="<?= INCLUDE_PATH; ?>/img/widget-4.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="<?= INCLUDE_PATH; ?>/img/widget-5.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /post widget -->

                <!-- galery widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="<?= INCLUDE_PATH; ?>/img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /galery widget -->

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