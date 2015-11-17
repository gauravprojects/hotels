<?php

class hotelsController extends BaseController {



    public function index()
    {
        return View::make('hotels.index');
    }

    public function search()
    {
        $data= Input::get();
        $info= Hotels::gethotelsInfo($data['city']);


        return View::make('hotels.results')
            ->with('info',$info)
            ->with('city',$data['city']);

    }

}
