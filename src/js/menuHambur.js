const hamburguesa = document.querySelector(".hamburguesa");
const navList = document.querySelector(".navList");

hamburguesa.addEventListener("click", () =>{
    hamburguesa.classList.toggle("rotate")
    navList.classList.toggle("active")
  /*const elemento = this;
  navList.classList.add('active');
      setTimeout(() => {
        navList.classList.remove('active');
    }, 2000);*/ // Asegúrate de que este tiempo coincida con la duración de la transición CSS

});