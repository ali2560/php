<?php

    $router = Router::getInstance();

    $router->admin("device",function ($router){

       $router->map("GET","create",function (){
           return view("device.create");
       });

       $router->map("POST","create",function (){
           return action("DeviceController.create");
       });

        $router->map("GET","edit/[i:id]",function ($id){
            return view("device.edit",["id"=>$id]);
        });
        $router->map("POST","edit/[i:id]",function ($id){
            return action("DeviceController.edit",["id"=>$id]);
        });

        $router->map("GET","delete/[i:id]",function ($id){
            return action("DeviceController.delete",["id"=>$id]);
        });

        $router->map("GET","~q:[s:query]/~size:[i:size]/~p:[i:page]/~col:[s:col]/~sort:[s:sort]",function($query,$size,$page,$col,$sort){
            return View("device.list",compact("size","page","query","col","sort"));
        });
    });