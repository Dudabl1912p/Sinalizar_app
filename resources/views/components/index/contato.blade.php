<section class="contato py-5 d-flex align-items-center" style="min-height: 100vh;" id="Contato">
    <div class="container">
        <div class="text-start mb-5">
            <h2 class="fw-bold border-bottom border-warning d-inline-block pb-2 px-3">Contato</h2>
        </div>

        <div class="row flex-column flex-md-row bg-white shadow rounded p-5 border-top border-4">
            <!-- LADO ESQUERDO -->
            <div class="col-md-5">
                <div class="mb-5">
                    <strong>Telefone</strong>
                    <p class="mb-0">(31) 99667-8200</p>
                </div>

                <div class="mb-5">
                    <strong>Endereço de Email</strong>
                    <p class="mb-0">sinalizar.sinalizacao@hotmail.com</p>
                </div>

                <div>
                    <strong>Localização</strong>
                    <p class="mb-0">
                        Rua Coriolano Baroni de Castro, 45 – Bairro Maria Helena BH.MG<br>
                        Belo Horizonte – MG
                    </p>
                </div>
            </div>

            <!-- LADO DIREITO: FORMULÁRIO -->
            <div class="col-md-7 ps-md-5">
                <h5 class="mb-4">Solicite um atendimento</h5>
                <p class="mb-5">Preencha o formulário abaixo e nossa equipe retornará o mais breve possível para ajudar com sua solicitação.</p>

                <form action="https://formsubmit.co/sinalizar.sinalizacao.oficial@gmail.com" method="POST" id="formContato">
                    <div class="row mb-3">
                        <div class="col"><input type="text" name="nome" class="form-control rounded-pill" placeholder="Seu nome" required></div>
                        <div class="col"><input type="email" name="email" class="form-control rounded-pill" placeholder="Seu email" required></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col"><input type="tel" name="telefone" id="telefone" class="form-control rounded-pill" placeholder="Seu Telefone"></div>
                        <div class="col"><input type="text" name="assunto" class="form-control rounded-pill" placeholder="Assunto"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="mensagem" class="form-control rounded-4" rows="5" placeholder="Mensagem" required></textarea>
                    </div>

                    <!-- Campos ocultos obrigatórios -->
                    <input type="hidden" name="_subject" value="Nova mensagem do site!">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">

                    <button type="submit" class="btn btn-warning rounded-pill px-4 fw-bold text-white">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>
