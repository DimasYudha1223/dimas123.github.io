<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
</head>
<body>
  
</body>
</html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Times New Roman', Times, serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  width: 50%;
  margin: 0px auto;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.158);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #00319b;
  color: white;
}

.container {
  padding: 0 20px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 15px;
  color: white;
  background-color: rgb(226, 19, 19);
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: rgb(4, 0, 219);
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Me</h1>
  <p>All of The Thing That is Happening in Samarinda is Always Within My Reach</p>
  <p>Night City Samarinda</p>
  <p>Night Crawler</p>
</div>

<h2 style="text-align:center">About Me</h2>

  <div class="column">
    <div class="card">
      <img src="img/DAYGANTENG.jpg" alt="ItsMeDimas" style="width:100%">
      <div class="container">
        <h2>Dimas Abdi Yudha</h2>
        <p class="title">2109106005</p>
        <h3>Studying At Univercity Of Mulawaran</h3>
        <h3>Informatic Study</h3>
        <p>Contact Me: dimasabdiyudha45@gmail.com</p>
        <p><button class="button">Contact</button></p>
        <p> <a href="index.php"><button>Back To Main Page</button></a> </p>
      </div>
    </div>

</style>