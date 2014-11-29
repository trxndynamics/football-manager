<?php

class GameController extends BaseController {
    public function generate(){
        $data = Input::only('division','selected','full_detail');

        //todo php 5.6 convert this to use array_filter_use_key (uncomment this)
//        array_filter($data['division'], function($k) use($data){
//            return in_array($k, $data['selected']);
//        }, ARRAY_FILTER_USE_KEY);

        foreach($data['division'] as $k=>$v){
            if(!in_array($k, $data['selected']))    unset($data['division'][$k]);
        }

        //todo create game based on provided settings

        return '';
    }

    public function create()
    {
        //todo setup dashboard mainpage
        return View::make('game/new-game')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true)
        ;
    }
}