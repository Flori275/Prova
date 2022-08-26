<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
<body>

<!-- HEADER -->
   <style>
      .title {
      font-family: 'Open Sans', sans-serif;
      font-size: x-large;
      }
   </style>

<!-- MENU -->
   <style>
      div.scrollmenu {
      background-color: #333;
      overflow: auto;
      white-space: nowrap;
      }
      div.scrollmenu a {
      display: inline-block;
      color: black;
      text-align: center;
      padding: 14px;
      text-decoration: none;
      font-family: 'Open Sans', sans-serif;
      }
      div.scrollmenu a:hover {
      color: red;
      }
   </style>

<!-- CARDS COLOR -->
   <style>
      .card1{
      background-color:#F6F54D
      }
      .card2{
      background-color:#B4FF9F
      }
      .card3 {
      background-color:#FF9551
      }
      .card4 {
      background-color:#607EAA
      }
      .card5 {
      background-color:#7A0BC0
      }
      .card6 {
      background-color:#9A0680
      }
      .card7 {
      background-color:#FF5DA2
      }
      .card8 {
      background-color:#FFEBA1
      }
   </style>


<!-- CARD 1 -->
   <style>
      .text1 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text1 span {
      position: absolute;
      top:350;
      }
      .new {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num {
      color:red;
      }
   </style>


<!-- CARD 2 -->
   <style>
      .text2 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text2 span {
      position: absolute;
      top:350;
      }
      .new1 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num1 {
      color:red;
      }
   </style>


<!-- CARD 3 -->
   <style>
      .text3 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text3 span {
      position: absolute;
      top:350;
      }
      .new2 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num2 {
      color:red;
      }
   </style>


<!-- CARD 4 -->
   <style>
      .text4 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text4 span {
      position: fixed;
      top:350;
      }
      .new3 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num3 {
      color:red;
      }
   </style>
<!-- CARD 5 -->

   
   <style>
      .text1 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text1 span {
      position: absolute;
      top:350;
      }
      .new4 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num4 {
      color:red;
      }
   </style>


<!-- CARD 6 -->
   <style>
      .text2 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text2 span {
      position: absolute;
      top:350;
      }
      .new5 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num5 {
      color:red;
      }
   </style>


<!-- CARD 7 -->
   <style>
      .text3 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text3 span {
      position: absolute;
      top:350;
      }
      .new6 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num6 {
      color:red;
      }
   </style>


<!-- CARD 8 -->
   <style>
      .text4 {
      position: relative;
      font-size:2vw;
      font-family: 'Open Sans', sans-serif;
      }
      .text4 span {
      position: absolute;
      top:350;
      }
      .new7 {
      writing-mode: vertical-rl;
      transform:scale(-1);
      }
      .num7 {
      color:red;
      }
   </style>


<!-- FOOTER -->
   <style>
      .text {
      text-decoration:none
      }
      .color {
      background-color:#5BB318
      }
   </style>

<!-- HEADER HTML -->
   <nav class="navbar navbar-light ">
      <div class="container-fluid d-flex justify-content-start">
         <img src="images/image1.png" alt="" width="55" height="55" class="d-inline-block align-text-top rounded-circle ">
         <a class="title navbar-brand fw-bold px-2 " href="#">Mc Caffe</a>
      </div>
   </nav>
   </head>
<!-- MENU -->
   <div class="scrollmenu d-flex justify-content-between fw-bold bg-light mt-3 ">
   <?php 
  
  foreach($categories as $category) {
    echo '<a href="#'.$category['name'].'">'.$category['name'].'</a>';
  };
  ?>
   </div>
<!-- CARD 1 -->
   <div class="d-flex justify-content-center">
      <div class="card1" style="width: 50rem;height: 25rem">
         <h2 class=" text1 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>KAFE</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new d-flex justify-content-start text-dark">
               <div class="num ">165</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>


	  
<!-- CARD 2 -->
      <div class="card2" style="width: 50rem;height: 25rem">
         <h2 class=" text2 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>ILLY CAPPUCCINO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new1 d-flex justify-content-start text-dark">
               <div class="num1">80</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
   </div>
<!-- CARD 3 -->
   <div class="d-flex">
      <div class="card3" style="width: 50rem;height: 25rem">
         <h2 class=" text2 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>LAVAZZA DECAF CAPPUCCINO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new2 d-flex justify-content-start text-dark">
               <div class="num2">567</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
<!-- CARD 4 -->
      <div class="card4 zoom" style="width: 50rem;height: 25rem">
         <h2 class=" text4 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>LAVAZZA DECAF DOUBLE ESPRESSO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new3 d-flex justify-content-start text-dark">
               <div class="num3">12</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
   </div>
   </div>
<!-- CARD 5 -->
   <div class="d-flex">
      <div class="card5" style="width: 50rem;height: 25rem">
         <h2 class=" text1 d-flex justify-content-start text-white fw-bold mb-auto p-4"><span>KAFE</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new4 d-flex justify-content-start text-dark">
               <div class="num4">1345</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
<!-- CARD 6 -->
      <div class="card6" style="width: 50rem;height: 25rem">
         <!-- <img class="card-img-top"  alt=""> -->
         <h2 class=" text2 d-flex justify-content-start text-white fw-bold mb-auto p-4"><span>ILLY CAPPUCCINO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new5 d-flex justify-content-start text-dark">
               <div class="num5">80</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
   </div>
<!-- CARD 7 -->
   <div class="d-flex">
      <div class="card7" style="width: 50rem;height: 25rem">
         <h2 class=" text2 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>LAVAZZA DECAF CAPPUCCINO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new6 d-flex justify-content-start text-dark">
               <div class="num6">479</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
<!-- CARD 8 -->
      <div class="card8" style="width: 50rem;height: 25rem">
         <h2 class=" text4 d-flex justify-content-start text-dark fw-bold mb-auto p-4"><span>LAVAZZA DECAF DOUBLE ESPRESSO</span></h2>
         <div class="d-flex justify-content-end">
            <h3 class=" new7 d-flex justify-content-start text-dark">
               <div class="num7">690</div>
               <div class="fw-light mt-2">lekë</div>
            </h3>
         </div>
      </div>
   </div>
   <footer class="color text-center text-lg-start">
      <div class="d-flex justify-content-end p-4">
         <a class="text text-white mt-3" href="https://dev.al/produktet/fiskalizimi">
            mundësuar nga 
            <div>	
               <img class="px-2" src="images/devpos.png" width="200px" alt="Card image cap">
         </a>
         </div>
      </div>
   </footer>
</body>
