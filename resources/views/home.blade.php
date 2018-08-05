@extends('layouts.master')

@section('title', 'F.A.N. - Fundo de amparo ao necessitado')

@section('content')
    <!-- slider -->
    <div id="slider">
        <!-- revolution slider begin -->
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                        <!--  BACKGROUND IMAGE -->
                        <img src="img/banner/1.jpg" alt="">
                        <div class="tp-caption border-v lft"
                            data-x="540"
                            data-y="center"
                            data-speed="800"
                            data-start="400"
                            data-easing="easeInOutCubic"
                            data-endspeed="300">
                        </div>

                        <div class="tp-caption custom-font-1 lft"
                            data-x="600"
                            data-y="140"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeInOutCubic"
                            data-endspeed="300">
                            Restaurando Vidas
                        </div>

                        <div class="tp-caption lft custom-font-1-5"
                            data-x="600"
                            data-y="190"
                            data-speed="800"
                            data-start="800"
                            data-easing="easeInOutCubic">
                            Trazendo Esperança 
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="600"
                            data-y="240"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeInOutCubic">
                            Atuamos para reduzir a miséria, a fome e a violência através da integração das<br /> pessoas carentes à sociedade, de forma autossustentável e com padrão de vida digno.
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="600"
                            data-y="310"
                            data-speed="800"
                            data-start="1600"
                            data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{ url('/quem-somos') }}">Leia mais</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            <!--  BACKGROUND IMAGE -->
                            <img src="img/banner/2.jpg" alt="">
                            <div class="tp-caption custom-font-1 lft"
                                data-x="left"
                                data-y="140"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                Participe do F.A.N
                            </div>

                            <div class="tp-caption sfr custom-font-2"
                                data-x="left"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Faça uma doação
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="left"
                                data-y="240"
                                data-speed="800"
                                data-start="1200"
                                data-easing="easeInOutCubic">
                                O F.A.N. é um clube de ajuda, onde os associados ajudam e podem ser ajudados. <br />
                                É um espaço para participar como voluntário e/ou contribuir mensalmente.
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="left"
                                data-y="310"
                                data-speed="800"
                                data-start="1600"
                                data-easing="easeInOutCubic">
                                <a class="btn btn-slider" href="{{ url('participe-do-fan') }}">Leia mais</a>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
        <!-- revolution slider close -->
    </div>
    <!-- slider close -->

    <div class="clearfix"></div>

    <!-- content begin -->
        <div id="quem-somos" class="no-padding">
            <!-- section begin -->
            <section id="section-text-2" class="no-padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                            <h1>Nossa Missão</h1>
                            <p>
                            	Recuperar pessoas que que vivem à margem da sociedade em estado de privação, vulnerabilidade e exclusão, capacitando-as a autossustentarem-se.
                            </p>
                            <br />
                            <h1>Nossa visão</h1>
                            <p>
                                Formar e manter comunidades rurais e urbanas que possibilite as pessoas recuperadas a se organizar para viverem com qualidade de vida, menor custo, obtendo renda através de atividades de economia solidária.			
                            </p>
                        </div>
                        <div class="col-md-6 wow fadeInUp">
                            <img src="img/misc/pic-4.png" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2>Galeria</h2>
                            <div class="divider-double"></div>
                        </div>

                        <div id="gallery-isotope" class="col-md-12 wow fadeInUp" data-wow-delay=".25s">
                            <div class="item small-pic">
                                <a href="img/gallery/5.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/5-800x800.jpg" alt="">
                            </div>

                            <div class="item small-pic">
                                <a href="img/gallery/6.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/6-800x800.jpg" alt="">
                            </div>

                            <div class="item wide-pic">
                                <a href="img/gallery/1.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/1.jpg" alt="">
                            </div>

                            <div class="item wide-pic">
                                <a href="img/gallery/4.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/4.jpg" alt="">
                            </div>

                            <div class="item small-pic">
                                <a href="img/gallery/3.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/3-800x800.jpg" alt="">
                            </div>

                            <div class="item small-pic">
                                <a href="img/gallery/2.jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                                <img src="img/gallery/2-800x800.jpg" alt="">
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="latest-sermons">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                            <h2>Entidades parceiras </h2>
                            <div class="divider-double"></div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="custom-col-3 wow flipInX">
                                <div class="left-col">
                                    <img src="img/casa-rocha.png" alt="" class="img-responsive">
                                </div>
                                <div class="mid-col">
                                    <a href="#">
                                        <h3>JOCUM – Jovens com uma missão</h3>
                                    </a>
                                    <div class="details">
                                        <span>
                                            <a href="http://www.jocumcasarocha.com.br" target="_blank">
                                                http://www.jocumcasarocha.com.br
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="right-col">
                                    <a href="{{ url('entidades-parceiras') }}" title="Mais detalhes">
                                    	<i class="fa fa-info-circle"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
@endsection