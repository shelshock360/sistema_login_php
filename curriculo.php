<?php
session_start();
//  nome não  existir no banco sera redirecionado para index.php
if (!$_SESSION['nome']) {
    header('Location:index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>joao marcos de souza</title>
    <link rel="stylesheet" href="css_bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style media="screen">

      .col-lg{
          color:	#9932CC;


      }

      .bg-roxo{

        background-color: #77418C;
      }

      .text-roxo{

        color:#77418C;
      }
      .fa-bars{
          color:	#FFFFFF;
      }
      .fa-graduation-cap{
          color:	#FFFFFF;

      }

      .fa-briefcase{
        color:	#FFFFFF;

      }

      .fa-tools{
        color:	#FFFFFF;

      }

    .fa-book-open{
      color:	#FFFFFF;

     }

    .bolinha{

      width: 40px;
    }

   


    </style>
  </head>
  <body class="bg-dark">


    <div class="container  shadow-sm mt-3 bg-white">

      <div class="row bg-light rounded p-5">

        <div class="col-lg-8 p-3 ">

          <h3 class="ml-5 font-weight-light" >Joao marcos</h3>
          <h3 class="ml-5">de souza</h3>
        </div>


         <div class="col-lg text-right p-3">
           <div class="">

             <i class="fas fa-home text-roxo"></i> Rua Takeshi Mitsuyasu
           </div>

          <i class="fas fa-phone">  (44)97554340</i><br/>
          <i class="far fa-envelope">  joaom4936@gmail.com</i>

         </div>

       </div>

<br/>




<div class="row">
  <div class="col-sm-1 text-right">
    <div class="rounded-circle bg-roxo text-center bolinha">
      <i class="fas fa-bars"></i>

    </div>

  </div>
  <div class="col-sm">
    <h3>objetivos</h3>
    <p> me profissionalizar ganhar novas experiencias e cumprir
      os objtivos profissionais da empresa</p>
  </div>
</div>

<div class="row">
  <div class="col-sm-1 text-right ">
    <div class="rounded-circle bg-roxo text-center bolinha">

          <i class="fas fa-graduation-cap"></i>
    </div>


  </div>
  <div class="col-sm">
      <h3>Escolaridade</h3>
      <p>ensino medio completo</p>
      <p>atualmente no 3° ano do curso de analise e desenvolvimento de sistemas</p>
  </div>
</div>


<div class="row">
  <div class="col-sm-1 text-right">

    <div class="rounded-circle bg-roxo text-center bolinha">
          <i class="fas fa-briefcase"></i>
    </div>


  </div>
  <div class="col-sm">
      <h3>Experiencia</h3>

    <p>nenhuma</p>
    <p>mais muita disposição de aprender creser e fazer a diferença na empresa</p>

  </div>


</div>

<div class="row">
  <div class="col-sm-1 text-right">
    <div class="rounded-circle bg-roxo text-center bolinha">

      <i class="fas fa-tools"></i>
    </div>

  </div>

  <div class="col-sm">
    <h3>Habilidades</h3>
    <ul>
    <li>programar em php</li>
    <li>Programar em php orientado a objeto</li>
    <li>programar em java</li>
    <li>programar em ionic </li>
    <li>conecimentos basicos de html csss e javascript</li>
    <li>conecimentos de sql</li>
    </ul>

  </div>


</div>

<div class="row">

<div class="col-sm-1 text-right">
<div class="rounded-circle bg-roxo text-center bolinha">
  <i class="fas fa-book-open"></i>

</div>
</div>
<div class="col-sm">
<h3>Atividades</h3>
  <p>aprender tecnologias novas nas horas vagas e desemvolver aplicações propias</p>

</div>
</div>






    </div>



  </body>
</html>
