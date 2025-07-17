document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formContato');

    const nomeInput = form.querySelector('input[name="nome"]');
    const emailInput = form.querySelector('input[name="email"]');
    const telefoneInput = form.querySelector('input[name="telefone"]');
    const assuntoInput = form.querySelector('input[name="assunto"]');
    const mensagemInput = form.querySelector('textarea[name="mensagem"]');

    // Aplica a máscara de telefone
    telefoneInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');

        if (value.length > 11) value = value.slice(0, 11);

        if (value.length > 6) {
            value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7)}`;
        } else if (value.length > 2) {
            value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
        } else if (value.length > 0) {
            value = `(${value}`;
        }

        e.target.value = value;
    });

    // Validação do formulário antes do envio
    form.addEventListener('submit', function (e) {
        let valid = true;
        let mensagens = [];

        const nome = nomeInput.value.trim();
        const email = emailInput.value.trim();
        const telefone = telefoneInput.value.trim();
        const assunto = assuntoInput.value.trim();
        const mensagem = mensagemInput.value.trim();

        // Regras de validação
        if (!nome || nome.trim() === '') {
            valid = false;
            mensagens.push('Digite seu nome.');
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailRegex.test(email)) {
            valid = false;
            mensagens.push('Digite um e-mail válido.');
        }

        const telefoneRegex = /^\(\d{2}\) \d{4,5}-\d{4}$/;
        if (!telefone || !telefoneRegex.test(telefone)) {
            valid = false;
            mensagens.push('Digite um telefone válido com DDD.');
        }

        if (!assunto) {
            valid = false;
            mensagens.push('Preencha o campo de assunto.');
        }

        if (!mensagem || mensagem.length < 3) {
            valid = false;
            mensagens.push('Escreva uma mensagem.');
        }

        if (!valid) {
            e.preventDefault();
            alert(mensagens.join('\n'));
        }
    });
});
