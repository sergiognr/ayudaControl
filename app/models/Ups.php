<?php

class Ups extends \Eloquent {
	protected $fillable = [];
        
        protected $table = 'tablaUpss';
        
         function todosLosDatos() {
        
        $upss = Ups::all();
        
        return $upss;
        
    }
        
        
        
}