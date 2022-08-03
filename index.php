<?php include 'countervisits.php';?>
<?php include 'r.php';?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" content="Site, Web, Responsivo, Concursos, Academia Internacional de Artes, Letras e Ciências, ALPAS 21, Editora Gaya, Cruz Alta, Jornal Correio da Palavra, Noroeste, Rio Grande do Sul, Livros, Coletâneas">    <meta name="author" content="Desenvoledor Freelancer Gaya, Cruz Alta, GitHub, Contato, Backend, Frontend">
  <meta name="description" content="Divulgação, Editora Gaya, Cruz Alta, Jornal Correio da Palavra, Cruz Alta, Rio Grande do Sul, Livros, Coletâneas">
  <meta property="og:url" content="https://editoragaya.000webhostapp.com/">
  <meta property="og:image:width" content="1440">
  <meta property="og:image:width" content="900">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="/functionsjsphpesclusive/code.js"></script>
<style>
	
* { box-sizing: border-box;

  }

body {

  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */

.header {
	
  padding: 80px;
  text-align: center;
  background-color: #008080;
  color: black;
}

/* Increase the font size of the h1 element */

.header h1 {

  font-size: 40px;
  text-align: center;

}

/* Style the top navigation bar */

.navbar {
    
  overflow: hidden;
  background-color: #333;

}

/* Style the navigation bar links */

.navbar a {
    
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */

.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */

.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */

.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */

.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.footer {
	
  padding: 5px;
  text-align: center;
  background-color: grey;
  color: black;
  width: 100%;
  	 	
}

/* Responsive images */

.img-theme {
	
  width: 100%;
  height: auto;
  max-height: 500px !important;
}

.img-theme:hover {
	
	transform: scaleX(-1);
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */

   @media screen and (max-width: 700px) {
  .row {   

    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */

   @media screen and (max-width: 400px) {

  .navbar a {
   
   float: none;
   width:100%;
  
  }
}

</style>

</head>

<body>

<div class="header">

  <h1>ALPAS 21 e Editora Gaya</h1>
  <p>Publicação de livros e revistas.</p>
  
  <img style="width:150px;height: 150px;" src="logosalpas/logo_gaya.png"> 
  
</div>

<div class="navbar">

  <a href="/livros/livros">Livros</a>
  
  <a href="/coletaneas/coletaneas">Coletâneas</a>
  <a href="/concursos/concursos">Concursos</a>
  <a href="/jornal/jcp-janeiro-2020">Jornal Correio Da Palavra</a>
  
  <a href="/contato/contact" class="right">Contato</a>
  <a href="/academicos/academicos">Acadêmicos ALPAS 21</a>

</div>

<div class="row">
  
  <div class="side">
    
    <h2>Sobre: Editora Gaya</h2>
    
    <h5>Publicação de Livros e Revistas</h5>
    
    <p>Edição de livros literários, didáticos, infanto-juvenil e coletâneas.</p>
    <p>Projetos editoriais personalizados.</p>
    <p>Assessoria ao autor.</p>
    <p>Pequenas, médias e grandes tiragens.</p>
    <p>Lançamentos e sessões de autógrafos em feiras e eventos literários.</p>
    <p>Entrega em todo o Brasil.</p>
    
    <img class="img-theme" src="/logosalpas/logo.png">
    
  
    
    <section>
        
        <img class="img-theme" src="/logosalpas/logoalpastr.png">
    
    
    <h3>ALPAS 21 - Presente em 16 países Concursos Literários Internacionais, Feiras de Livros</h3>
    
    <p>Lema: </p>
    
    <i><p style="text-align: right;">Vivemos a arte, a literatura e as ciências em manifesto pela criação da cidadania planetária.</p></i>
    
    </section>
    
    <details>
        
        <summary>Livraria Virtual Gaya</summary>
    
    <p>Através da colaboração dos autores e participantes da ALPAS 21, esse projeto tende a ser lançado este ano.</p>
    <p>Assim, ampliando a divulgação e marcando o seu devido espaço no mundo literário.</p>
   
    </details>
    
    <img class="img-theme" src="/logosalpas/coletaneavozes.png">
    <img class="img-theme" src="/logosalpas/jcpanuncio.png">
    
    <!--<a href="/jornal/jcp012020.html">Jornal Correio Da Palavra - Edição: Janeiro 2020 - Acesse!</a> -->
  
 
  </div>
  
  <div class="main">
    <input type="hidden" value="text">
    <h2>Coletâneas</h2>
    
    <img class="img-theme" src="/logosalpas/capasite.jpg">
    <img class="img-theme" src="/logosalpas/32concurso.png">
    
    <h2>Em breve: Livraria Virtual</h2>
    <h5>Editora Gaya / ALPAS 21</h5>
    
     <img class="img-theme" src="/logosalpas/livrariavirtual.png">
    
    </div>
    
    <div class="footer">
	  
	  <p>Presidente e fundadora da Editora Gaya e ALPAS 21: Rozelia Scheifler Rasia</p>
	  <p>© 2020. Editora Gaya e ALPAS 21. Todos os direitos reservados.</p>
	  <a href="https://www.facebook.com/r.mardero.jr" style="color:white;display:block;float:none;overflow:hidden;text-decoration:none;">Desenvolvedor: Roberto Mardero Junior</a>
	 
  </div>
 
 </div>
 </div>

 </body>
 
</html>
