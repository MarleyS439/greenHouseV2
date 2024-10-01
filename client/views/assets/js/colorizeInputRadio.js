let inputVenda = document.getElementById('venda');
let labelVenda = document.querySelector('label[for="venda"]');

let optVenda = document.getElementById('optVenda');

inputVenda.addEventListener('change', function () {
    if (inputVenda.checked) {
        optVenda.style.backgroundColor = '#05598d'; // Mudar o estilo do label
        labelVenda.style.color = '#fff';
    } else {
        optVenda.style.backgroundColor = '#fff'; // Voltar ao estilo original
        labelVenda.style.color = '';
    }
});