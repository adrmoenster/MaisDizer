
<?php
if ($Link->getDados()):
    extract($Link->getDados());
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;
?>
<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url('<?= HOME; ?>/uploads<?= $post_capa; ?>');" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <?php
                    $ReadCat = new Read;
                    $ReadCat->ExeRead('categoria', "WHERE categoria_status = 'on' AND (categoria_id = :cat OR categoria_pai = :cat)", "cat={$post_categoria}");
                    if ($ReadCat->getResult()):
                        foreach ($ReadCat->getResult() AS $rcat):
                            ?>
                            <a href="<?= HOME; ?>/categoria/<?= $rcat['categoria_nome'] ?>"><?= $rcat['categoria_titulo']; ?></a>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <h1><?= $post_titulo; ?></h1>
                <ul class="post-meta">
                    <?php
                    $ReadUser = new Read;
                    $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$post_autor}");
                    if ($ReadUser->getResult()):
                        foreach ($ReadUser->getResult() AS $user):
                            ?>
                            <li><a href="<?= HOME . '/autor/' . $user['usuario_link']; ?>"><?= $user['usuario_nome']; ?></a></li>
                            <?php
                        endforeach;
                    endif;
                    ?>
                    <li><?= strftime('%d de %B de %Y', strtotime($post_data)); ?></li>

                    <li><i class="fa fa-eye"></i> <?= $post_acessos; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->	
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post share -->
                <div class="section-row">
                    <div class="post-share">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= HOME . '/post/' . $post_nome ?>" class="social-facebook"><i class="fa fa-facebook"></i><span>Compartilhar</span></a>
                        <a target="_blank" href="https://twitter.com/share?url=<?= HOME . '/post/' . $post_nome ?>&amp;text=<?= SITENAME; ?> - <?= SITESLOGAN; ?> &amp;hashtags=<?= $post_tag; ?>" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?text=<?= HOME . '/post/' . $post_nome ?>" class="social-whatsapp"><i class="fa fa-whatsapp"></i><span>Tweet</span></a>
                        <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>

                    </div>
                </div>
                <!-- /post share -->

                <!-- post content -->
                <div class="section-row">
                    <?= $post_conteudo; ?>
                </div>
                <!-- /post content -->
                <!-- post share -->
                <div class="section-row">
                    <div class="post-share">
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= HOME . '/post/' . $post_nome ?>" class="social-facebook"><i class="fa fa-facebook"></i><span>Compartilhar</span></a>
                        <a target="_blank" href="https://twitter.com/share?url=<?= HOME . '/post/' . $post_nome ?>&amp;text=<?= SITENAME; ?> - <?= SITESLOGAN; ?> &amp;hashtags=<?= $post_tag; ?>" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a target="_blank" href="https://api.whatsapp.com/send?text=<?= HOME . '/post/' . $post_nome ?>" class="social-whatsapp"><i class="fa fa-whatsapp"></i><span>Tweet</span></a>
                        <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>

                    </div>
                </div>
                <!-- /post share -->
                <!-- post tags -->
                <div class="section-row">
                    <div class="post-tags">
                        <ul>
                            <li>TAGS:</li>
                            <li><a href="#"><?= $post_tag ?></a></li>

                        </ul>
                    </div>
                </div>
                <!-- /post tags -->


                <?php
                $ReadUser = new Read;
                $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$post_autor}");
                if ($ReadUser->getResult()):
                    foreach ($ReadUser->getResult() AS $user):
                        ?>
                        <!-- post author -->
                        <div class="section-row">
                            <div class="section-title">
                                <h3 class="title">Sobre <a href="<?= HOME; ?>/autor/<?= $user['usuario_link'] ?>"><?= $user['usuario_nome'] ?></a></h3>
                            </div>
                            <div class="author media">
                                <div class="media-left">

                                    <?php
                                    if ($user['usuario_avatar'] == null || $user['usuario_avatar'] == ''):
                                        ?>
                                        <a href="<?= HOME; ?>/autor/<?= $user['usuario_link'] ?>"><img class="author-img media-object" src="<?= INCLUDE_PATH; ?>/img/avatar88.png" alt=""></a>
                                        <?php
                                    else:
                                        ?>
                                        <a href="<?= HOME; ?>/autor/<?= $user['usuario_link'] ?>">
                                            <img class="author-img media-object" src="<?= HOME; ?>/avatars<?= $user['usuario_avatar'] ?>" alt="">
                                        </a>
                                    <?php
                                    endif;
                                    ?>


                                </div>
                                <div class="media-body">
                                    <p><?= $user['usuario_sobre']; ?></p>
                                    <ul class="author-social">
                                        <li><a target="_blank" href="<?= $user['usuario_facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" href="<?= $user['usuario_twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="<?= $user['usuario_googleplus'] ?>"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" href="<?= $user['usuario_instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /post author -->
                        <?php
                    endforeach;
                endif;
                ?>

                <!-- /related post -->
                <div>
                    <div class="section-title">
                        <h3 class="title">POSTS RELACIONADOS</h3>
                    </div>
                    <div class="row">
                        <?php
                        $ReadRel = new Read;
                        $ReadRel->ExeRead('post', "WHERE post_status = 'on' AND (post_categoria = :cat OR post_categoria_pai = :cat) ORDER BY rand() LIMIT 3 OFFSET 0", "cat={$post_categoria}");
                        if ($ReadRel->getResult()):
                            foreach ($ReadRel->getResult() AS $rrel):
                                ?>
                                <!-- post -->
                                <div class="col-md-4">
                                    <div class="post post-sm">
                                        <a class="post-img" href="<?= HOME; ?>/post/<?= $rrel['post_nome'] ?>"><img src="<?= HOME; ?>/uploads/<?= $rrel['post_capa']; ?>" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-category">
                                                <?php
                                                $ReadCat = new Read;
                                                $ReadCat->ExeRead('categoria', "WHERE categoria_status = 'on' AND (categoria_id = :cat OR categoria_pai = :cat)", "cat={$rrel['post_categoria']}");
                                                if ($ReadCat->getResult()):
                                                    foreach ($ReadCat->getResult() AS $rcat):
                                                        ?>

                                                        <a href="<?= HOME; ?>/categoria/<?= $rcat['categoria_nome'] ?>"><?= $rcat['categoria_titulo'] ?></a>

                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                            <h3 class="post-title title-sm"><a href="<?= HOME; ?>/post/<?= $rrel['post_nome'] ?>"><?= Check::Words($rrel['post_titulo'], 7); ?></a></h3>
                                            <ul class="post-meta">
                                                <?php
                                                $ReadUser = new Read;
                                                $ReadUser->ExeRead('usuario', "WHERE usuario_status = 'on' AND usuario_id = :userid", "userid={$rrel['post_autor']}");
                                                if ($ReadUser->getResult()):
                                                    foreach ($ReadUser->getResult() AS $user):
                                                        ?>
                                                        <li><a href="<?= HOME; ?>/autor/<?= $user['usuario_link'] ?>"><?= $user['usuario_nome']; ?></a></li>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>

                                                <li><?= strftime('%d de %B de %Y', strtotime($rrel['post_data'])); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /post -->
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </div>
                </div>
                <!-- /related post -->

                <!-- post comments -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">3 Comments</h3>
                    </div>
                    <div class="post-comments">
                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="<?= INCLUDE_PATH; ?>/img/avatar-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="reply">Reply</a>
                                <!-- comment -->
                                <div class="media media-author">
                                    <div class="media-left">
                                        <img class="media-object" src="<?= INCLUDE_PATH; ?>/img/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>John Doe</h4>
                                            <span class="time">5 min ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <!-- /comment -->
                            </div>
                        </div>
                        <!-- /comment -->

                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="<?= INCLUDE_PATH; ?>/img/avatar-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                        <!-- /comment -->
                    </div>
                </div>
                <!-- /post comments -->

                <!-- post reply -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">Leave a reply</h3>
                    </div>
                    <form class="post-reply">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="primary-button">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- /post reply -->
            </div>
            <div class="col-md-4">
                <!-- ad widget -->
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
                            <input class="input" placeholder="Informe seu Email">
                            <button class="primary-button">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Posts Populares</h2>
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