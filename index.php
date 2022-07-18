<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Materiais</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
<!--  Botstrap 5 -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
        <!-- link para icones -->
        <script src="https://kit.fontawesome.com/0518f3ccf0.js" crossorigin="anonymous"></script>

        <script type="text/javascript">


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



</script> 

</head>
<body>



<div class="container--pessoal">
    <header>
        <div class="titulo">controle de materiais -- defend--</div>
        <div class="bem-vindo">Bem vindo:Fulano</div>
        <div class="sobre">Sobre</div>
     <div class="menu-opener">
        <div class="menu--opener1"> </div>
        <div class="menu--opener2"> </div>
        <div class="menu--opener3"> </div>
     </div>
    </header>
    <aside>
        <div class="menu">
            <nav>
            <!-- <div class="menu--item">Lancamentos</div>
            <div class="menu--item">Baixas</div>
            <div class="menu--item">Pesquisar</div> -->
            <ul>

                <li class="fa-solid fa-plus">&nbsp;<a href="#">lançar materiais</a></li>
                <li class="fa-solid fa-trash">&nbsp;<a href="#">Baixar Materiais</a></li>
                <li class="fa-solid fa-magnifying-glass">&nbsp;<a href="#">Pesquisar Materiais</a></li>
                <li class="fa-solid fa-address-card">&nbsp;<a href="#">Sobre</a></li>


            </ul>
        </nav>
        </div>
    </aside>
    <section>
        <div class="dashboard">

        <div class="card--sub--1">
            <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Materiais emprestados</h5>
                        <div class="sub--title ">30</div>
                        <div class="icones--card"><i class="fa-solid fa-check"></i></div>
                        <a href="#" class="btn btn-success"><span>Acessar</span></a><br />
                    </div>
            </div>
        </div>
        <div class="card--sub--2">
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">30 dias sem devolução</h5>
                        <div class="sub--title dev">10</div>
                        <div class="icones--card"><i class="fa-solid fa-bell-slash"></i></div>
                        <a href="#" class="btn btn-success "><span>Acessar</span></a>
                       
                    </div>
            </div>        
        </div>
       
        <!--
            <div class="card1">
                    <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Total de Materiais emprestados</h5><br />
                    <a href="#" class="btn btn-success">Acessar</a>
                </div>
                </div>
            </div>
            <div class="car2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Materiais com 30 dias sem devolução</h5><br />
                    <a href="#" class="btn btn-success">Acessar</a>
                </div>
                </div>
            </div>

        -->
        </div>
    </section>
</div>   
</body>
</html>