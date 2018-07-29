@extends('layouts.master')

@section('title', 'F.A.N - Fundo de amparo ao necessitado')

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
                            Atuamos para reduzir a miséria, a fome e a violência através da integração das<br /> pessoas carentes à sociedade, de forma autossustentável e com padrão de vida digno
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="600"
                            data-y="310"
                            data-speed="800"
                            data-start="1600"
                            data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="{{ url('/') }}#quem-somos">Leia mais</a>
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
                                <a class="btn btn-slider" href="{{ url('participe') }}">Leia mais</a>
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
            <section id="section-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                            <h2>Quem somos</h2>
                            <div class="divider-single"></div>
                        </div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".5s">
                            <img src="img/about/1.jpg" class="img-responsive" alt="">
                            <h3>O F.A.N.</h3>
                            Fundo de Amparo ao Necessitado é uma associação de pessoas que ajudam e contribuem com recursos materiais, humanos e financeiros para desenvolver programas sociais. É um espaço social para acolher os que querem ajudar e os que precisam de ajuda.
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".75s">
                            <img src="img/about/2.jpg" class="img-responsive" alt="">
                            <h3>Nossa atuação</h3>
                            Somos um grupo de pessoas físicas e jurídicas que acreditam que organizados poderão fazer diferença na vida das pessoas que vivem à margem da sociedade, proporcionando dignidade para os moradores de rua, deficientes, dependentes de drogas, crianças, jovens, adultos e idosos abandonados e sem esperança.
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="1s">
                            <img src="img/about/3.jpg" class="img-responsive" alt="">
                            <h3>Participe do F.A.N</h3>
                            Nosso propósito é reduzir a MISÉRIA, A FOME E A VIOLÊNCIA através da integração das pessoas carentes à sociedade, de forma autossustentável e com padrão de vida digno. Uma vez integradas, estas pessoas poderão também contribuir para a manutenção de programas sociais que amparam pessoas carentes.
                            <br>
                            <br>
                        </div>
                        
                        <div class="divider-single"></div>
                        <div class="col-md-2 wow fadeInRight" data-wow-delay="1s"></div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay="1s">
                            <img src="img/about/4.jpg" class="img-responsive" alt="">
                            <h3>Nossa missão</h3>
                            Recuperar pessoas que que vivem à margem da sociedade em estado de privação, vulnerabilidade e exclusão, capacitando-as a autossustentarem-se.
                            <br>
                            <br>
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-delay="1s">
                            <img src="img/about/5.jpg" class="img-responsive" alt="">
                            <h3>Visão</h3>
                            Formar e manter comunidades rurais e urbanas que possibilite as pessoas recuperadas a se organizar para viverem com qualidade de vida, menor custo, obtendo renda através de atividades de economia solidária.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

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
                                    <a href="{{ url('parceiros') }}" title="Mais detalhes">
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