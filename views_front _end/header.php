<!DOCTYPE HTML> 
<html lang="es">
    <head>
            <meta charset="utf-8" />
            <title>Tienda | Camisetas</title>
            <!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css" /> -->
            <link rel="stylesheet"   type="text/css" href="<?=base_url?>assets/css/styles.css" />
   </head>
   <body>
          <div id= "container">
              <header id="header"> 
                <div id="logo">
                 <img  src= "<?=base_url?>assets/img/camiseta.png" alt="Camiseta logo" />
                   <a href="<?=base_url?>">   
                   Tienda de Camisetas
                  </a> 
                </div>
              </header>

               <!--menu-->
               <?php $categorias = Utils::showCategorias(); ?>
                <nav id="menu">
                  <ul>
                    <li>
                      <a href="<?=base_url?>">Inicio</a>
                    </li>
                    <?php while($cat = $categorias->fetch_object()): ?>
                      <li>
                        <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                      </li>
                    <?php endwhile; ?>
                   </ul> 
                </nav>

               <!-- barra lateral-->
               <div id="content">
    