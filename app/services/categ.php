<?php 
namespace App\services;
use App\Categoria;
class categ 
{
    public function get(){
        $categorias = Categoria::get();
        $categoriasArray[''] = 'selecciona una categ';
        foreach ($categorias as $categoria) {
            $categoriasArray[$categoria->id] =$categoria->nombre;
        }
        return $categoriasArray;
    }
    
}