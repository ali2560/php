<?php
   withModel();
   $device = Device::find_by_id($id);

    IW::Lib("Form");
    echo Form::create("create")->method( "POST")->action( route("device/edit/$id") )->validate(true);

?>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Edit "<?php echo $device->name ?>"</h3>
    </div>
    <div class="box-body">
        <?php

            echo Form::_("text","Device Name","name")->required()->pre("<i class='fa fa-microchip'></i>")->value( $device->name );
            echo Form::_("text","Device Address","address")->required()->pre("<i class='fa fa-at'></i>")->value( $device->address);
            echo Form::_("select","Device Type","type")->required()->options([
                                                                                 "sensor"=>"Sensor",
                                                                                 "actuator"=>"Actuator",
                                                                                 "master"=>"Master"
                                                                             ])->select( $device->type);

            echo Form::_("textarea","Description","description")->value( $device->description);



        ?>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        <button class="btn btn-danger" onclick="App.redirect('device')"><i class="fa fa-times"></i> Cancel</button>
    </div>
</div>
<?php 	echo Form::close(); ?>
