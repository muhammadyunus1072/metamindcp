<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Training;
use App\Models\Event;
use App\Models\Trainer;
use App\Models\Client;
use App\Models\Coaching;
use App\Models\EventDetail;
use App\Models\Faq;
use App\Models\Service;
use App\Models\ServiceContent;
use App\Models\Testimony;
use App\Models\TrainingGroup;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\ColGenerateHelper;
use App\Models\About;
use App\Models\Setting;

class LandingPageController extends Controller
{
    public function home()
    {
        $today = Carbon::now()->format("Y-m-d");
        $setting = Setting::first();
        $banners = Banner::where('type', '=', Banner::SELECT_TYPE_HOME)->get();
        $trainingGroups = TrainingGroup::all();
        $events = Event::where('date_end', '>=', $today)->orderBy('date_start')->limit(5)->get();
        $trainers = Trainer::all();
        $clients = Client::all();
        $abouts = About::all();

        return view('page.home', compact('banners', 'trainingGroups', 'events', 'trainers', 'clients', 'abouts', 'setting'));
    }

    public function event()
    {
        $setting = Setting::first();
        $banners = Banner::where('type', '=', Banner::SELECT_TYPE_EVENT)->get();
        $today = Carbon::now()->format("Y-m-d");

        // Grouping Event
        $events = Event::where('date_end', '>=', $today)->orderBy('date_start')->get();
        $grouping_events = [];
        $current_month = "";
        foreach ($events as $event) {
            $event_month = Carbon::parse($event->date_start)->format("F Y");
            if ($current_month != $event_month) {
                $current_month = $event_month;
                $grouping_events[$current_month] = [];
            }
            array_push($grouping_events[$current_month], $event);
        }

        return view('page.event', compact('banners', 'grouping_events', 'setting'));
    }

    public function event_detail($id)
    {
        $id = Crypt::decrypt($id);
        $event = Event::find($id);
        $event_details = EventDetail::where('event_id', $id)->orderBy('position')->get();
        $abouts = About::all();
        $faqs = Faq::all();
        $testimonies = Testimony::inRandomOrder()->limit(5)->get();

        return view('page.event_detail', compact('event', 'event_details', 'faqs', 'testimonies', 'abouts'));
    }

    public function service()
    {
        $setting = Setting::first();
        $banners = Banner::where('type', '=', Banner::SELECT_TYPE_OUR_SERVICE)->get();
        $services = Service::get();
        return view('page.service', compact('banners', 'services', 'setting'));
    }


    public function service_detail($id)
    {
        $setting = Setting::first();
        $service = Service::find($id);
        $testimonies = Testimony::inRandomOrder()->limit(5)->get();

        return view('page.service_detail', compact('service', 'setting', 'testimonies'));
    }

    public function training(Request $request)
    {
        $service = Service::where('url_service_content', '=', $request->url())->first();
        $training_groups = TrainingGroup::all();
        return view('page.training', compact('service', 'training_groups'));
    }

    public function coaching(Request $request)
    {
        $service = Service::where('url_service_content', '=', $request->url())->first();
        $coachings = Coaching::all();
        return view('page.coaching', compact('service', 'coachings'));
    }
}
