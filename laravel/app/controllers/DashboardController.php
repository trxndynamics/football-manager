<?php
class DashboardController extends BaseController {
    public function index()
    {
        return Redirect::to('/game/create');
        //todo setup dashboard mainpage
        return  View::make('dashboard/index')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true);
    }
}