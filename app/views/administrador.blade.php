@extends('layouts.master')
@section('content')
			<div id="wrapper">
				<div id="menu" class="hidden-sm hidden-print">
					<div id="menuInner">
						<!-- Scrollable menu wrapper with Maximum height -->
						<div class="slim-scroll" data-scroll-height="420px">
                            <div id="search">
                                <input type="text" placeholder="Buscar...">
                                <button class="glyphicons search"></button>
                            </div>
							<ul>
								<li class="heading"><span>Opciones</span></li>
                                <li class="glyphicons eye_open active"><a href="{{url()}}"><span>En vivo</span></a></li>
								<li class="glyphicons home"><a href="{{url()}}/colegios"><span>Colegios</span></a></li>
								<!--li class="hasSubmenu">
									<a data-toggle="collapse" class="glyphicons parents" href="#menu_familias"><span>Familias</span></a>
									<ul class="menuCollapse" id="menu_familias">
										<li class=""><a href="{{url()}}"><span>Padres</span></a></li>
										<li class=""><a href="{{url()}}"><span>Alumnos</span></a></li>
									</ul>
								</li>
								<li class="hasSubmenu">
									<a data-toggle="collapse" class="glyphicons bus" href="#menu_transporte"><span>Empresas</span></a>
									<ul class="menuCollapse" id="menu_transporte">
										<li class=""><a href="{{url()}}"><span>Transportista</span></a></li>
										<li class=""><a href="{{url()}}"><span>Vehículos</span></a></li>
										<li class=""><a href="{{url()}}"><span>Conductores</span></a></li>
										<li class=""><a href="{{url()}}"><span>Monitoras</span></a></li>
									</ul>
								</li-->
							</ul>
							<!--ul>
								<li class="heading"><span>Sections</span></li>
								<li class="glyphicons coins"><a href="finances.html?lang=en"><span>Finances</span></a></li>
								<li class="hasSubmenu">
									<a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><span>Online Shop</span></a>
									<ul class="menuCollapse" id="menu_ecommerce">
										<li class=""><a href="products.html?lang=en"><span>Products</span></a></li>
										<li class=""><a href="product_edit.html?lang=en"><span>Add product</span></a></li>
									</ul>
								</li>
								<li class="glyphicons sort"><a href="pages.html?lang=en"><span>Site Pages</span></a></li>
								<li class="glyphicons picture"><a href="gallery.html?lang=en"><span>Photo Gallery</span></a></li>
								<li class="glyphicons address_book"><a href="bookings.html?lang=en"><span>Bookings</span></a></li>
							</ul-->
						</div>
					</div>
				</div>
				<div id="content">
					<ul class="breadcrumb">
						<li><a href="index.html?lang=en" class="glyphicons home"> miRuta</a></li>
						<li class="divider"></li>
						<li>En vivo</li>
					</ul>
					<div class="separator bottom"></div>
					<div class="heading-buttons">
						<h3 class="glyphicons eye_open"> En vivo</h3>
						<div class="clearfix" style="clear: both;"></div>
					</div>
					<div class="separator bottom"></div>
                    <div id="map" class="map" tabindex="0">
                        
                    </div>
				</div>
			</div>	
	@stop