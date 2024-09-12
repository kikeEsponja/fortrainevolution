//const desarrollo = document.getElementById('desarrollo');
const titulos = ["DESARROLLO WEB", "TESTING DE SOFTWARE", "Productos prediseñados"];
const descripciones = ["Desarrollamos sitios web enfocados en resultados, optimizando cada aspecto para mejorar la experiencia del usuario y aumentar las conversiones. Utilizamos las últimas tecnologías y estrategias de SEO para asegurar que tu negocio destaque en línea.", "Garantizamos el rendimiento óptimo de tu sitio web con nuestro servicio de QA Testing. Identificamos y corregimos errores antes de que tus usuarios los encuentren, asegurando una experiencia fluida y profesional.", "Nuestros productos prediseñados te ofrecen plataformas listas para usar. Ofrecemos una plataforma completa y accesible que simplifica la gestión de tu negocio digital."];

let index = 0;

function cambiarDiapositiva() {
    const tituloElement = document.querySelector('.titulo');
    const descripcionElement = document.querySelector('.descripcion');

    tituloElement.style.opacity = 0;
    descripcionElement.style.opacity = 0;

    setTimeout(() => {
        tituloElement.textContent = titulos[index];
        descripcionElement.textContent = descripciones[index];
        tituloElement.style.opacity = 1;
        descripcionElement.style.opacity = 1;
        tituloElement.style.fontSize = '1rem';
        descripcionElement.style.fontSize = '1.5rem';
        if(window.innerWidth < 500) {
        	descripcionElement.style.fontSize = '0.8rem';
        }
        //tituloElement.style.zIndex = '-1';
        //descripcionElement.style.zIndex = '-1';
        index = (index + 1) % titulos.length;
    }, 500); // Espera 500ms antes de cambiar el texto para permitir que la opacidad alcance 0
}
cambiarDiapositiva() 
setInterval(cambiarDiapositiva, 8000); // Cambiar cada 3 segundos (3000 milisegundos)
