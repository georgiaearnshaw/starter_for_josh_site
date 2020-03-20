<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css"/>
      <link rel="stylesheet" href="responsive.css"/>
    
    </head>
  <body>
         <header class="container-fluid herobg">
     <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        
        <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">HOME</a></li>
        <li><a href="#">PROJECTS</a></li>
        <li><a href="#">PUBLICATIONS</a></li> 
        <li><a href="#">CV</a></li> 
        <li><a href="#">CONTACT</a></li> 
      </ul>
    
    </div>
  </div>
</nav> 
      
          <div class="container">
              <h1> Games Design for the future</h1>
          </div>
      </header>
  
      
      <section class="container-fluid aboutbg text-center">
      
      <div class="container">
          
<?php get_header(); /* Tells WordPress to include header.php */ ?>
     <section class="container-fluid aboutbg text-center">
        <div class="container">
            
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
    	
 <div class="blocker"></div>
            
      </div><!--  container-->
    </section>
       
      
          
              </div>
<!--          container-->
          
      </section>
      
      <section class="container-fluid articlebg">
      <div class="container">
          <div class="row">
          <h3 class="text-centre article-title">LATEST ARTICLES</h3>
          </div>
          
          <div class="col-md-4 article-cent">
              <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/pictureforcolumns.jpg">
                                                                                               
              <h4>A PORTRAIT</h4>
              <p class="date">12 December 2020</p>
              <p>STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts. </p>
              <p class="readmore">CONTINUE READING</p>
               
          </div>
          
                 <div class="col-md-4 article-cent">
                       <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/a-model.jpg">
                     
              <h4>A MODEL</h4>
               <p class="date">12 December 2020</p>
              <p>STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts. </p>
              <p class="readmore">CONTINUE READING</p>
               
          </div>
          
                <div class="col-md-4 article-cent">
                      <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/leaf.jpg">
                    
              <h4>GAMES DESIGN</h4>
               <p class="date">12 December 2020</p>
              <p>STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts. </p>
             <p class="readmore">CONTINUE READING</p>
               
          </div>
<!--          row-->
        </div>
<!--          container-->
      </section>
      
      
      <footer class="container-fluid">
      <div class="container">
          <div class="row">
              
              <div class="col-md-6 text-center footer-content">
               <p>JOSH WHITKIN</p>
                  <img src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/twitter.jpg" alt="twitter">
                  <img src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/wifi.jpg" alt="wifi">
              </div>
                 <div class="col-md-6 text-center footer-content">
               <p>Terms and Conditions</p>
                      <img src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/in.jpg" alt="in">
                  <img src="http://206.189.45.97/~mesh11/wp-content/themes/starter_for_josh_site1/images/facebookjpg" alt="facebook">
              </div>

          </div>
          </div>
          
      </footer>
      
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>