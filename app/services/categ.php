<?php 
namespace App\services;
use App\Categoria;
class categ 
{
    public function get(){
        $categorias = Categoria::get();
        $categoriasArray[''] = 'selecciona una categoría';
        foreach ($categorias as $categoria) {
            $categoriasArray[$categoria->id] =$categoria->nombre;
        }
        return $categoriasArray;
    }
    
}