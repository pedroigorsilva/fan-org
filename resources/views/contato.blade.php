@extends('layouts.master')

@section('title', 'F.A.N. - Contato')

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="contato" data-speed="2" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="map"></div>

    <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" name="form1" method="post" action="">



                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo" />

                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email" id="email" placeholder=Email" />

                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>

                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Enviar" class="btn btn-custom" />
                                    </p>



                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <div class="contact-info">

                            <span class="title">Telefone:</span>(31) 3236-1443
                        
                            <div class="divider-line"></div>

                            <span class="title">Endereço:</span>
                             Av. do Contorno, 2905 / Conj. 405 - Bairro Santa Efigênia <br /> 
                             Belo Horizonte/MG CEP 30.110-915
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

@endsection