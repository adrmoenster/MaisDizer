<!-- FOOTER -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html" class="logo"><img src="<?= INCLUDE_PATH; ?>/img/logo-alt.png" alt=""></a>
                    </div>
                    <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                    <ul class="contact-social">
                        <li><a href="<?= FACEBOOK; ?>" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= TWITTER; ?>" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= GOOGLEPLUS; ?>" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?= INSTAGRAM; ?>" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Categorias</h3>
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
                                       <li><a href="<?= HOME;?>/categoria/<?= $rcat['categoria_nome']; ?>"><?= $rcat['categoria_titulo']; ?> <span><?= $ReadQtd->getRowCount(); ?></span></a></li>
                                        <?php
                                    endif;
                                endforeach;

                            endif;
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Tags +</h3>
                    <div class="tags-widget">
                        <ul>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Estilo de vida</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Viagem</a></li>
                            <li><a href="#">Tecnologia</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Vida</a></li>
                            <li><a href="#">Noticia</a></li>
                            <li><a href="#">Magazine</a></li>
                            <li><a href="#">Comida</a></li>
                            <li><a href="#">Saúde</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="newsletter-widget">
                        <form>
                            <p>Receba em primeira mão nossas ultimas publicações.</p>
                            <input class="input" name="newsletter" placeholder="Informe seu e-mail">
                            <button class="primary-button">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="<?= HOME; ?>">Home</a></li>
                    <li><a href="<?= HOME; ?>/sobrenos">Sobre nós</a></li>
                    <li><a href="<?= HOME; ?>/contato">Contato</a></li>

                </ul>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos Reservados | Feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://zater.com.br" target="_blank">Zater Sistemas</a> 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->