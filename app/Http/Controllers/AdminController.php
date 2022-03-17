<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\About;
use App\Models\Activity;
use App\Models\Edu;
use App\Models\Qualification;
use App\Models\Interest;
use App\Models\Admin;
use Hash;
use Session;
class AdminController extends Controller
{
    // -- LOGIN --//
    function login()
    {
        return view('backend.login');
    }

    function loginAdmin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        $admin = Admin::where('username', '=', $request->username)->first();
        $pass =  Admin::where('password', '=', $request->password)->first();
        if($admin){
            if($pass){
                $request->session()->put('loginId', $admin->id);
                return redirect('adminabout');
            }else{
                return back()->with('fail','Password is Wrong!!');
            }

        }else{
            return back()->with('fail','Please Register as Admin First!!');
        }
    }

    function protect(Request $request)
    {
        if($request->session()->get('loginId')== "")
        {
            return redirect('login');
        }else {
            $username = $request->session()->get('username');
            $capsule = array('username' => $username);

            return redirect('adminabout')->with($capsule);
        }
    }

    function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('loginId');
        return redirect('login');

    }


    function about()
    {
        $about = array();
        if(Session::has('loginId'))
        {
            $about = Admin::where('id', '=', Session::get('loginId'))->first();
        }
        $about = About::all();
        return view('backend.adminabout', compact('about'));

    }

     //View Function
     function viewabout()
     {
         $about = About::all();
         return view('backend.viewabout', compact('about'));
     }

     //Add Function
     public function createabout()
     {
         return view('backend.addabout');
     }

     public function storeabout(Request $request)
     {
         $about = new About;
         $about->title = $request->input('title');
         $about->aboutdesc = $request->input('aboutdesc');
         $about->name = $request->input('name');
         $about->age = $request->input('age');
         $about->location = $request->input('location');
         $about->email = $request->input('email');


         if($request->hasfile('aboutimg'))
         {
             $file = $request->file('aboutimg');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('assets/img/', $filename);
             $about->aboutimg = $filename;
         }
         $about->save();
         return redirect()->back()->with('status','Added Successfully');
     }

     //update Function
     public function editabout($id)
     {
         $about = about::find($id);
         return view('backend.editabout', compact('about'));
     }

     public function updateabout(Request $request, $id)
     {
         $about = about::find($id);
         $about->title = $request->input('title');
         $about->aboutdesc = $request->input('aboutdesc');
         $about->name = $request->input('name');
         $about->age = $request->input('age');
         $about->location = $request->input('location');
         $about->email = $request->input('email');

         if($request->hasfile('aboutimg'))
         {
             $destination = 'assets/img/'.$about->aboutimg;
             if(File::exists($destination))
             {
                 File::delete($destination);
             }
             $file = $request->file('aboutimg');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('assets/img/', $filename);
             $about->aboutimg = $filename;
         }

         $about->update();
         return redirect()->back()->with('status','Updated Successfully');
     }

     //Delete Function
     public function destroyabout($id)
     {
         $about = About::find($id);
         $destination = 'assets/img/'.$about->aboutimg;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $about->delete();
         return redirect()->back()->with('status',' Deleted Successfully');
     }

     // ---- Act ---//
    function act()
    {
        $activity = Activity::all();
        return view('backend.adminact', compact('activity'));

    }

     //Add Function
     public function createact()
     {
         return view('backend.addact');
     }

     public function storeact(Request $request)
     {
         $activity = new Activity;
         $activity->actdesc = $request->input('actdesc');


         if($request->hasfile('actimg'))
         {
             $file = $request->file('actimg');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('assets/img/', $filename);
             $activity->actimg = $filename;
         }
         $activity->save();
         return redirect()->back()->with('status','Added Successfully');
     }

         //update Function
    public function editact($id)
    {
        $activity = Activity::find($id);
        return view('backend.editact', compact('activity'));
    }

    public function updateact(Request $request, $id)
    {
        $activity = activity::find($id);
        $activity->actdesc = $request->input('actdesc');


        if($request->hasfile('actimg'))
        {
            $destination = 'assets/img/'.$activity->aboutimg;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('actimg');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/img/', $filename);
            $activity->actimg = $filename;
        }

        $activity->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

     //Delete Function
     public function destroyact($id)
     {
         $activity = Activity::find($id);
         $destination = 'assets/img/'.$activity->actimg;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $activity->delete();
         return redirect()->back()->with('status',' Deleted Successfully');
     }

      //View Function
    function viewact($id)
    {
        $activity = Activity::find($id);
        return view('backend.viewact', compact('activity'));
    }

    //--EDUCATION--//
    function edu()
    {
        $edu = Edu::all();
        return view('backend.adminedu', compact('edu'));
    }

    //update
    function showedu($id)
    {
        $edu = Edu::find($id);
        return view('backend.editedu', ['edu'=>$edu]);
    }

    function editedu (Request $req)
    {
        $edu = Edu::find($req->id);
        $edu->edutitle=$req->edutitle;
        $edu->edudesc=$req->edudesc;
        $edu->save();
        return redirect('adminedu');

    }

    //Add Function
    public function createedu()
    {
        return view('backend.addedu');
    }

    public function storeedu(Request $request)
    {
        $edu = new Edu;
        $edu->edutitle = $request->input('edutitle');
        $edu->edudesc = $request->input('edudesc');

        $edu->save();
        return redirect()->back()->with('status','Added Successfully');
    }

     //Delete Function
     public function destroyedu($id)
     {
         $edu = edu::find($id);
         $edu->delete();
         return redirect()->back()->with('status',' Deleted Successfully');
     }

     //--QUALIFICATION -- //
     function qual()
    {
        $qualification = Qualification::all();

        return view('backend.adminqual', compact('qualification'));


    }

     //Add Function
     public function createqual()
     {
         return view('backend.addqual');
     }

     public function storequal(Request $request)
     {
         $qualification = new Qualification;
         $qualification->qualtitle = $request->input('qualtitle');
         $qualification->qualdesc = $request->input('qualdesc');


         if($request->hasfile('qualimg'))
         {
             $file = $request->file('qualimg');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('assets/img/', $filename);
             $qualification->qualimg = $filename;
         }
         $qualification->save();
         return redirect()->back()->with('status','Added Successfully');
     }

      //update Function
    public function editqual($id)
    {
        $qualification = Qualification::find($id);
        return view('backend.editqual', compact('qualification'));
    }

    public function updatequal(Request $request, $id)
    {
        $qualification = Qualification::find($id);
        $qualification->qualtitle = $request->input('qualtitle');
        $qualification->qualdesc = $request->input('qualdesc');


        if($request->hasfile('qualimg'))
        {
            $destination = 'assets/img/'.$qualification->aboutimg;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('qualimg');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/img/', $filename);
            $qualification->qualimg = $filename;
        }

        $qualification->update();
        return redirect()->back()->with('status','Updated Successfully');
    }

     //Delete Function
     public function destroyqual($id)
     {
         $qualification = Qualification::find($id);
         $destination = 'assets/img/'.$qualification->qualimg;
         if(File::exists($destination))
         {
             File::delete($destination);
         }
         $qualification->delete();
         return redirect()->back()->with('status',' Deleted Successfully');
     }

     //--INTEREST--//
     function int()
     {
         $interest = Interest::all();
         return view('backend.adminint', compact('interest'));
     }

      //Add Function
      public function createint()
      {
          return view('backend.addint');
      }

      public function storeint(Request $request)
      {
          $interest = new Interest();

          if($request->hasfile('intimg'))
          {
              $file = $request->file('intimg');
              $extention = $file->getClientOriginalExtension();
              $filename = time().'.'.$extention;
              $file->move('assets/img/', $filename);
              $interest->intimg = $filename;
          }
          $interest->save();
          return redirect()->back()->with('status','Added Successfully');
      }

       //update Function
     public function editint($id)
     {
         $interest = Interest::find($id);
         return view('backend.editint', compact('interest'));
     }

     public function updateint(Request $request, $id)
     {
         $interest = Interest::find($id);

         if($request->hasfile('intimg'))
         {
             $destination = 'assets/img/'.$interest->intimg;
             if(File::exists($destination))
             {
                 File::delete($destination);
             }
             $file = $request->file('intimg');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('assets/img/', $filename);
             $interest->intimg = $filename;
         }

         $interest->update();
         return redirect()->back()->with('status','Updated Successfully');
     }

      //Delete Function
      public function destroyint($id)
      {
          $interest = Interest::find($id);
          $destination = 'assets/img/'.$interest->intimg;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $interest->delete();
          return redirect()->back()->with('status',' Deleted Successfully');
      }

      //View Function
     function viewint($id)
     {
         $interest = Interest::find($id);
         return view('backend.viewint', compact('interest'));
     }



}
