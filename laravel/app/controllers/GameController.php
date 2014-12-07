<?php
class GameController extends BaseController {
    public function registerManager(){
        $game = Game::whereRaw(['configuration.user' => Auth::id()])->first();

        if(Request::isMethod('post')){
            $data = Input::only('first_name','last_name','nation','league','club');
            var_dump($data);
        }

        return View::make('game/manager-detail')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true)
            ->with('configuration', $game['configuration'])
        ;
    }

    public function create(){
        if(Request::isMethod('post')){
            $config = Config::get('basegame');
            $data   = Input::only('division','selected','full_detail');
            $data['start_month'] = 12;

            foreach($data['selected'] as $k=>$v){
                if(!array_key_exists($k, $config))                          unset($data['selected'][$k]);
                else if($config[$k]['start_month'] < $data['start_month'])  $data['start_month'] = $config[$k]['start_month'];
            }
            foreach($data['division'] as $k=>$v){
                if(!in_array($k, $data['selected']))    unset($data['division'][$k]);
                else {
                    $data['division'][$k]['depth'] = intval($data['division'][$k]['depth']);

                    for($i=0; $i <= $data['division'][$k]['depth']; $i++){
                        $league_name = $config[$k]['divisions'][$i];

                        $data['division'][$k]['league'][$league_name]['teams'] = Config::get('game-pre-requisites/revision/current/'.$k.'/'.$league_name.'/teams');
                    }
                }
            }
            if(isset($data['full_detail'])) {
                foreach ($data['full_detail'] as $k => $v) {
                    if(in_array($k, $data['selected']))     $data['division'][$k]['full_detail'] = true;
                    unset($data['full_detail'][$k]);
                }
            }

            unset($data['selected']);
            unset($data['full_detail']);

            $data['user'] = Auth::id();

            $game = new Game();
            $game->configuration = $data;
            $game->save();

            return Redirect::to('game/register-manager');
        }

        //todo setup dashboard mainpage
        return View::make('game/new-game')
            ->with('hideSideNav', true)
            ->with('hideTopNav', true)
        ;
    }
}