<?php
    IW::Lib("Form");
    echo Form::create("create")->method( "POST")->action( route("device/create") )->validate(true);

?>
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Create Device</h3>
	</div>
	<div class="box-body">
		<?php

			echo Form::_("text","Device Name","name")->required()->pre("<i class='fa fa-microchip'></i>");
            echo Form::_("text","Device Address","address")->required()->pre("<i class='fa fa-at'></i>");
			echo Form::_("select","Device Type","type")->required()->options([
					"sensor"=>"Sensor",
					"actuator"=>"Actuator",
					"master"=>"Master"
			                                                     ]);

			echo Form::_("textarea","Description","description");



			?>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
		<button class="btn btn-danger"><i class="fa fa-times" onclick="App.redirect('device')"></i> Cancel</button>
	</div>
</div>
<?php 	echo Form::close(); ?>