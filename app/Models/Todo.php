<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function priority(){
        return $this->hasOne(Priority::class, 'id', 'priority')->select('id', 'name');
    }

    /**
     * Delete todo
     * @param $id
     */
    public function deleteTodo($id){
        $this->where("id", $id)->delete();
    }

    /**
     * update todo
     * @param $id
     */
    public function setDone($id){
        $this->where("id", $id)->update(["done" => 1]);
    }

}

