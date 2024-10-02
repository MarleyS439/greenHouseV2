// Função para exibir os submenus de item no navbar
let linkHover = document.getElementById('click');
let subMenu = document.getElementById('menu'); // Corrigido para 'menu'

linkHover.addEventListener("click", function() {
    // Alterna a visibilidade do submenu
    if (subMenu.style.display === "flex") {
        subMenu.style.display = "none"; // Esconde o submenu se estiver visível
    } else {
        subMenu.style.display = "flex"; // Exibe o submenu
    }
});

// Fechar o submenu ao clicar fora
document.addEventListener('click', function(event) {
    if (!linkHover.contains(event.target) && !subMenu.contains(event.target)) {
        subMenu.style.display = "none"; // Esconde o submenu se clicar fora
    }
});