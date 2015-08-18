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

    <!-- webfonts -->
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
    <link rel="stylesheet" href={{asset('css/slippry.css')}}"">
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
                    <input type="text" placeholder="O que você esta procurando?"/>
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
<!--- start-content---->
<div class="content login-box">
    <div class="login-main">
        <div class="wrap">
            <h1>CRIE UMA NOVA CONTA</h1>

            <div class="register-grids">

                <form>
                    <div class="register-top-grid">
                        <h3>INFORMACOES PESSOAIS</h3>
                        <hr>
                        <div>
                            <span>Endereco de E-Mail<label>*</label></span>
                            <input placeholder="Digite seu E-Mail" required type="text">
                        </div>

                        <div>
                            <p>&nbsp;</p>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>
                        </div>

                        <div>
                            <span>SENHA<label>*</label></span>
                            <input placeholder="Digite sua Senha" required type="password">
                        </div>
                        <div>
                            <span>CONFIRME A SENHA<label>*</label></span>
                            <input placeholder="Confirme sua Senha" required type="password">
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="clear"></div>
                    <div>
                        <p>&nbsp;</p>
                    </div>
                    <div class="register-bottom-grid">
                        <h3>INFORMACAO DE LOGIN</h3>
                        <hr>
                        <div>
                            <span>PRIMEIRO NOME<label>*</label></span>
                            <input placeholder="Digite seu Primeito Nome" required type="text">
                        </div>
                        <div>
                            <span>ULTIMO NOME<label>*</label></span>
                            <input placeholder="Digite seu Último Nome" required type="text">
                        </div>

                        <div>
                            <span>NUMERO DO TELEFONE<label>*</label></span>
                            <input placeholder="Digite seu Telefone" required type="tel">
                        </div>
                        <div>
                            <span>ENDERECO<label>*</label></span>
                            <input placeholder="Digite seu Endereço" required type="text">
                        </div>
                        <div>
                            <span>COMPLEMENTO<label></label></span>
                            <input placeholder="Complemento" required type="text">
                        </div>
                        <div>
                            <span>CIDADE<label>*</label></span>
                            <input placeholder="Digite sua Cidade" required type="text">
                        </div>
                        <div>
                            <span>ESTADO<label>*</label></span>
                            <select input placeholder="Escolha seu Estado" required type="text">
                                <option value="">Selecione o Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="GO">Goiás</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraiba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí­</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SP">São Paulo</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div>
                            <span>PAIS<label>*</label></span>
                            <select required input type="hidden">
                                <option value
                                "">Escolha o País</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brasil">Brasil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of
                                    the
                                </option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                </option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s
                                    Republic of
                                </option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic
                                    Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former
                                    Yugoslav Republic of
                                </option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South
                                    Sandwich Islands
                                </option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>

                            </select>

                        </div>
                        <div>
                            <span>CEP<label>*</label></span>
                            <input placeholder="Digite seu CEP" required type="text">
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="clear"></div>
                    <div>
                        <p>&nbsp;</p>
                    </div>


                    <div class="clear"></div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>CADASTRE SEU
                            EMAIL NEWSLETTER</label>
                    </a>

                    <div class="clear"></div>
                    <div class="clear"></div>
                    <div>
                        <p>&nbsp;</p>
                    </div>

                    <input type="submit" value="ENVIAR"/>
                </form>


            </div>
        </div>
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

                <p>Crie uma conta para gerenciar tudo que você faz com o DECOR STUDIO JMIX , a partir de suas
                    preferências .</p>
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

