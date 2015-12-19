<?php

class Orden extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	protected $fillable = ['miembro_id','direccion','total','estado'];

	public function ordenitems(){
		return $this->belongsToMany('Libro','OrdenLibros','orden_id','libro_id')->whitPivot('cantidad','[recio','total');

	}
}
