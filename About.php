<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>About Bipin</title>
<link rel="stylesheet" href="css/abstyle.css">
<style>
  *{
    margin: 0;padding: 0;box-sizing: border-box;
}
body{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(30deg, #0abde3,#FC427B);
}
#main{
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
}
#body{
    width: 70%;
    height: 500px;
  /* background-color: aliceblue; */
  display: flex;
 
 
}
#pro{
    width: 25%;
    height: 500px;
    background:aliceblue;
 border-radius: 20px;
 margin-right: 5%;
 box-shadow: 10px 10px 5px black;
}
#pro img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
  padding: 10px;
  margin-left: 40px;
  margin-top: 20px;
}
#pro h3{
    font-size: 25px;
  text-align: center;
}
#pro span{
    font-weight: 200;
}
#pro p{
    text-align: center;
    background: #CAD3C8;
    border-radius: 20px;
    padding: 10px;
    width: 170px;
    margin-left: 20px;
}
#prp #icon{
    width: 150px;
}
#pro #icon img{
    width: 50px;
    height: 50px;
    margin: 0px;
    
}
#pro #det{
    width: 180px;
    height: auto;
    padding: 5px;
    margin-left: 20px;
    text-align: start;
    background:#CAD3C8;
    border-radius: 20px;
}
#pro #det p{
    background: none;
    text-align: start;
    margin-left: 7px;
}
#pro button{
    padding: 5px;
    background: green;
    border-radius: 20px;
    text-align: center;
    color: #fff;
    width: 100px;
    margin-left: 60px;
    margin-top: 10px;
    cursor: pointer;

}
#details{
    width: 75%;
    height: 500px;
    background:aliceblue;
    border-radius: 20px;
}
#details header{
    width: 100%;
    height: 200px;
}
#details header h3{
    font-size: 25px;
    color: red;
    padding: 10px;
}
#details footer{
    width: 100%;
    height: 300px;
    background: #CAD3C8;
  padding: 3px;
  border-radius: 20px;
}
#details footer h2{
    padding: 10px;
    color: red;
}
#details footer  #g1{
  
    background: #fff;
}
#details footer  #g2{
   
    background: #fff;
}
#details footer  #g3{
   
    background:#fff;
}
#details footer  #g4{
  
    background: #fff;
}
#details footer main{
    width: 100%;
    
    display: grid;
    grid-template-rows: repeat(2,100px);
    grid-template-columns: repeat(2,320px);
    grid-gap: 10px; 
    margin-left: 13px;
    
}
 #g1 .fa-laptop{
    width: 10%;
    color: blue;
    font-size: 20px;
    text-align: center;

}
#details header h3{
  width:130px;
    font-size: 25px;
    color: red;
    padding: 10px;
    margin-left:25px;
    border-bottom:4px solid green;
}
main #g1{
  display:flex;
}
main #g2{
  display:flex;
}
main #g3{
  display:flex;
}
main #g4{
  display:flex;
}
main #ic{
  width:15%;
  text-align:center;
  margin-top:20px;
}
main #con{
  margin-top:20px;
  margin-left:10px;
}
main .fa{
   color: blue;
    font-size: 25px;
    text-align: center;
}
main #con{
  width:85%;
  height:100%;
}
header #de{
  height:350px;
  margin-top:20px;
  margin-left:25px;
  /* overflow-y:scroll; */
}
#de p{
  font-size:17px;
  color:#000;
}
#de h2{
  font-size:25px;
  background:gray;
  text-align:center;
  color:rgba(0,225,0,1);
}
#de h5{
  font-size:17px;
}
#bar{
  position:absolute;
  left:80%;
  top:60px;
  /* top:-10px; */
}
.fa-bars{
  font-size:25px;
  background:blue;
  border-radius:50%;
  padding:10px;
  color:#fff;
}
#port{
  display:none;
  position:absolute;
  left:72.7%;
  top:96px;
  width:100px;
  height:30px;
  background:#000;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
 
}

#port p a{
  /* width:100%;
  height:100%; */
 text-decoration: none;
  color:#fff;
  font-size:20px;
 text-align:center;
  margin-top:5px;
  padding:5px;
 
}
#port .fa-user{
  color:red;
  margin-left:2px;
}
#icon img{
  margin:0px;
}
</style>
</head>
<body>
  <div id="main">
  <div id="body">
  <div id="pro">
    <img src="img/bipin.jpg" alt="" srcset=""><br>
    <h3> <span>Devloper</span> Bipin</h3><br>
    <p>Web Devloper</p><br>
    <div id="icon">
   <img src="img/icon/f2.png" alt="" srcset="">
   <img src="img/icon/ins.png" alt="" srcset="">
   <img src="img/icon/tw.png" alt="" srcset="">
   <img src="img/icon/ty.png" alt="" srcset=""><br>

   <div id="det">
    <p><i class="fa fa-calendar" aria-hidden="true"></i> September 03, 2020</p>
    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Ara(Bihar)</p>
     <p><i class="fa fa-user" aria-hidden="true"></i>Profile</p>
   </div>
   <button type="submit">Email Me</button>
   </div>
  </div>


  <div id="details">
   <header>
     <h3>About me</h3>
     <div id="bar">
     <i class="fa fa-bars" aria-hidden="true" id="bb"></i>
     </div>
     <div id="port">
 <p><i class="fa fa-user" aria-hidden="true"></i> <a href="">Portfolio</a></p>
     </div>
     <div id="de">
     <p> I'am a web designer and front end devloper
            and back end devloper from Ara,Bihar.
            who loves design and internet sphere.</p>
            <h5>My name is Bipin Kumar,I am 17 years old.
        I belong to middle class family.
    I live in India.</h5>
    <h2>As for as my qualification is concered. </h2>
    <p id="p2">
        I have passed 10th from Bihar Bord.
        I am pursuing 12th from H.N.K Inter College Ara(Bihar).
        I have also done Web devlopement course in 2019.
    </p>
    </div>
   </header>
   <footer>
     <h2>What I'm doing</h2>
     <main>
       <div id="g1">
         <div id="ic">
       <i class="fa fa-laptop" aria-hidden="true"></i>
       </div>
       <div id="con">
       <h4>Web devlopment</h4>
       <p>Able to creat beautiful sites by using HTML,CSS,JS</p>
       </div>
        </div>

       <div id="g2">
       <div id="ic">
       <i class="fa fa-book" aria-hidden="true"></i>
       </div>
       <div id="con">
       <h4>HTML devlopment</h4>
       <p>Able to create HTML EMAAS quickly and effective.</p>
       </div>
       </div>
       <div id="g3">
       <div id="ic">
       <i class="fa fa-mobile" aria-hidden="true"></i>
</div>
       <div id="con">
       <h4>Responsive design</h4>
       <p>Able to create mobile responsive sites at a professional level.</p>
       </div>
       </div>
       <div id="g4"></div>
       </main>
     
   </footer>
  </div>
  </div>
  </div>
  <script src="jquery/jquery-3.5.1.min.js"></script>
  <script>
  $(document).ready(function(){
   $('#bb').click(function(){
  $('#port').toggle(1000);
   });
  });
  </script>
</body>
</html>