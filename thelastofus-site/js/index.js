
const botaoTrailer =document.querySelector(".butao-trailer");

const modal = document.querySelector(".modal");

botaoTrailer.addEventListener("click",() => {
    console.log('clicou no botao');
    modal.classList.add("aberto")
});


const botaoFechaModal = document.querySelector(".fecha-modal");


botaoFechaModal.addEventListener("click",() => {
    modal.classList.remove("aberto")
    video.setAttribute("src","");
});

const video = document.getElementById("video");
