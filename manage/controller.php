<?php

    class DeviceController extends ORM{
        public function create(){
            Device::create([
                "name"=>Input::name(),
                "address"=>I::address(),
                "type"=>I::type(),
                "description"=>I::description()
                           ]);

            redirect("device",I::name()." created successfully.");
        }

        public function edit($id){
            $device = Device::find_by_id($id);

            $device->name = Input::name();
            $device->address = Input::address();
            $device->type = Input::type();
            $device->description = Input::description();
            $device->save();
            redirect("device",I::name()." saved successfully.");
        }

        public function delete($id){
            $device = Device::find_by_id($id);
            $name = $device->name;
            $device->delete();
            redirect("device",$name." removed successfully.");
        }

    }