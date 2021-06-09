<!-- Seção Incrição -->
<section class="container" id="inscricao">
    <div class="my-5 text-center">
        <span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO</span>
        <h1 class="display-4 text-primary">INSCREVA-SE</h1>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <h3 class="h6 text-primary">PLANO ESCOLHIDO</h3>
            <div class="bg-light rounded p-3 shadow-sm">
                <h2 class="mt-3 mb-4 text-primary font-weight-bold h3">Gold</h2>
                <ul class="lista-plano list-unstyled">
                    <li>→ 30 dias de viagem</li>
                    <li>→ 3 destinos diferentes</li>
                    <li>→ Tudo pago pela empresa</li>
                    <li>→ Ingressos para festas</li>
                </ul>
                <form class="my-5">
                    <div class="form-group">
                        <select class="form-control bg-light" id="inputCidades">
                            <option>Selecione a cidade</option>
                            <option>California</option>
                            <option>Paris</option>
                            <option>Dublin</option>
                        </select>
                    </div>
                </form>
                <div class="row align-items-center my-5">
                    <div class="col">
                        <span class="h2 d-block text-left">R$5.000</span>
                    </div>
                </div>
            </div>
        </div>
        <form class="col-12" action="">
            <div class="form-row bg-light rounded shadow-sm p-3">
                <div class="col-md-12">
                    <h2 class="mt-4 mb-4 text-primary font-weight-bold h3">Dados Pessoais</h2>
                </div>
                
                <div class="form-group col-md-6 mb-5">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome completo" />
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label for="inputCPF">CPF</label>
                    <input type="text" class="form-control" id="inputCPF" placeholder="xxx.xxx.xxx-xx" />
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Seu email" />
                </div>
                <div class="form-group col-md-6 mb-5">
                    <label for="inputSenha">Senha</label>
                    <input type="password" class="form-control" id="inputSenha" placeholder="Senha de acesso" />
                </div>
                <div class="form-group col-12 mb-5">
                    <label for="inputEndereco">Endereço</label>
                    <input
                        type="text"
                        class="form-control"
                        id="inputEndereco"
                        placeholder="Número, nome da rua e bairro."
                    />
                </div>
                <div class="form-group col-md-6 mb-4">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" class="form-control" id="inputCidade" />
                </div>
                <div class="form-group col-md-3 col-6 mb-4">
                    <label for="inputCidade">Estado</label>
                    <select id="inputCidade" class="form-control">
                        <option>Selecione o Estado</option>
                        <option>Rio de Janeiro</option>
                        <option>São Paulo</option>
                        <option>Paraná</option>
                        <option>Ceará</option>
                        <option>Acre</option>
                    </select>
                </div>
                <div class="form-group col-md-3 col-6 mb-4">
                    <label for="inputCidade">Cep</label>
                    <input type="text" class="form-control" id="inputCidade" placeholder="xxxxx-xxx" />
                </div>
            </div>
            <div class="form-group bg-light rounded shadow-sm p-3 mt-4">
                <h2 class="mt-3 mb-4 text-primary font-weight-bold h3">Formas de Pagamento</h2>
                <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
                    <button
                        type="button"
                        class="btn btn-secondary active btn-sm"
                        id="nav-cartao-tab"
                        data-toggle="tab"
                        href="#nav-cartao"
                        role="tab"
                        aria-controls="nav-cartao"
                        aria-selected="true"
                    >
                        Cartão de Crédito
                    </button>
                    <button
                        type="button"
                        class="btn btn-secondary btn-sm"
                        id="nav-boleto-tab"
                        data-toggle="tab"
                        href="#nav-boleto"
                        role="tab"
                        aria-controls="nav-boleto"
                        aria-selected="false"
                    >
                        Boleto Bancário
                    </button>
                </nav>
                <div class="tab-content" id="formaPagamentoConteudo">
                    <div
                        class="tab-pane fade show active"
                        id="nav-cartao"
                        role="tabpanel"
                        aria-labelledby="nav-cartao-tab"
                    >
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-5">
                                <label for="inputNomeCartao">Nome no Cartão</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputNomeCartao"
                                    placeholder="Nome impresso no cartão"
                                />
                            </div>
                            <div class="form-group col-md-3 col-6 mb-5">
                                <label for="inputCidade">Mês</label>
                                <select id="inputCidade" class="form-control">
                                    <option>Expira mês...</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-6 mb-5">
                                <label for="inputAno">Ano</label>
                                <select id="inputAno" class="form-control">
                                    <option>Expira ano...</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mb-5">
                                <label for="inputNumeroCartao">Número do Cartão</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputNumeroCartao"
                                    placeholder="5555 5555 5555 5555"
                                />
                            </div>
                            <div class="form-group col-md-6 mb-5">
                                <label for="inputCodigo">Código de Segurança</label>
                                <input type="text" class="form-control" id="inputCodigo" placeholder="XXX" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
                        <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu e-mail.</p>
                    </div>
                </div>
            </div>
            <div class="form-check text-center mt-5">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" />
                    Concordo com os <a href="#">Termos e Condições</a>.
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block my-5">Contratar Plano</button>
        </form>
    </div>
</section>
<!-- Fim Seção Incrição -->
