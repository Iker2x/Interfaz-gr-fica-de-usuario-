function showSection(section) {
    const sections = document.querySelectorAll('.section');
    sections.forEach((sec) => {
        sec.classList.remove('active');
    });
    document.getElementById(section).classList.add('active');
}

function mostrarFormulario(formularioId) {
    const formularios = document.querySelectorAll('.form-container');
    formularios.forEach((form) => {
        form.style.display = 'none';
    });
    document.getElementById(formularioId).style.display = 'block';
}

function volverAlMenu() {
    const formularios = document.querySelectorAll('.form-container');
    formularios.forEach((form) => {
        form.style.display = 'none';
    });
}