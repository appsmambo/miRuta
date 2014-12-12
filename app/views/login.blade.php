@extends('layouts.login')
@section('content')
			<div id="login">
				@if (Session::has('timeout'))
				<div class="alert alert-dismissable alert-warning">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h4>Mensaje:</h4>
					{{ Session::get('timeout') }}
				</div>
				@endif
				@if (Session::has('error'))
				<div class="alert alert-dismissable alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ Session::get('error') }}
				</div>
				@endif
				<form class="form-signin" method="post" action="{{url()}}/doLogin">
					<?php echo Form::token(); ?>
					<div class="widget widget-4">
						<div class="widget-head">
							<h4 class="heading">Área restringida</h4>
						</div>
					</div>
					<div class="uniformjs">
						<select name="tipo" class="form-control input-block-level" data-style="btn-default">
							<option value="administrador">Administrador</option>
							<option value="colegio">Colegio</option>
							<option value="empresa">Empresa de Transporte</option>
						</select>
						<input type="text" name="correo" id="correo" class="form-control input-block-level" placeholder="Correo electrónico" value="admin@miruta.com">
						<input type="password" name="password" id="password" class="form-control input-block-level" placeholder="Clave" value="1234567890">
					</div>
					<button class="btn btn-large btn-primary glyphicons unlock pull-right" type="submit"><i></i> Ingresar</button>
					<div class="clearfix"></div>
				</form>
			</div>		
@stop