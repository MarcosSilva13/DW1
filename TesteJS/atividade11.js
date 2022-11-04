window.addEventListener('load', () => {
    document.forms[0].addEventListener('submit', (event) => {
        event.preventDefault();
    });

    document.querySelector('button').addEventListener('click', () => {
        const dados = new FormData(document.forms[0]);
        dados.append('ra', document.forms[0].ra.value);
        dados.append('nome', document.forms[0].nome.value);
        dados.append('idade', document.forms[0].idade.value);
        dados.append('cpf', document.forms[0].cpf.value);

        const configuracao = {
            method: 'POST',
            body: dados
        };

        fetch('./cadastroEstudante.php', configuracao)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            let p = document.querySelector('p');
            p.innerText = json.mensagem;
            if (json.status == 'ok') {
                p.style.color = 'blue';
                document.forms[0].reset();
            } else {
                p.style.color = 'red';
            }
        });
    });
});


function mascara(i,atributo) {
    var v = i.value;
    if (isNaN(v[v.length-1])) { // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length-1);
        return;
    }
    if (atributo == "cpf") {
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }
}