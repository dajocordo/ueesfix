<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style type="text/css">
      body{
        background-color: #22293D;
        color: white;
        font-family: 'Open Sans', sans-serif;
      }
      .container{
        text-align: center;
        justify-content: center;
        align-items: center;
      }

      .lbl1 {
          font-size: 1.50em;
          letter-spacing: 0.07em;
          margin-bottom: 1em;

       }

       .form-control {
          font-size: 1.50em;
          color: #22293D;
          letter-spacing: 0.07em;
          height: 3em;


        }


       .btn-entrar{
          width: 35%;   
          height: 3em;     
          color: #22293D ;
          background-color: #FFB0D1 ;
          font-weight: bold;
          font-size: 1.50em;
          letter-spacing: 0.07em;
          margin-top: 1em;

        }
      
      .seeprofile {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #FFCCBC;
      }
      
      .editprofile {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #B2EBF2;
      }
      
      .knowteam {
        margin: 0.9em;
        height: 4em;
        width: 25%;
        font-weight: bold;
        font-size: 1.25em;
        color: #22293D;
        display: inline-block;
        background-color: #DCEDC8;
      }
      
      #saludo{
        margin-top: 2em;
        margin-bottom: 1.50em;
        letter-spacing: 0.07em;
        color: #FCF0F5 ;
        font-weight: bold;
        font-size: 2.75em;

      }
      
      .ppro{ padding-top: 1.2em;}
      .modal-body, .modal-title {
        color: #22293D;
        font-weight: bold;            
      }
      
      .btn-primary{ background-color: #22293D;}
       
      .topnav {
        overflow: hidden;
        background-color: #22293D;
        font-weight: bold;
      }
      
      .topnav a {
        margin-top: 0.7em;
        margin-left: 0.7em;
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding-top: 0.7em;
        padding-bottom: 0.7em;
        padding-left: 2.15em;
        padding-right: 2.15em;
        text-decoration: none;
        font-size: 1.2em;
      }
      
      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }
      
      .topnav a.active {
        background-color: #ddd;
        color: #22293D;
      }
      
      .topnav .icon {
        display: none;
      }
      
      .topnav .tophome {
        margin-left: 0.7em;
      }
      
      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
          float: right;
          display: block;
        }
      }
      
      @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
          position: absolute;
          right: 0;
          top: 0;
        }
        .topnav.responsive a {
          float: none;
          display: block;
          text-align: left;
        }
      }
          
      @media screen and (max-width: 600px) {
        .seeprofile,
        .editprofile,
        .knowteam {
          width: 70%;
          height: 5em;
        }
        .ppro{
          padding-top: 1.7em;
        }
      }
      </style>
    </head>
    <body>
      
        <!--|==========| Container | ↓ | inicio |==========|-->
        <div class="container">
          <!--|==========| Perfil | ↓ |==========|-->
          <h1 id="saludo">UEES FIX</h1>

<div class="form-group">
      <label class="lbl1" >  Usuario </label><br>
          <input type="text" class="form-control" id="usr" name="usuario"><br><br> 
    </div>

    <div class="form-group">
      <label class="lbl1" >  Contrasena   </label><br>
          <input type="text" class="form-control" id="pwd" name="password"><br><br> 
    </div>

           <input type="submit"  class="btn-entrar"  name="entrar" value="Entrar" ><br><br> 


        </div>
       


    </body>
</html>
