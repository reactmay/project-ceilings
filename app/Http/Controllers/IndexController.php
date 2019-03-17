<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\People;
use App\Service;
use App\Message;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            $mail_admin = DB::table('settings')->distinct()->pluck('mail_admin');
            $mail_from = DB::table('settings')->distinct()->pluck('mail_from');

            Mail::send('site.email', ['data' => $data], function ($message) use ($data, $mail_admin, $mail_from) {
                $message->from($mail_from['0'], 'Заказ с вашего сайта');
                $message->to($mail_admin['0'])->subject('НАТЯЖНЫЕ ПОТОЛКИ');
            });

            Message::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'message' => $data['message'],
            ]);

        }

        $show_service = DB::table('settings')->distinct()->pluck('show_service');
        $show_portfolio = DB::table('settings')->distinct()->pluck('show_portfolio');
        $show_aboutus = DB::table('settings')->distinct()->pluck('show_aboutus');
        $show_team = DB::table('settings')->distinct()->pluck('show_team');
        $show_testimonials = DB::table('settings')->distinct()->pluck('show_testimonials');

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name', 'filter', 'images'));
        $services = Service::where('id', '<', 20)->get();
        $peoples = People::take(3)->get();

        $tags = DB::table('portfolios')->distinct()->pluck('filter');

        $menu = array();

        $item = array('title' => 'Главная', 'alias' => 'home');
        array_push($menu, $item);


        if ($show_aboutus['0']) {
            $item = array('title' => 'О нас', 'alias' => 'about');
            array_push($menu, $item);
        }

        if ($show_service[0]) {
            $item = array('title' => 'Мы предлагаем', 'alias' => 'services');
            array_push($menu, $item);
        }

        if($show_portfolio[0]) {
            $item = array('title' => 'Портфолио', 'alias' => 'showcase');
            array_push($menu, $item);
        }

        if ($show_team['0']) {
            $item = array('title' => 'Команда', 'alias' => 'our-team');
            array_push($menu, $item);
        }


//        $item = array('title' => 'Pricing', 'alias' => 'pricing');
//        array_push($menu, $item);
//
//        $item = array('title' => 'Blog', 'alias' => 'blog');
//        array_push($menu, $item);

        $item = array('title' => 'Контакты', 'alias' => 'contact-us');
        array_push($menu, $item);

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'portfolios' => $portfolios,
            'peoples' => $peoples,
            'tags' => $tags,
            'show_service' => $show_service,
            'show_portfolio' => $show_portfolio,
            'show_aboutus' => $show_aboutus,
            'show_team' => $show_team,
            'show_testimonials' => $show_testimonials
        ));
    }
}
