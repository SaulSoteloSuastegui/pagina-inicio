<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        border: none;
        outline: none;
    }
    .grid {
        display: grid;
        grid-template-columns: 150px 1fr;
        grid-template-rows: 1fr 100vh;
        grid-gap: 20px 1fr;
    }

    .menu1{
     /*   border-style: solid;
        border-color: green;*/
    grid-column: 2 / 2;
}
.menu2{
   /* border-style: solid;
    border-color: red;*/
    border-style: ;
     grid-column: 1 / 2;
}

.content {
    /*border-style: solid;
     border-color: blue;*/

     grid-column: 2 / 2;
     grid-row: 2 / 2;
  
}


    </style>
</head>
<body>
<div class="grid">
    <div class="menu1">
        <nav style=" padding: 10px ;" >
            <a onclick="html(event)" href="">HTML</a> |
            <a onclick="js(event)" href="/css/">JS</a> |
            <a onclick="php(event)"  href="/js/">PHP</a> |
            <a onclick="MYSQL(event)"  href="/python/">MYSQL</a>
            <a onclick="PHP(event)"  href="/js/">LINUX</a> |
            <a onclick="PHP(event)"  href="/js/">SEO</a> |
            <a onclick="PHP(event)"  href="/js/">POTOSHOPT</a> |
            <a onclick="MYSQL(event)"  href="/python/">MARKETING</a>
        </nav>
    </div>
  <div class="menu2">  
    <div id="mostrar">

    </div>
  </div>
  <div class="content">  
    <div>
        <iframe id="myPagina" src="../php/pagina1.php" height="700px" width="90%" title="Iframe Example"></iframe>
    </div>
  </div>
</div>

<br>


</body>
</html>
<script>
function html(evt) {
    document.getElementById("mostrar").innerHTML = '';
    console.log('html');
    evt.preventDefault();
    document.getElementById("mostrar").innerHTML += '<nav style=" padding: 10px ;" >'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'pagina1.php\'"   href="javascript:void(0);">uno</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'pagina2.php\'"   href="javascript:void(0);">dos</a>'+
    '</nav>';
  }
  function  prender(evt){
    evt.preventDefault();
    document.getElementById('myImage').src='pic_bulbon.gif';
  }
  function  off(evt){
    evt.preventDefault();
    document.getElementById('myImage').src='pic_bulboff.gif';
  }
  function js(evt) {
    document.getElementById("mostrar").innerHTML = '';
    console.log('JS');
    evt.preventDefault();
    document.getElementById("mostrar").innerHTML += '<nav style=" padding: 10px ;" >'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Cadenas</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Arreglos</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Poo</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Funciones</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Poo</a>'+
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Formularios</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Mysql</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">fechas</a>'+
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">pdf</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">qr</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Calendario</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">php-json</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Imagenes</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Archivos</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Gradica</a>'+
    
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Correo</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">quictografia</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Cadenas</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">dos</a>'+
    
    '</nav>';
  }
  function php(evt) {
    document.getElementById("mostrar").innerHTML = '';
    console.log('html');
    evt.preventDefault();
    document.getElementById("mostrar").innerHTML += '<nav style=" padding: 10px ;" >'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Cadenas</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Arreglos</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Poo</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Funciones</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Poo</a>'+
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">Formularios</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Mysql</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">fechas</a>'+
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">pdf</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">qr</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Calendario</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">php-json</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Imagenes</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Archivos</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Gradica</a>'+
    
    '<br>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Correo</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">quictografia</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina1.php\'"   href="javascript:void(0);">Cadenas</a>'+
    '<a style=" display: block;"  onclick="document.getElementById(\'myPagina\').src=\'../php/pagina2.php\'"   href="javascript:void(0);">dos</a>'+
    
    '</nav>';
  }

</script>