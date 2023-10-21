<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getData()
    {

       $data=DB::select('select * from employees');
       echo '<pre>';
       print_r($data);


    }
    public function insertData()
    {

        $data=DB::insert('insert into employees (name,gender,age,designation) value (?,?,?,?)',['Priti','Female',25,'Actress']);
        return $data;


    }
    public function updateData()
    {

        $data=DB::update('update employees set name = ?,age=? where id=?',['Nishant','29','3']);
        return $data;


    }
    public function deleteData()
    {

        $data=DB::delete('delete from employees where id=?',['5']);
        return $data;


    }
}
