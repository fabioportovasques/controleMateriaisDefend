
// function  abrirModal(){
//     alert('clicou');
// }

//fucao para menu amburguer

window.onload = function() {
    document.querySelector(".menu-opener").addEventListener("click", function() {
        console.log('clicou no menu');
        // alert('clicou no menu amburguer');
        if (document.querySelector(".menu nav ul, aside").style.display == 'flex') {
            document.querySelector(".menu nav ul , aside").style.display = 'none';
        } else {
        document.querySelector(".menu nav ul , aside").style.display = 'flex';
        console.log('ok');
        }
    });
};

/*para o menu amburguer aparecer só com resolução menor que 600 */

// window.addEventListener('resize', function () {
//     var largura = window.innerWidth;

//     if (largura > 600)
//     document.querySelector(".menu nav ul, aside").removeAttribute('style');
//     });


/* Abrir modal   */

function abrirModal(){

    document.querySelector('.WindowArea').style.opacity=0;
    document.querySelector('.WindowArea').style.display = 'flex';
    setTimeout(()=>{
        document.querySelector('.WindowArea').style.opacity = 1;
    },200);

    document.querySelector('aside').style.display='none';

    console.log('clicou aqui') ;  
}

function closeModal(){
    document.querySelector('.WindowArea').style.opacity = 0;
    setTimeout(()=>{
        document.querySelector('.WindowArea').style.display = 'none';
    }, 500);

    document.querySelector('aside').style.display='flex';

}