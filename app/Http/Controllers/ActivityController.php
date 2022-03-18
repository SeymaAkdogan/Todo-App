<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        return view('activities',[
            'activities' => Activity::where([
                'status' => false,
            ])->get(),
        ]);
    }

    public function getAll()
    {
        return view('activities',[
            'activities' => Activity::get(),
        ]);
    }

    public function createActivity(Request $request)
    {
        $name = $request->activity_name;
        $status = false;

        if($request->status == 'on'){
            $status = true;
        }
        $check_database = Activity::where('name',$name)->first();

        if ($check_database != null) {
            return view('activities', [
                'activities' => Activity::where([
                    'status' => false,
                ])->get(),
                'error' => 'Activity name already exist',
            ]);
        }

        Activity::create([
            'name' => $name,
            'status' => $status,
        ]);
        return redirect()->back();
    }

    public function editActivityPage($activityId)
    {
        $activity = Activity::where('id',$activityId)->first();
        if($activity == null)
        {
            return redirect()->back();
        }

        return view('edit_activity',[
            'activity' => $activity,
        ]);
    }

    public function editActivity(Request $request,$activityId)
    {
        $name = $request->activity_name;
        $status = $request->status;
        $check_database = Activity::where('name',$name)->first();
        $activity = Activity::where('id',$activityId)->first();

        if($activity == null )
        {
            return redirect()->back();
        }

        if($activity != $check_database && $check_database != null){
            return view('edit_activity',[
                'activity' => $activity,
                'error' => 'Activity name already exist',
            ]);
        }
        if($status == 'on'){
            $status = true;
        }else{
            $status = false;
        }

        $activity['name'] = $name;
        $activity['status'] = $status;

        $activity->save();
        return redirect('/');
    }

    public function deleteActivity($activityId)
    {
        $res=Activity::where('id',$activityId)->delete();
        return redirect()->back();
    }
}
