<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name','description','paginate','author','year'];
    public static $roles=[
      'name'=>'required|min:2|max:20',
      'description'=>'required|min:2|max:30',
      'paginate'=>'required|min:2|max:20',
      'author'=>'required|min:2|max:20',
      'year'=>'required|min:4|max:4|numeric',
    ];
    public static $messages=[
        'name.required'=>'debe ingresar nombre',
        'description.required'=>'debe ingresar description',
        'paginate.required'=>'debe ingresar pagina',
        'author.required'=>'debe ingresar autor',
];
    public static function validar_Data($data){
      $reglas=self::$roles;
      return \Validator::make($data,$reglas);
    }

}
