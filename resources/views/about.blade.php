<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./mypractic.css">

    <title>Laravel Pracetice</title>


    <style>
        body
        {
            font-family: century gothic;
        }
  .header ul
  {
     display: flex; 
     list-style: none;
  }
    
  .header a 
  {
      text-decoration: none;
      color: black;
  }
  .header li
{
  padding: 2px 1rem ;
  text-align: center;
  margin-top: auto;
}

.header a:hover
  {
      color: white;
  }
  .header li:hover
{
  background-color: gray;
  color: white;
}
.logo a
{
    color: blue;
    font-size: 30px;
    margin-right: 30rem;
    font-family: century gothic;
    font-weight: bolder;
}
.logo a:hover
{
color:blue;
}
li.logo:hover
{
background-color: transparent;
}
.logo span
{
 font-size: 14px;
color: navy;
}

.container
{
    display: grid;
    justify-content: center;
    padding: 2rem;
}
.container img
{
width:23rem;
height: auto;
border-radius: 3rem;
margin: auto;

}

.container H1
{
color: brown;
padding: 1rem;
margin: auto;

}
    </style>
</head>
<body>
    

<div class="header">

<ul>
    <li class="logo"> <a href="http://127.0.0.1:8000/"> CLASS TASKS.<span>COM </span> </a></li>
    <li> <a href="http://127.0.0.1:8000/">HOME </a>  </li>
    <li> <a href="./about">ABOUT US </a>  </li>
    <li><a href="./contact">CONTACT US </a> </li>
</div>

<div class="container">
    <h1>
    About US
    </h1>
<img src="{{ asset('images/about us.jpg') }}" alt="" >

</div>
</body>
</html>
</body>
</html>