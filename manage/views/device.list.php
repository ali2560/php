<?php
    IW::Lib("Paginator");
    withModel();
    app("DEVICE.TYPES",["sensor"=>"Sensor",
                        "actuator"=>"Actuator",
                        "master"=>"Master"]);


?><div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Devices</h3>
    </div>
    <div class="box-body">

        <?php


            $columns = [
                "id" => ["title" =>  "ID", "width" => "60px", "sort" => true ],
                "name"=>["title" => "Device Name", "width" => "auto","filter" => "`col` LIKE '%*%'", "sort" => true,"format"=>function($row){
                    return "<a href='".route("device/edit/".$row["id"])."'>".$row["name"]."</a>";
                }],
                "address" => ["title" =>"Address", "width" => "180px", "filter" => "`col` LIKE '%*%'", "sort" => true ],
                "type" => ["title" =>"Device Type", "width" => "140px", "sort" => true,"type"=>"select","options"=> app("DEVICE.TYPES"),"format"=>function($row){
                    $types =  app("DEVICE.TYPES");
                    return $types[ @$row["type"] ];
                }],
                "action" => ["title" =>"Action","width" => "200px", "format"=>function($row){

                    return
	                    "<a class='btn-sm btn-primary' href='".route("device/edit/".$row["id"])."' >Edit</a> ".
                        "<a class='btn-sm btn-danger' href='".route("device/delete/".$row["id"])."' >Delete</a> "
	                    ;

                }, "clear"=>"<i class='fa fa-close'></i> Clear","search"=>"<i class='fa fa-search'></i> "."Filter"]

            ];


            $query = [];
            if(isset($_GET["form"]))
                foreach($_GET["form"] as $key=>$val ){
                    $val = Input::get($key);
                    if($val != "" && $val != "-1")
                        $query[$key] = $val;
                }




            $pagination = new Paginator([
                                            "table"=>"iot_devices",
                                            "filter"=>$query,
                                            "page"=>$page,
                                            "col"=>$col,
                                            "size"=>$size,
                                            "sort"=>$sort,
                                            "columns"=>$columns
                                        ]);
            $pagination_html = $pagination->render();

            $list =  $pagination->getData();

            $module = Modules::getModule("mod_datagrid2",[
                "data"=>$list,
                "pagination"=>$pagination_html,
                "columns"=>$columns,
                "class"=>"table-hover table-striped",
                "sort_col"=>$col,
                "sort"=>$sort
            ]);

            echo $module->getView();

        ?>

    </div>




</div>