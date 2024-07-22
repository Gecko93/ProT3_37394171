<!-- navegación-->
 <?php
	$session = session();
	$nombre= $session->get('nombre');
	$perfil=$session->get('perfil_id');
	?>

<!--Barra de navegación-->
<nav class="navbar navbar-expand-lg bg-body-black">
  <div class="container-fluid">
	 <div class="navbar-header">
		<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
		    <!--Logo/Marca de la empresa-->
			 <img src="<?php echo base_url('assets/img/logoempresa.jpg')?>" class="logo" alt="marca"
			 width="100" height="100"  class="img-fluid"/>
			 </a>
			 </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<?php if(session()->perfil_id ==1): ?>
		<div class="btn btn-secondary active btnUser btn-sm">
		 <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
		 </div>
		 <a class="navbar-brand" href="#"></a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			 <li class="nav-item">
				<a class="nav-link" href='registro'>Registrarse</a></li>
				</li>
				<li class="nav-item">
				<a class="nav-link" href='login'>Login</a></li>
				</li>
				<li class="nav-item">
				 <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
				 </li>
				</ul>
			</div>
	<?php elseif(session()->perfil_id == 2): ?>
		<div class="btn btn-info active btnUser btn-sm">
		<a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
		 </div>
		 <!-- NAVBAR para clientes que pueden comprar-->

	<a class="navbar-brand" href="#"></a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  <li class="nav-item">
		<a class="nav-link" href='quienes_somos'>Quiénes Somos</a></li>
		</li>
		  <li class="nav-item">
		  <a class="nav-link" href='catalogo'>Catálogo</a></li>
		  </li>
		  <li class="nav-item">
		  <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
		  </li>
		 </ul>
		</div>
		 <?php else:?>
		<!-- NAVBAR para clientes no logueados-->
		<a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acercade'>Acerca de</a>
        </li>
		<li class="nav-item">
			<a class="nav-link" href='catalogo'>Catálogo</a>
			</li>
		<li class="nav-item">
			<a class="nav-link" href='registro'>Registrarse</a>
			</li>
		<li class="nav-item">
			<a class="nav-link" href='login'>Login</a>
			</li>
		</ul>
		 </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
	  <?php endif;?>
    </div>
  </div>
</nav>
<!--Fin Barra de Navegación-->