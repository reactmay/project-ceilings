<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\People;
use App\Service;
use App\User;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function execute()
    {
        $count_messages = DB::table('messages')->count();

        $pages = Page::all();
        $messages = Message::where('checked', '=', 0)->latest()->limit(5)->get();
        $portfolios = Portfolio::get(array('name', 'filter', 'images'));
        $services = Service::where('id', '<', 20)->get();
        $peoples = People::take(3)->get();
        $users = User::all();

        $tags = DB::table('portfolios')->distinct()->pluck('filter');

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

        return view('admin.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'portfolios' => $portfolios,
            'peoples' => $peoples,
            'tags' => $tags,
            'users' => $users,
            'count_messages' => $count_messages,
            'messages' => $messages,
            'title' => 'Админ панель'
        ));
    }

    public function message_execute()
    {
        if (view()->exists('admin.chunks.messages.messages')) {
            $messages = Message::latest()->paginate(25);
            $data = [
                'title' => 'Сообщения',
                'messages' => $messages,
            ];
            return view('admin.chunks.messages.messages', $data);
        }
        abort(404);
    }

    public function message_edit_execute(Request $request)
    {
        if ($request->isMethod('post')) {
            DB::table('messages')
                ->where('id', $request->id)
                ->update(['checked' => 1]);

            return redirect('admin/messages');
        }
    }

    public function people_execute()
    {
        if (view()->exists('admin.chunks.peoples.peoples')) {
            $peoples = People::all();
            $data = [
                'title' => 'Команда',
                'peoples' => $peoples,
            ];
            return view('admin.chunks.peoples.peoples', $data);
        }
        abort(404);
    }

    public function people_edit_execute()
    {
        if (view()->exists('admin.chunks.peoples.peoplesEdit')) {
            $peoples = People::all();
            $data = [
                'title' => 'Редактирование карточки работника',
                'peoples' => $peoples,
            ];
            return view('admin.chunks.peoples.peoplesEdit', $data);
        }
        abort(404);
    }
}
