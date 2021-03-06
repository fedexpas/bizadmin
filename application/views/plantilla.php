<html>
    <head>
        <title>BizAdmin</title>
        <link href="/bizadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
            padding-top: 50px;
          }
          .starter-template {
            padding: 40px 15px;
            text-align: left;
          }
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BizAdmin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php echo ($activo=='inicio')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/inicio">Inicio</a></li>
            <li <?php echo ($activo=='productos')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/producto">Productos</a></li>
            <li <?php echo ($activo=='ventas')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/inicio/ventas">Ventas</a></li>
            <li <?php echo ($activo=='pedidos')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/pedidos">Pedidos</a></li>
            <li <?php echo ($activo=='cliente')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/cliente">Clientes</a></li>
            <?php if ($this->session->userdata('cliente')) { ?> <!----- Si la sesion esta trabajando con un cliente (se inicia en producto/venta_ok) ------->
                <li <?php echo ($activo=='carrito')?'class="active"':''; ?>><a href="http://localhost:8888/bizadmin/index.php/cliente/carrito">Carrito de <?php echo $this->session->userdata('cliente'); ?></a></li> <!--- Imprime el nombre del cliente con el link para ir a su carrito de compras ---->
            <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <?php $this->load->view($vista); ?>
        
    </div><!-- /.container -->
        
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>scripts/script.js"></script>
</body>
</html>