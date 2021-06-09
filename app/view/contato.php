<!-- Seção Contato -->
<section class="container" id="contato">
    <div class="my-5 text-center">
        <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
        <h1 class="display-4 text-primary font-weight-bold">Fale Conosco</h1>
    </div>
    <div class="row">
        <div class="col-lg mb-5">
            <form class="bg-light rounded p-5 box-shadow-sm " action="">
                <h2 class="mt-3 mb-4 text-primary font-weight-bold">Tire suas Dúvidas</h2>
                <div class="form-group mb-4">
                    <label for="clienteNome">Nome</label>
                    <input type="text" class="form-control" id="clienteNome" />
                </div>
                <div class="form-group mb-4">
                    <label for="clienteEmail">Email</label>
                    <input type="email" class="form-control" id="clienteEmail" />
                </div>
                <div class="form-group mb-4">
                    <label for="clienteMensagem">Mensagem</label>
                    <textarea id="clienteMensagem" class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar Mensagem</button>
            </form>
        </div>
        <div class="col-lg">
            <h2 class="h6 font-weight-bold mb-3">NOSSO ENDEREÇO</h2>
            <a href="#"
                ><img class="img-fluid shadow-sm rounded mb-4" src="./public/img/mapa.png" alt="Endereço da Empresa"
            /></a>

            <h2 class="h6 font-weight-bold mb-3 mt-5">DADOS DE CONTATO</h2>
            <ul class="list-unstyled text-secondary">
                <li>caravan@caravan.com.br</li>
                <li>21 99999-9999</li>
                <li>De Seg. à Sex. das 8h às 18h</li>
            </ul>

            <h2 class="h6 font-weight-bold mb-3 mt-5">REDES SOCIAIS</h2>
            <ul class="list-unstyled" style="max-width: 260px">
                <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Facebook</a></li>
                <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Twitter</a></li>
                <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="#">Youtube</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Fim Seção Contato -->
<!-- Seção Perguntas -->
<section class="container mb-5">
    <div class="my-4 my-md-5 text-center">
        <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
        <h2 class="display-4 text-primary font-weight-bold">Perguntas Frequentes</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7" id="perguntasFrequentes" data-children=".pergunta">
            <div class="pergunta py-3">
                <a
                    class="lead"
                    data-toggle="collapse"
                    href="#pergunta1"
                    aria-expanded="true"
                    aria-controls="pergunta1"
                    >→ É possível cancelar a viagem?</a
                >
                <div id="pergunta1" class="collapse show" role="tabpanel" data-parent="#perguntasFrequentes">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                        scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis
                        ornare.
                    </p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="pergunta py-3">
                <a
                    class="lead"
                    data-toggle="collapse"
                    href="#pergunta2"
                    aria-expanded="true"
                    aria-controls="pergunta2"
                    >→ Qual a garantia que tenho se perder o voo?</a
                >
                <div id="pergunta2" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                        scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis
                        ornare.
                    </p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="pergunta py-3">
                <a
                    class="lead"
                    data-toggle="collapse"
                    href="#pergunta3"
                    aria-expanded="true"
                    aria-controls="pergunta3"
                    >→ Qual a principal forma de viagem?</a
                >
                <div id="pergunta3" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                        scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis
                        ornare.
                    </p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="pergunta py-3">
                <a
                    class="lead"
                    data-toggle="collapse"
                    href="#pergunta4"
                    aria-expanded="true"
                    aria-controls="pergunta4"
                    >→ Qual o melhor destino de viagem?</a
                >
                <div id="pergunta4" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                        scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis
                        ornare.
                    </p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="pergunta py-3">
                <a
                    class="lead"
                    data-toggle="collapse"
                    href="#pergunta5"
                    aria-expanded="true"
                    aria-controls="pergunta5"
                    >→ Vocês dão descontos para grupos grandes?</a
                >
                <div id="pergunta5" class="collapse" role="tabpanel" data-parent="#perguntasFrequentes">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                        scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis
                        ornare.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fim Seção Perguntas -->