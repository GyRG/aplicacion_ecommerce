<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*$fillable permite especificar qué datos se asignarán al modelo en los
     métodos en los que se usan 'asignamientos en masa'*/
     public $fillable = ['title', 'image_url', 'descripción', 'price'];

     /* Verifica a qué método del controlador resource debe enviar el action de form, 
     en caso de que se envíe un id este realizará una redirección al 
     método store
     */

    public function url(){
        return $this->id ? 'productos.update': 'productos.store';
    }
     /*
     Verifica qué método de envío utilizará el form,
     en caso de que se envíe un id, este enviará los datos mediante PUT,
     en caso contrario, enviará los datos por medio de este POST 
    */
    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
