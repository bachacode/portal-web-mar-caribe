<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos</title>
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/menu.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/formulario.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/reg-pro.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/styles/Sistema/validacion.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/animations.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/boxicons-2.1.1/css/transformations.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Menú -->
    <?php require('partials/menu.php') ?>
    <!-- FIN MENÚ -->
    <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'> <span class="text">Menú</span></i>
          <p class="welcome">Bienvenido Usuario#1</p>
        </div>
        <section id="Registrar-producto">
            <div class="menu-section">
              <span class="current-section">Registrar Producto</span>
            </div>
            <div class="Registrar-producto">
              <form action="<?php echo FOLDER_PATH.'/sistema/reg_pro/grabar'?>" class="form" id="formulario" method="POST">
                <div class="form-content">
                  <!-- NOMBRE PRODUCTO -->
                  <div class="form-group" id="grupo__producto">
                    <input type="text" class="form-input" placeholder=" " name="Nom_producto">
                    <label for="" class="form-label" type="text">Nombre:</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">El producto tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                  </div>
                  <!-- CATEGORIAS -->
                  <div class="form-group category">
                    <label for="" class="form-label categoria" type="text">Categoría:
                      <select id="categorias" class="form-select" name="Categoria">
                      <?php
                        for($i=0;$i<sizeof($datos);$i++){ ?>
                        <option value="<?php echo $datos [$i] ["id_categoria"];?>"><?php echo $datos [$i] ["nom_categoria"];?></option>
                        <?php } ?>
                      </select>
                    </label>
                    <span class="form-line"></span>
                  </div>
                  <!-- CANTIDAD -->
                  <div class="form-group" id="grupo__cantidad">
                    <input type="text" class="form-input" placeholder=" " name='Cantidad' maxlength="2"/>
                    <label for="" class="form-label" type="number">Cantidad:</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                  </div>
                  <!-- PRECIO -->
                  <div class="form-group" id="grupo__precio">
                    <input type="text" class="form-input" placeholder=" " name="Precio" maxlength="4">
                    <label for="" class="form-label" type="text">Precio</label>
                    <span class="form-line"></span>
                    <p class="formulario__input-error">Ingresar únicamente dígitos numéricos.</p>
                  </div>
                  <!-- IMAGEN -->
                  <div class="form-group">
                    <input type="file" class="form-input" placeholder="" name="Imagen" >
                    <label for="" class="form-label" type="text">Imagen</label>
                    <span class="form-line"></span>
                  </div>
                  <input type="hidden" id="grabar" name="grabar" value="true">
                  <input type="submit" class="form-btn" value="Registrar Producto">
                </div>  
              </form>
            </div>
          </section>
    </section>
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/menu.js"></script>   
    <script src="/Github MarCaribe/Portal-Web-Mar-Caribe-Center/mvcPortalWeb/Assets/slide/Form.js"></script>
</body>
</html>