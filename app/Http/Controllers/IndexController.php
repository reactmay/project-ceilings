<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\People;
use App\Service;

use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {

        if ($request->isMethod('post')) {

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'phone' => 'Поле :attribute обязательно к заполнению'
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'phone' => 'required',
                'message' => 'required'
            ], $messages);

            $data = $request->all();

            $result = Mail::send('site.email', ['data' => $data], function ($message) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
                $message->from($mail_admin, 'Заказ с вашего сайта');
                $message->to($mail_admin)->subject('НАТЯЖНЫЕ ПОТОЛКИ');
            });

            // mail
            if ($result) {
                return redirect()->route('home')->with('status', 'Ваше письмо отправлено, ожидайте звонка');
            }


        }

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name', 'filter', 'images'));
        $services = Service::where('id', '<', 20)->get();
        $peoples = People::take(3)->get();

        $menu = array();

        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }

        $item = array('title' => 'Мы предлагаем', 'alias' => 'services');
        array_push($menu, $item);

        $item = array('title' => 'Портфолио', 'alias' => 'showcase');
        array_push($menu, $item);

        $item = array('title' => 'Команда', 'alias' => 'our-team');
        array_push($menu, $item);

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
            'peoples' => $peoples
        ));
    }
}
