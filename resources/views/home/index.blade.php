@extends('theme.theme')
@section('body')



    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="heroText">
                        <h1 class="text-white mb-lg-5 mb-4">Nous sommes prêts à servir pour votre entreprise</h1>

                        {{-- <a href="https://www.youtube.com/watch?v=AYaHuZ4BB6Y" class="popup-youtube play-icon-wrap d-flex align-items-center">
                            <i class="bi-play play-icon"></i>

                            <small>1:49 Minutes</small>
                        </a> --}}
                    </div>
                </div>

            </div>
        </div>

        <div class="overlay"></div>
    </section>

    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-5">Smik-Services</h2>
                </div>

                <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab" data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro" aria-selected="true">Introduction</button>

                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>

                            {{-- <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">FAQs</button> --}}
                        </div>
                    </nav>
                </div>

                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="images/webpage-browser-digital-icon-symbols-concept.jpg" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">Qui sommes-nous ?</h3>

                                    <p>Smik services est une société dans le secteur d'activité commerciale. Fondé depuis le 26/10/2022. Nous avons pour domaine d'expertise(S) : - Toutes activités de transport routier : transport terrestre utilisant la route pour acheminer des marchandises ou
                                        des personnes. - Commerce général - Stratégie, marketing et communication - Prestations de services Fournitures de bureau, matériels
                                        informatiques - Gestion immobilière, comptable et informatique - Travaux du BTP - Les ressources humaines - Toutes les activités
                                        d'importations et exportations La logistique : regroupant les activités classiques de transport comme le stockage, l'utilisation des machines
                                        de transport et de levage, mais aussi l'aménagement des locaux afin d'optimiser les flux de composants. A cela s'ajoute la gestion des
                                        retours liés au service après-vente. Et pour la réalisation de l'objet social : - l'acquisition, la location et la vente de tous biens meubles et
                                        immeubles. - l'emprunt de toutes sommes auprès de tous établissements financiers avec possibilité de donner en garantie tout ou partie
                                        des biens sociaux. - la prise en location gérance de tous fonds de commerce. - la prise de participation dans toute société existante ou
                                        devant être créée - et généralement, toute opérations financières, commerciales, industrielles, mobilières et immobilière, se rapportant
                                        directement ou indirectement a l'objet social ou pouvant en faciliter l'extension ou le développement. Avec une équipe de spécialistes de 5 cinq personnes.</p>

                                    {{-- <p> <a rel="nofollow" href="https://www.tooplate.com/" target="_blank"></a></p> --}}
                                    
                                    {{-- <p>Image credits go to <a rel="nofollow" href="https://freepik.com/" target="_blank">FreePik</a> and <a rel="nofollow" href="https://unsplash.com/" target="_blank">Unsplash</a> for images used in this template. We really appreciate these stock image websites for providing free photos to everyone.</p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">KOMAH IBRAHIM, CEO</h3>

                                    <p>Notre priorité est votre bonheur en travaillant avec nous. Nous vous garantissons la meilleure qualité de service de notre part. N'hésitez pas à nous parler par e-mail.</p>

                                    <ul class="social-icon mt-lg-5 mt-3">
                                        <li class="me-3"><strong>Where to find?</strong></li>

                                        <li><a href="https://twitter.com/search?q=tooplate" class="social-icon-link bi-twitter"></a></li>

                                        <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                                        <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                    <img src="images/ceo.jpeg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                    <img src="images/php-programming-html-coding-cyberspace-concept.jpg" class="img-fluid" alt="">
                                </div>

                                {{-- <div class="col-lg-5 col-12 m-auto">
                                    <h3 class="mb-3">Frequenlty Asked Questions</h3>

                                    <div class="accordion" id="accordionGeneral">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                                What is Tween Agency?
                                                </button>
                                            </h2>

                                            <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                                <div class="accordion-body">
                                                    <p class="large-paragraph"><strong>Tween Agency</strong> is free HTML template powered by Bootstrap 5 CSS framework. This means you can use all standard CSS classes provided by Bootstrap version 5 to customize your CSS layout.</p>

                                                    <p class="large-paragraph">You are allowed to use it for your clients. You are not allowed to redistribute this template ZIP file on any other template website. Please <a href="https://www.tooplate.com/contact" target="_blank"><strong>contact Tooplate</strong></a> for more info.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                                What are available services?
                                                </button>
                                            </h2>

                                            <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                                <div class="accordion-body">
                                                    <p class="large-paragraph">We provide full digital marketing services for all various aspects of your company's web presence and social medias. You have 100% peace of mind for your company by working with us.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                                                How many successful projects?
                                                </button>
                                            </h2>

                                            <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                                <div class="accordion-body">
                                                    <p class="large-paragraph">We have over 280+ successful projects for different companies. There are great experiences of working together with different clients all over the world.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <h2 class="mb-5 text-center">Nos Services</h2>

                    <div class="col-lg-4 col-12 d-flex bg-primary p-0">
                        <img src="images/services/undraw_Online_page_re_lhgx.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0">
                        <div class="services-info custom-icon-left paddingText">
                        
                            <h4 class="">Ressources Humaines</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 d-flex bg-warning p-0">
                        <img src="images/services/undraw_online_transactions_02ka.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0 order-lg-0 order-sm-5">
                  
                        <div class="services-info custom-icon-right paddingText order-lg-0 order-sm-2">
                        
                            <h4 class="">Comptabilités</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 d-flex bg-success p-0 order-lg-0 order-sm-4">
                        <img src="images/services/undraw_content_team_3epn.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0">

                        <div class="services-info custom-icon-top paddingText">
                    
                            <h4 class="">Services Informatiques</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex bg-primary p-0">
                        <img src="images/services/undraw_Online_page_re_lhgx.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0">
                        <div class="services-info custom-icon-left paddingText">
                        
                            <h4 class="">Gestions Logistiques</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 d-flex bg-warning p-0">
                        <img src="images/services/undraw_online_transactions_02ka.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0 order-lg-0 order-sm-5">
                  
                        <div class="services-info custom-icon-right paddingText order-lg-0 order-sm-2">
                        
                            <h4 class="">Services BTP</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 d-flex bg-success p-0 order-lg-0 order-sm-4">
                        <img src="images/services/undraw_content_team_3epn.svg" class="img-fluid services-image" alt="">
                        
                    </div>

                    <div class="col-lg-4 col-12 p-0">

                        <div class="services-info custom-icon-top paddingText">
                    
                            <h4 class="">Marketing et Vente</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex bg-primary p-0">
                        <img src="images/services/undraw_Online_page_re_lhgx.svg" class="img-fluid services-image" alt="">
                    </div>

                    <div class="col-lg-4 col-12 p-0">
                        <div class="services-info custom-icon-left paddingText">
                        
                            <h4 class="">Livraison  des colis et Express</h4>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing industry</p>

                            <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-12 d-flex bg-warning p-0">
                        <img src="images/services/undraw_online_transactions_02ka.svg" class="img-fluid services-image" alt="">
                    </div>

                    
                    


            </div>
        </div>
    </section>

   
@endsection