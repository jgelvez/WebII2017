<?php require "top.php";?>
<fieldset>

	<legend>Procesar formulario</legend>
	<form method="post" action="">
		<?php if($form->tieneErrores()):?>
		<div class="alert alert-danger">
			Se encontraron errores al procesar el formulario.
		</div>
		<?php endif;?>
		
		<?php $tiene_error = $form->tieneError('nombre') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $form->getValor("nombre");?>">
			<span class="help-block"><?php echo $form->getError('nombre');?></span>
		</div>
		
		<?php $tiene_error = $form->tieneError('apellido') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $form->getValor("apellido");?>">
			<span class="help-block"><?php echo $form->getError('apellido');?></span>
		</div>
		
		<?php $tiene_error = $form->tieneError('nacimiento') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="nacimiento">Fecha de nacimiento</label>
			<input type="date" class="form-control" name="nacimiento" id="nacimiento" min="01-01-1900" max="12-31-2002" value="<?php echo $form->getValor("nacimiento");?>">
			<span class="help-block"><?php echo $form->getError('nacimiento');?></span>
		</div>
		
		<?php $tiene_error = $form->tieneError('nacionalidad') ? "has-error" : "";?>
		<div class="form-group <?php echo $tiene_error;?>">
			<label class="control-label" for="nacionalidad">Nacionalidad</label>
			<select class="form-control" name="nacionalidad" id="nacionalidad">
				<option value=""></option> 
				<?php foreach($form->nacionalidad as $key => $item):?>
					<option value="<?php echo $key;?>" <?php echo $form->getSelected('nacionalidad', $key);?>><?php echo $item;?></option> 
				<?php endforeach;?>
			</select>
			<span class="help-block"><?php echo $form->getError('nacionalidad');?></span>
		</div>	
			
		<?php $tiene_error = $form->tieneError('vigente') ? "has-error" : "";?>
		<div class="<?php echo $tiene_error;?>">
			<div class="checkbox">
			<label>
				<input type="checkbox" name="vigente" id="vigente" value="1" <?php echo $form->getChecked('vigente');?>>
			Vigente
			</label>
		</div>
		
		
		<p><button type="submit" class="primary-button">Procesar formulario</button></p>
	</form>
		
</fieldset>
<?php require "bottom.php";?>
