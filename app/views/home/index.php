<?php 
    $this->view('home/cabecario');
?>
        <!-- Navigation-->
        <?php
            $this->view('home/menu');
        ?>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Layla
                        <span class="text-primary">Santana</span>
                    </h1>
                    <div class="subheading mb-5">
                        Rua 10 · Araguaina, Setor Sul · (63) 99999-9999 ·
                        <a href="Layla:laylasmota@email.com">layla@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Formada em Letras, pela Universidade Federal do Tocantins. Atualmente cursando Programador Web.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/layla-santana-0787a2198/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/layla9810?tab=repositories"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://twitter.com/LaylaSMota"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiência</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Professora de Língua Portuguesa</h3>
                            <div class="subheading mb-3">Literatura e Gramática</div>
                            <p>Possui atuação profissional como Monitora de Língua Portuguesa no Programa “Mais Educação.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Abril 2019 - Presente</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Secretária de advocacia</h3>
                            <div class="subheading mb-3">Controle de agenda e Atendimento de telefonemas</div>
                            <p>Atendimento de telefonemas, a transmissão de recados, a organização da agenda e até alguns cuidados relativos à vida pessoal do advogado.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Junho 2020 - Outubro 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Vendedora</h3>
                            <div class="subheading mb-3">Responsável por atendimento ao cliente.</div>
                            <p>Responsável por realizar vendas e reposição de estoque.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Janeiro 2015 - Janeiro 2016</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Vendedora</h3>
                            <div class="subheading mb-3">Responsável por atendimento ao cliente.</div>
                            <p>Responsável por atendimento ao cliente.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Março 2016 - Janeiro 2017</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Educação</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Universidade Federal do Tocantins</h3>
                            <div class="subheading mb-3">Licenciatura em Letras</div>
                            <div>Língua Portuguesa</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Abril 2014 - Maio 2018</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">ProSoft Informática</h3>
                            <div class="subheading mb-3">Informática Básica.</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Janeiro 2010 - Dezembro 2010</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Habilidades</h2>
                   
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Inglês & Interpretação
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Literatura & Escrita 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Gramática & Sintaxe 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Semântica 
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                <?php 
                    $this->view('home/form');
                ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Prêmios & Certificações</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            I Seminário do Laboratório de Línguas Indígenas e do Núcleo
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            I Seminário de Literatura Tocantinense.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            V Primavera Sem Flores
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Seminário Internacional - Educação em ambiente prisional: Políticas e práticas no Brasil e em Portugal. 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            I Colóquio de Arte e Educação da Universidade Federal do Tocantins. 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            I Encontro Tocantinense de Estudantes de Letras: Educação 
Interdisciplinaridade e Diversidade. 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Observação, investigação, reflexão e problematização da prática relacionada a gestão de sala de aula. 
                        </li>
                    </ul>
                </div>
            </section>
        </div>
       
<?php 
    $this->view('home/rodape');
?>