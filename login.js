$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Impede o envio do formulario padrão

        // Obtém os dados do formulário
        var username = $('#usename').val();
        var password = $('#password').val();

        // Envia uma requisição AJAX para o arquivo PHP
        $.post('login.php', {
            username: username,
            password: password
        }, function(response) {
            if(response === 'success') {
                // Login Bem-Sucedido
                $('#message').text('Login Bem-sucedido');
                // Adicione aqui o codigo adicional que deseja executar após o login.
            } else {
                // Login falhou
                $('message').text('Nome de usuário ou senha inválidos.')
            }
        })
    })
})