<?php
class GameController extends BaseController {
    public function generate(){
        $config = Config::get('basegame');
        $data   = Input::only('division','selected','full_detail');
        //todo php 5.6 convert this to use array_filter_use_key (uncomment this)
//        array_filter($data['division'], function($k) use($data){
//            return in_array($k, $data['selected']);
//        }, ARRAY_FILTER_USE_KEY);
        foreach($data['selected'] as $k=>$v){
            if(!array_key_exists($k, $config))      unset($data['selected'][$k]);
        }
        foreach($data['division'] as $k=>$v){
            if(!in_array($k, $data['selected']))    unset($data['division'][$k]);
        }
        foreach($data['full_detail'] as $k=>$v){
            if(!in_array($k, $data['selected']))    unset($data['full_detail'][$k]);
        }
        //todo create game based on provided settings
        var_dump($data);
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