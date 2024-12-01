'use strict';

$('#txtTelefone').mask('(00) 00000-0000');
$('#txtCPF').mask('000.000.000-00');
$('#txtCEP').mask('00.000-000');
const cep2 = '';
const numero2 = '';

const message = document.querySelector('#msgError');

const limparAviso = (cep) => {
    message.textContent = '';
}

const cepInvalido = (cep) => {
    limparFormulario();
    message.textContent = 'Cep Inválido!';
    setTimeout(() => {
        message.textContent = ' ';
    }, 8000);
}

const cepNaoEncontrado = (cep) => {
    limparFormulario();
    message.textContent = 'Cep Não Encontrado!';
    setTimeout(() => {
        message.textContent = ' ';
    }, 8000);
}

const limparFormulario = (endereco) => {
    document.getElementById('txtRua').value = ' ';
    document.getElementById('txtComplemento').value = ' ';
    document.getElementById('txtBairro').value = ' ';
    document.getElementById('txtCidade').value = ' ';
    document.getElementById('txtEstado').value = ' ';
}

const preencherFormulario = (endereco) => {
    limparFormulario();
    document.getElementById('txtCEP').value = endereco.cep;
    document.getElementById('txtRua').value = endereco.logradouro;
    document.getElementById('txtComplemento').value = endereco.complemento;
    document.getElementById('txtBairro').value = endereco.bairro;
    document.getElementById('txtCidade').value = endereco.localidade;
    document.getElementById('txtEstado').value = endereco.estado;
}

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep);

const perquisarCep = async () => {
    limparFormulario();

    const cep = document.getElementById('txtCEP').value;
    const cep2 = cep.replace(".", "").replace("-", "");
    console.log(cep2)
    const url = `http://viacep.com.br/ws/${cep2}/json/`;
    if (cepValido(cep2)) {
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')) {
            cepNaoEncontrado();
        } else {
            preencherFormulario(endereco);
            limparAviso();
        }
    } else {
        cepInvalido();
    }
}

document.getElementById('txtCEP')
    .addEventListener('focusout', perquisarCep);

document.getElementById('txtTelefone')
    .addEventListener('focusout', testeNumero);

function testeNumero () {

    //const numero = document.getElementById('txtTelefone').value;
    //const numero2 = numero.replace("(", "").replace(")", "").replace(" ", "").replace("-", "");
    //console.log(numero2);
    //var teste1 = /^[1-9][0-9][9][8-9][1-9][0-9]{6}+$/;
    //var teste2 = teste1.test(numero2)
    if (teste2) {
        
        console.log('passou2');
    }

}
