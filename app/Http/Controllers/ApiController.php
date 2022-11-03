<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SensorModel;
use App\Sensor2Model;
use App\Sensor3Model;
use App\Sensor4Model;
use App\SaklarModel;
use Illuminate\Support\Facades\DB;
class ApiController extends Controller
{
    public function get_sensor1($id){
        $check = SensorModel::where('id',$id)->first();
        if($check){
            $value = DB::select('SELECT * FROM sensor1 WHERE id ='.$id);
            // return response()->json($value,200);
            return response([
                'status' => true,
                'message' => 'sesnor dht',
                'data' => $value,
            ],200);
        }
        else{
            return response([
                'status' => false,
                'message' => 'sensor does not exist',
            ],404);
        }
    }
    public function get_all_sensor1(){
        $data = SensorModel::all();
        // return count(json_decode($data,1));
        if(count(json_decode($data,1))==0){
            return response([
                'status' => false,
                'message' => 'sensor data does not exist',
                // 'data' => $data,
            ],404);
        }else{ 
            return response([
                'status' => true,
                'message' => 'sensor dht',
                'data' => $data,
            ],200);
        }
    }
    public function insert_sensor1(Request $req){
        $insert_S1 = new SensorModel;
        $insert_S1->id=$req->id;
        $insert_S1->suhu=$req->suhu;
        $insert_S1->kelembapan=$req->kelembapan;
        $insert_S1->save();

        return response([
            'status' => true,
            'message' => 'sesnor uploded',
            'data' => $insert_S1
        ],200);
    }

    public function get_sensor2($id){
        $check = Sensor2Model::where('id',$id)->first();
        if($check){
            $value = DB::select('SELECT * FROM sensor2 WHERE id ='.$id);
            // return response()->json($value,200);
            return response([
                'status' => true,
                'message' => 'sensor RFID',
                'data' => $value,
            ],200);
        }
        else{
            return response([
                'status' => 'Not Found',
                'message' => 'sensor does not exist',
            ],404);
        }
    }

    public function get_all_sensor2(){
        $data = Sensor2Model::all();
        // return response ()->json(Sensor2Model::all(), 200);
        if(count(json_decode($data,1))==0){
            return response([
                'status' => false,
                'message' => 'sensor data does not exist',
                // 'data' => $data,
            ],404);
        }else{
            return response([
                'status' => true,
                'message' => 'sensor RFID',
                'data' => $data,
            ],200);
        }
    }

    public function insert_sensor2(Request $req){
        $insert_S2 = new Sensor2Model;
        $insert_S2->id=$req->id;
        $insert_S2->rfid=$req->rfid;
        $insert_S2->save();

        return response([
            'status' => true,
            'message' => 'sesnor uploded',
            'data' => $insert_S2
        ],200);
    }

    public function get_sensor3($id){
        $check = Sensor3Model::where('id',$id)->first();
        if($check){
            $value = DB::select('SELECT * FROM sensor3 WHERE id ='.$id);
            // return response()->json($value,200);
            return response([
                'status' => true,
                'message' => 'sensor GY302',
                'data' => $value,
            ],200);
        }
        else{
            return response([
                'status' => 'Not Found',
                'message' => 'sensor does not exist',
            ],404);
        }
    }

    public function get_all_sensor3(){
        // return response ()->json(Sensor3Model::all(), 200);
        $data = Sensor3Model::all();
        if(count(json_decode($data,1))==0){
            return response([
                'status' => false,
                'message' => 'sensor data does not exist',
                // 'data' => $data,
            ],404);
        }else{
            return response([
                'status' => true,
                'message' => 'sensor GY302',
                'data' => $data,
            ],200);
        }
    }

    public function insert_sensor3(Request $req){
        $insert_S3 = new Sensor3Model;
        $insert_S3->id=$req->id;
        $insert_S3->intensitas=$req->intensitas;
        $insert_S3->save();

        return response([
            'status' => 'OK',
            'message' => 'sesnor uploded',
            'data' => $insert_S3
        ],200);
    }

    public function get_sensor4($id){
        $check = Sensor4Model::where('id',$id)->first();
        if($check){
            $value = DB::select('SELECT * FROM sensor4 WHERE id ='.$id);
            // return response()->json($value,200);
            return response([
                'status' => true,
                'message' => 'sensor Amonia',
                'data' => $value,
            ],200);
        }
        else{
            return response([
                'status' => 'Not Found',
                'message' => 'sensor does not exist',
            ],404);
        }
    }

    public function get_all_sensor4(){
        $data = Sensor4Model::all();
        // return response ()->json(Sensor4Model::all(), 200);
        if(count(json_decode($data,1))==0){
            return response([
                'status' => false,
                'message' => 'sensor data does not exist',
                // 'data' => $data,
            ],404);
        }else{
            return response([
                'status' => true,
                'message' => 'sensor Amonia',
                'data' => $data,
            ],200);
        }
    }

    public function insert_sensor4(Request $req){
        $insert_S4= new Sensor4Model;
        $insert_S4->id=$req->id;
        $insert_S4->amonia=$req->amonia;
        $insert_S4->save();

        return response([
            'status' => 'OK',
            'message' => 'sesnor uploded',
            'data' => $insert_S4
        ],200);
    }
    public function get_data_saklar(){
        return response ()->json(SaklarModel::all(), 200);
    }

    public function insert_saklar(Request $req){
        $check = SaklarModel::firstwhere('id',$req->id);
        $saklar= new SaklarModel;
        $saklar->id=$req->id;
        $saklar->value=$req->saklar;
        
        if($check){
            return response([
                'status' => false,
                'message' => 'data has been registered',
            ],500);
        }
        else{
            $saklar->save();
            return response([
                'status' => true,
                'message' => 'sucess uploaded',
                'data' => $saklar
            ],200);
        }
    }

    public function update_saklar(Request $req,$id){
        $check = SaklarModel::firstwhere('id',$id);
        if($check){
            $saklar = SaklarModel::find($id);
            $saklar->value=$req->saklar;
            $saklar->save();
            return response([
                'status' => true,
                'message' => 'updated',
                'data' => $saklar
            ],200);
        }
        else{
            return response([
                'status' => 'Not Found',
                'message' => 'switch does not exist',
            ],404);
        }
    }
    public function delete_saklar(Request $req,$id){
        $check = SaklarModel::firstwhere('id',$id);
        if($check){
            $saklar = SaklarModel::find($id);
            $saklar->value=$req->saklar;
            $saklar->delete();
            return response([
                'status' => 'OK',
                'message' => 'Saklar ('.$id.') has been deleted',
                'data' => $saklar
            ],200);
        }
        else{
            return response([
                'status' => 'Not Found',
                'message' => 'switch does not exist',
            ],404);
        }
    }
}
