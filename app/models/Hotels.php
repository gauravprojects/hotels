<?php

class Hotels extends \Eloquent {
	protected $fillable = [];


	public static function gethotelsInfo($city)
	{
		return DB::table('hotel_info')
				->select()
				->where('city','=',$city)
				->get();
	}
}