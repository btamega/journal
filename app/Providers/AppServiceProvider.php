<?php

namespace App\Providers;
use App\Models\Volumes;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $maxValue = Volumes::max('Année');
        $lastIssues=Volumes::where('Année', '>=', $maxValue)->orderBy('Année','desc')->get();
        $recentArchives=DB::table('volumes')->whereBetween('Année',[2020,$maxValue-1])->get();
        $fascicules = DB::table("fascicules")->get();
        $archives = DB::table("volumes")->get();
        $tab=array();
        $menus = DB::table('key_value')->get();
        foreach($recentArchives as $item)
		{
            array_push($tab,$item);
        }
        View::share("archives", $archives);
        View::share('lastIssues',$lastIssues);
        View::share('fascicules',$fascicules);
        View::share('tab',$tab);
        View::share('menus',$menus);
        View::share('recentArchives',$recentArchives);
        $messages = DB::table('commentaires')->orderByDesc('id')->get();
        $nombreMessage = $messages->count();
        $lastMessages = $messages->where('statut','=','Non lu');
        $nombreMessageNonLu=$lastMessages->count();
        $nombreUsers=DB::table('users')->count();
        view()->composer('*', function ($view) 
        {
           $user= Auth::user();
            $view->with('user', $user);  
        }); 
        
        View::share('nombreMessages', $nombreMessage);
        View::share('nombreMessageNonLu', $nombreMessageNonLu);
        View::share('messages', $messages);
        View::share('lastMessages', $lastMessages);
        View::share('nombreUsers', $nombreUsers);
    }
}
