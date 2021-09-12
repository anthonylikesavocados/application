<!DOCTYPE html>
<head>
<title>Anthony's Application</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Lato:wght@100&display=swap" rel="stylesheet">
<style media="screen">
body{
margin: 0;
padding: 0;
font-family: 'Bad Script', cursive;
font-family: 'Lato', sans-serif;
font-weight:normal;
background-image: url(https://images.pexels.com/photos/1640773/pexels-photo-1640773.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-size: cover;
}
h1{
color:cornsilk;
font-size:25px;
}
.box{
width: 350px;
height: 396px;
background-color:black;
opacity: 0.7;
background: #4B79A1;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #283E51, #4B79A1);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #283E51, #4B79A1); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
box-shadow: 0 10px 30px black;
border-radius: 10px;
position:absolute;
top:30%;
left:20%;
transition: ease-in-out 0.3s;
}
.box:hover{
opacity:0.9;
}
.text{
color:cornsilk;
}
.field{
margin:25px;
height:25px;
}
.butonchi{
color:cornsilk;
background-color:#264653;
width:80px;
height:50px;
border-radius: 10px;
border-color:white;
transition: ease-in-out 0.3s;
position:absolute;
bottom:10px;
left:50%;
transform:translateX(-50%);
}
.butonchi:hover{
box-shadow: 0 0 10px white;
}
.story-field{
position:absolute;
left:120%;
top:0;
background-color: rgba(255, 255, 255, 0.75);
border-radius: 10px;
box-shadow: 0 0 10px white;
border-color:navy;
transition: ease-in-out 0.3s;
font-family: 'Bad Script', cursive;
font-size:20px;
color:black;
}
.story-field:hover{
box-shadow: 0 0 10px blue;
background-color: rgba(255, 255, 255, 0.85);
}
</style>
</head>
<body>
  <div class="box"><h1>Dive on in!</h1>
    <form action="php.php">
      <div class="input-box">
        <input class="field" type="text" name="username" autocomplete="off" required>
        <label class="text"for="">Username</label>
      </div>
      <div class="input-box">
        <input class="field"  type="email" name="email" autocomplete="off" required>
        <label class="text" for="">Email</label>
      </div>
      <div class="input-box">
        <input class="field"  type="password" name="password" autocomplete="off" required>
        <label class="text" for="">Password</label>
      </div>
      <div class="input-box">
        <textarea class="story-field" type="story" name="story" autocomplete="off" rows="10" cols="35" required>Tell us a little more about yourself.</textarea>
      </div>
        <input class="butonchi" type="submit" value="Save">
    </form>
</div>
</body>
