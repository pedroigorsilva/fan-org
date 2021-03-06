@extends('layouts.master')

@section('title', 'F.A.N. - Entidades parceiras')

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="parceiros" data-speed="2" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Entidades parceiras</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div class="clearfix"></div>

    <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-justify">
                        	<h3>
                        		<p class="text-line">
									“JOCUM Casa Rocha” é um Centro Comunitário fundado em 2008 como ministério da JOCUM-BH, uma organização missionária sem fins lucrativos. A Casa Rocha atende crianças, adolescentes, mulheres e ameias moradoras da comunidade Pedreira Prado Lopes num objetivo de desenvolvimento integral dessa comunidade. Na Casa Rocha, as crianças e adolescentes participam em diferentes grupos, de acordo com sua idade e horário escolar, de atividades que estimulem sua criatividade, de jogos e esportes e de oficinas que desenvolvem capacidades especificas. Os missionários e voluntários se envolvem em diferentes níveis da vida das crianças e adolescentes, visitando suas famílias regularmente com o propósito de trabalhar com o ambiente familiar. Acreditamos que cada um de nós pode ser um agente de transformação na vida das pessoas desta comunidade.
                        		</p>
                        		<p class="text-left text-line">
                        			Veja o Site da Casa Rocha e conheça suas realizações, necessidades e trabalho: 
									<a href="http://www.jocumcasarocha.com.br" target="_blank">
										http://www.jocumcasarocha.com.br
									</a>
                        		</p>
                        	</h3>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
@endsection