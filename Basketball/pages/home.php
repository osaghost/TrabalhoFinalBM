<?php
session_start();
if (!isset($_SESSION['asd'])) {
   header('Location: http://localhost/projetos/Basketball/cadastro');
 }
?> 
<link rel="stylesheet" href="pages/css/home.css">
<body onload = "carrossel.getCount()">

  <div class="slider">
      <div class="slides">
         <input type="radio" name="radio-btn" id="radio1" checked>
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">
   

      <div class="slide first">
         <img src="https://img.freepik.com/fotos-premium/bola-de-basquete-fechar-sobre-fundo-preto-escuro-conceito-basquete_93675-80969.jpg?w=2000" alt="Imgem 1">
      </div>
      <div class="slide ">
         <img src="https://p4.wallpaperbetter.com/wallpaper/348/638/502/michael-jordan-typographic-portraits-chicago-bulls-basketball-wallpaper-thumb.jpg" alt="Imagem 2">
      </div> 
      <div class="slide ">
         <img src="https://www.aberje.com.br/wp-content/uploads/2021/01/Michael-Jordan.jpeg" alt="Imgem 4">
      </div>
      <div class="slide ">
         <img src="https://m.media-amazon.com/images/I/81qv9I8Zv8L.jpg" alt="Imgem 4">
      </div>
        

      <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
      </div>

      <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
      </div>


   </div>

</div> 


<br><br><br>

<h1 class="mt-3 text-center">
    BPT
 </h1>

 <br>
 <h5 class="subtitle is-5 text-center">
    Aqui nosso objetivo é gerar um sistema
    para que jogadores encontrem clubes/escolinhas
    a sua volta de maneira simples,
    visando maior disponibilidade.
 </h5>


 




 <script src="pages/js/Carrossel.js"></script>

</body>