<?php

class DashboardController extends BaseController {

    public function index()
    {
        //todo setup dashboard mainpage
        return  View::make('dashboard/index')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true);
    }
}
