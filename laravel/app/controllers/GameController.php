<?php

class GameController extends BaseController {
    public function create()
    {
        //todo setup dashboard mainpage
        return View::make('game/new-game')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true)
        ;
    }
}