<!DOCTYPE HTML>

<html>

<head>
    <title>DECOR STUDIO JMIX </title>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <!----start-alert-scroller---->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easy-ticker.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#demo').hide();
            $('.vticker').easyTicker();
        });
    </script>
    <!----start-alert-scroller---->
    <!-- start menu -->
    <link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
    <script src="{{asset('js/menu_jquery.js')}}"></script>
    <!-- //End menu -->
    <!---slider---->
    <link rel="stylesheet" href="{{asset('css/slippry.css')}}">
    <script src="{{asset('js/jquery-ui.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/scripts-f0e4e0c2.js')}}" type="text/javascript"></script>
    <script>
        jQuery('#jquery-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
            // options
            adaptiveHeight: false, // height of the sliders adapts to current slide
            useCSS: false, // true, false -> fallback to js if no browser support
            autoHover: false,
            transition: 'fade'
        });
    </script>
    <!----start-pricerage-seletion---->
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
    <script type='text/javascript'>//<![CDATA[
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [100, 400],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        });//]]>
    </script>
    <!----//End-pricerage-seletion---->
    <!---move-top-top---->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>
    <!---//move-top-top---->
</head>
<body>
<!---start-wrap---->
<!---start-header---->
<div class="header">
    <div class="top-header">
        <div class="wrap">
            <div class="top-header-left">
                <ul>
                    <!---cart-tonggle-script---->
                    <script type="text/javascript">
                        $(function () {
                            var $cart = $('#cart');
                            $('#clickme').click(function (e) {
                                e.stopPropagation();
                                if ($cart.is(":hidden")) {
                                    $cart.slideDown("slow");
                                } else {
                                    $cart.slideUp("slow");
                                }
                            });
                            $(document.body).click(function () {
                                if ($cart.not(":hidden")) {
                                    $cart.slideUp("slow");
                                }
                            });
                        });
                    </script>
                    <!---//cart-tonggle-script---->
                    <li><a class="cart" href="#"><span id="clickme"> </span></a></li>
                    <!---start-cart-bag---->
                    <div id="cart">Seu Carrinho esta Vazio <span>(0)</span></div>
                    <!---start-cart-bag---->
                    <li><a class="info" href="#"><span> </span></a></li>
                </ul>
            </div>
            <div class="top-header-right">
                <ul>
                    <li><a href="login.html">Login</a><span> </span></li>
                    <li><a href="register.html">Meu Cadastro</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!----start-mid-head---->
    <div class="mid-header">
        <div class="wrap">
            <div class="mid-grid-right">
                <form>
                    <input type="text" placeholder="O que voce procura?"/>
                </form>
            </div>
            <div class="mid-grid-left">
                <a class="logo" href="index.html" title="DECOR STUDIO JMIX"><span> </span></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!----//End-mid-head---->
    <!----start-bottom-header---->
    <div class="header-bottom">
        <div class="wrap">
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="grid"><a class="color2" href="#">HOME</a>

                    <!--INICIO SUBMENU DA HOME

                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>popular</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">login</a></li>
                                    </ul>
                                </div>
                                <div class="h_nav">
                                    <h4 class="top">man</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="#">accessories</a></li>
                                        <li><a href="#">kids</a></li>
                                        <li><a href="#">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>style zone</h4>
                                    <ul>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>style zone</h4>
                                    <ul>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1 men">
                                <div class="men-pic">
                                    <img src="images/men.png" title="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    </li>
                    FIM DO SUB MENU DA HOME -->

                <li><a class="color7" href="#">QUEM SOMOS</a>
                    <!-- SUB MENU DESATIVADO
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>shop</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">brands</a></li>
                                    </ul>
                                </div>
                                <div class="h_nav">
                                    <h4>my company</h4>
                                    <ul>
                                        <li><a href="products.html">trends</a></li>
                                        <li><a href="products.html">sale</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>help</h4>
                                    <ul>
                                        <li><a href="products.html">trends</a></li>
                                        <li><a href="products.html">sale</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>my company</h4>
                                    <ul>
                                        <li><a href="products.html">trends</a></li>
                                        <li><a href="products.html">sale</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="products.html">login</a></li>
                                        <li><a href="products.html">create an account</a></li>
                                        <li><a href="products.html">create wishlist</a></li>
                                        <li><a href="products.html">my shopping bag</a></li>
                                        <li><a href="products.html">brands</a></li>
                                        <li><a href="products.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1 nike">
                                <div class="nike-pic">
                                    <img src="images/nike.png" title="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                        </div>
                    </li>
                    SUB MENU DESATIVADO-->

                <li class="active grid"><a class="color4" href="#">PRODUTOS</a>

                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>QUADROS</h4>
                                    <ul>
                                        <li><a href="products.html">DIPTICO</a></li>
                                        <li><a href="products.html">TRIPTICO</a></li>
                                        <li><a href="products.html">UNITARIO</a></li>
                                    </ul>
                                </div>
                                <!--INICIO CATEGORIA SUB MENU
                                <div class="h_nav">
                                    <h4>GRAVURAS</h4>
                                    <ul>
                                        <li><a href="products.html">DIPTICO</a></li>
                                        <li><a href="products.html">TRIPTICO</a></li>
                                        <li><a href="products.html">UNITARIO</a></li>
                                    </ul>
                                </div>
                                FIM CATEGORIA SUB MENU-->
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>GRAVURAS</h4>
                                    <ul>
                                        <li><a href="products.html">DIPTICO</a></li>
                                        <li><a href="products.html">TRIPTICO</a></li>
                                        <li><a href="products.html">UNITARIO</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>PECAS DE PAREDE</h4>
                                    <ul>
                                        <li><a href="products.html">FORMAS ORGANICAS</a></li>
                                        <li><a href="products.html">REDONDAS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>OBJ. DE DECORACAO</h4>
                                    <ul>
                                        <li><a href="products.html">TAMANHO PEQUENO</a></li>
                                        <li><a href="products.html">TAMANHO MEDIO</a></li>
                                        <li><a href="products.html">TAMANHO GRANDE</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--INICIO CATEGORIA SUB MENU
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>popular</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            FIM CATEGORIA SUB MENU-->
                            <div class="col1 women">
                                <div class="women-pic">
                                    <!--COLOCAR IMAGEM NO MENU<img src="#" title="" />-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <!-- MENU DESATIVADO
                <li><a class="color5" href="#">NOVIDADES</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>NOVIDADE 01</h4>
                                <ul>
                                    <li><a href="products.html">NOVIDADE 01</a></li>
                                    <li><a href="products.html">NOVIDADE 01</a></li>
                                    <li><a href="products.html">NOVIDADE 01</a></li>
                                </ul>
                            </div>
                            <div class="h_nav">
                                <h4 class="top">man</h4>
                                <ul>
                                    <li><a href="products.html">new arrivals</a></li>
                                    <li><a href="products.html">men</a></li>
                                    <li><a href="products.html">women</a></li>
                                    <li><a href="products.html">accessories</a></li>
                                    <li><a href="products.html">kids</a></li>
                                    <li><a href="products.html">style videos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>style zone</h4>
                                <ul>
                                    <li><a href="products.html">men</a></li>
                                    <li><a href="products.html">women</a></li>
                                    <li><a href="products.html">accessories</a></li>
                                    <li><a href="products.html">kids</a></li>
                                    <li><a href="products.html">brands</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1 kids">
                            <div class="kids-pic">
                                <img src="images/kids1.png" title="" />
                            </div>
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                </div>
                </li>
                FIM MENU DESATIVADO-->
                <li><a class="color6" href="#">NOVIDADES</a>

                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>NOVIDADES 01</h4>
                                    <ul>
                                        <li><a href="products.html">NOVIDADES 01</a></li>
                                        <li><a href="products.html">NOVIDADES 01</a></li>
                                        <li><a href="products.html">NOVIDADES 01</a></li>
                                    </ul>
                                </div>
                                <!-- CATEGORIA SUB MENU
                                <div class="h_nav">
                                    <h4 class="top">my company</h4>
                                    <ul>
                                        <li><a href="products.html">trends</a></li>
                                        <li><a href="products.html">sale</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                                CATEGORIA SUB MENU-->
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>NOVIDADES 02</h4>
                                    <ul>
                                        <li><a href="products.html">NOVIDADES 02</a></li>
                                        <li><a href="products.html">NOVIDADES 02</a></li>
                                        <li><a href="products.html">NOVIDADES 02</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>NOVIDADES 03</h4>
                                    <ul>
                                        <li><a href="products.html">NOVIDADES 03</a></li>
                                        <li><a href="products.html">NOVIDADES 03</a></li>
                                        <li><a href="products.html">NOVIDADES 03</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1 sports">
                                <div class="sports-pic">
                                    <!--COLOCAR IMAGEM NO MENU<img src="#" title="" />-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>

                <li><a class="color8" href="#">CONTATO</a>
                    <!-- SUB MENU DESATIVADO
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>style zone</h4>
                                    <ul>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">women</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>popular</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">men</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">login</a></li>
                                    </ul>
                                </div>
                                <div class="h_nav">
                                    <h4 class="top">man</h4>
                                    <ul>
                                        <li><a href="products.html">new arrivals</a></li>
                                        <li><a href="products.html">accessories</a></li>
                                        <li><a href="products.html">kids</a></li>
                                        <li><a href="products.html">style videos</a></li>
                                    </ul>
                                </div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                    SUB MENU DESATIVADO-->
                </li>
            </ul>

        </div>
    </div>
</div>
<!----//End-bottom-header---->
<!---//End-header---->
<!----start-image-slider---->
<div class="img-slider">
    <div class="wrap">
        <ul id="jquery-demo">
            <li>
                <a href="#slide1">
                    <img src="images/slide-1.jpg" alt=""/>
                </a>

                <div class="slider-detils">
                    <h3>OBJETOS DE <label>DECORACAO</label></h3>
                    <span>Desgin e qualidade com flexibilidade</span>
                    <a class="slide-btn" href="details.html"> Ir para a Loja</a>
                </div>
            </li>
            <li>
                <a href="#slide2">
                    <img src="images/slide-2.jpg" alt=""/>
                </a>

                <div class="slider-detils">
                    <h3>PECAS DE <label>PAREDE</label></h3>
                    <span>Desgin e qualidade com flexibilidade</span>
                    <a class="slide-btn" href="details.html"> Ir para a Loja</a>
                </div>
            </li>
            <li>
                <a href="#slide3">
                    <img src="images/slide-4.jpg" alt=""/>
                </a>

                <div class="slider-detils">
                    <h3>QUADROS CAIXAS <label>BAUS</label></h3>
                    <span>Desgin e qualidade com flexibilidade</span>
                    <a class="slide-btn" href="details.html"> Ir para a Loja</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>
<!----//End-image-slider---->
<!----start-price-rage
<div class="wrap">
    <div class="price-rage">
        <h3>Weekly selection:</h3>
        <div id="slider-range">
        </div>
    </div>
</div>
End-price-rage--->

<!--- start-content---->
<!-- FILTRO DE VALORES
<div class="content">
    <div class="wrap">
        <div class="content-left">
                <div class="content-left-top-grid">
                    <div class="content-left-price-selection">
                        <h4>Selecione o Valor:</h4>
                        <div class="price-selection-tree">
                            <span class="col_checkbox">
                                <input id="10" class="css-checkbox10" type="checkbox">
                                <label class="normal"><i for="10" name="demo_lbl_10"  class="css-label10"> </i>400</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="11" class="css-checkbox11" type="checkbox">
                                <label class="active1"><i for="11" name="demo_lbl_11"  class="css-label11"> </i>350</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="12" class="css-checkbox12" type="checkbox">
                                <label class="normal"><i for="12" name="demo_lbl_12"  class="css-label12"> </i>300</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="13" class="css-checkbox13" type="checkbox">
                                <label class="normal"><i for="13" name="demo_lbl_13"  class="css-label13"> </i>250</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="14" class="css-checkbox14" type="checkbox">
                                <label class="normal"><i for="14" name="demo_lbl_14"  class="css-label14"> </i>200</label>
                            </span>
                            <span class="col_checkbox">
                                <input id="15" class="css-checkbox15" type="checkbox">
                                <label class="normal"><i for="15" name="demo_lbl_15"  class="css-label15"> </i>150</label>
                            </span>
                        </div>

                </div>
                </div>
                <div class="content-left-bottom-grid">
                    <h4>Mais Vendido:</h4>
                    <div class="content-left-bottom-grids">
                        <div class="content-left-bottom-grid1">
                            <img src="images/quadro-studio-jmix.jpg" title="QUADRO STUDIO JMIX 	" />
                            <h5><a href="details.html">OBJETO DE DECORACAO</a></h5>
                            <span> QUADRO</span>
                            <label>R$ 375</label>
                        </div>
                        <div class="content-left-bottom-grid1">
                            <img src="images/caixa-decor-studio-jmix.jpg" title="CAIXA DECOR STUDIO JMIX" />
                            <h5><a href="details.html">CAIXAS DE DECORACAO</a></h5>
                            <span> CAIXAS</span>
                            <label>R$ 375</label>
                        </div>
                    </div>
                </div>
        </div>
        FILTRO DE VALORES-->
<div class="content-right">
    <div class="product-grids">
        <!--- start-rate---->
        <script src="js/jstarbox.js"></script>
        <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8"/>
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.starbox').each(function () {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function (event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
        <!---//End-rate---->
        <!---caption-script---->
        <!---//caption-script---->
        <div onclick="location.href='details.html';" class="product-grid fade">
            <div class="product-grid-head">
                <ul class="grid-social">
                    <div class="clear"></div>
                </ul>
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product2.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        01</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div onclick="location.href='details.html';" class="product-grid fade">
            <div class="product-grid-head">
                <ul class="grid-social">
                    <div class="clear"></div>
                </ul>
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product1.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        02</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div onclick="location.href='details.html';" class="product-grid fade last-grid">
            <div class="product-grid-head">
                <ul class="grid-social">
                    <div class="clear"></div>
                </ul>
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product3.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        03</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div onclick="location.href='details.html';" class="product-grid fade">
            <div class="product-grid-head">
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product4.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        04</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div onclick="location.href='details.html';" class="product-grid fade">
            <div class="product-grid-head">
                <ul class="grid-social">
                    <div class="clear"></div>
                </ul>
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product5.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        05</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div onclick="location.href='details.html';" class="product-grid fade last-grid">
            <div class="product-grid-head">
                <ul class="grid-social">
                    <div class="clear"></div>
                </ul>
                <div class="block">
                    <div class="starbox small ghosting"></div>
                    <span> (46)</span>
                </div>
            </div>
            <div class="product-pic">
                <a href="#"><img src="images/product6.jpg" title="product-name"/></a>

                <p>
                    <a href="#">
                        <small>QUADROS</small>
                        DECOR STUDIO
                        <small>JMIX</small>
                        06</a>
                    <span>Desgin e qualidade com flexibilidade</span>
                </p>
            </div>
            <div class="product-info">
                <div class="product-info-cust">
                    <a href="details.html">DETALHES</a>
                </div>
                <div class="product-info-price">
                    <a href="details.html">R$ 550,00</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="more-product-info">
                <span> </span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
</div>
</div>
<!---- start-bottom-grids---->
<div class="bottom-grids">
    <div class="bottom-top-grids">
        <div class="wrap">
            <div class="bottom-top-grid">
                <h4>MAPA</h4>
                <ul>
                    <li><a href="contact.html">QUEM SOMOS</a></li>
                    <li><a href="#">PRODUTOS</a></li>
                    <li><a href="#">NOVIDADES</a></li>
                    <li><a href="#">CONTATOS</a></li>
                </ul>
            </div>
            <div class="bottom-top-grid">
                <h4>INSCREVA SEU E-MAIL</h4>

                <p>Seja o primeiro a saber sobre novos produtos e ofertas especiais.</p>
                <a class="learn-more" href="#">Inscreva-se Aqui!</a>
            </div>
            <div class="bottom-top-grid last-bottom-top-grid">
                <h4>REGISTRO</h4>

                <p>Crie uma conta para gerenciar tudo que voc� faz com o DECOR STUDIO JMIX , a partir de suas
                    prefer�ncias .</p>
                <a class="learn-more" href="#">CRIAR CADASTRO</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom-bottom-grids">
        <div class="wrap">
            <div class="bottom-bottom-grid">
                <h6>SITE BLINDADO</h6>
                <img src="images/decor-studio-jmix-ecommerce blindado.png" width="100px" height="70px"></img>
                <img src="images/decor-studio-jmix-blindado.png" width="120px" height="60px"></img>
            </div>
            <div class="bottom-bottom-grid">
                <h6>SEGURANCA NA ENTREGA </h6>
                <img src="images/decor-studio-jmix-correios.png" width="120px" height="60px"></img>
            </div>
            <div class="bottom-bottom-grid last-bottom-bottom-grid">
                <h6>FORMA DE PAGAMENTO</h6>
                <img src="images/decor-studio-jmix-pay-pal.png" width="120px" height="60px"></img>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!---- //End-bottom-grids---->
<!--- //End-content---->
<!---start-footer---->
<div class="footer">
    <div class="wrap">
        <div class="footer-left">
            <ul>
                <li><a href="#">Decor Studio JMix 2015. Todos os Direitos Reservados</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="footer-right">
            <p>Desenvolvido<a href="http://destaquedaweb.com/"> DESTAQUE DA WEB</a></p>
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear'
                     };
                     */

                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!---//End-footer---->
<!---//End-wrap---->
</body>
</html>

