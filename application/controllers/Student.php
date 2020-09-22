<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function view($id){
       
        // $res=$this->db->get("students");
        // $row=$res->result_Array();
        // //echo $row[1]->student_name;
        // //var_dump($row);
        // echo $row[0]["student_name"];

        // $r=$this->db->from("students")->where(["id" =>1,"gender"=>1])->get();
        // var_dump($r->result());

        // $r=$this->db->from("students")->where_in("id",[1,2])->get();
        // var_dump($r->result());
        
        // $r=$this->db->from("students")->like("student_name","ar","after")->get();
        // var_dump($r->result());

        // $r=$this->db->from("students")->order_by("student_name asc")->get();
        // var_dump($r->result());

        
        // $r=$this->db->from("students")->order_by("student_name desc")->limit(2,0)->get();
        // var_dump($r->result());

        // $rec=[
        //     "student_name"=>"akhil",
        //     "phone"=>"987",
        //     "gender"=>"1",
        // ];
        // $this->db->insert("students",$rec); 


        // $this->db->set("student_name","ajith kumar")->where("id",1)->update("students");
        
        $this->db->where("id",2)->delete("students");
        
                



        die;
        $student =[
            1=>"anu",
            2=>"asd",
            3=>"der",
        ];

        $data['student_name']=$student[$id];
        $this->load->view('student_view',$data);
        // echo $student[$id];
    }
}
