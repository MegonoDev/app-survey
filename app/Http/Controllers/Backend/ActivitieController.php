<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivitieRequest;
use App\Activitie;
use App\Member;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;


class ActivitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $activities = Activitie::paginate(10);
        return view('backend.activitie.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Activitie $activitie)
    {
        return view('backend.activitie.create', compact('activitie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivitieRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $data['image'] = $this->saveImage($request->file('image'));
        }
        Activitie::create($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<i class="fa fa-check"></i> Event '.$request->nama_event.' Berhasil Di Tambah'
        ]);
        return redirect(route('event.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::where('activitie_id', $id)->get();
        $activities = Activitie::where('id', $id)->get();
        return view('backend.activitie.show', compact('members', 'activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activities = Activitie::find($id);
        return view('backend.activitie.edit', compact('activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activities = Activitie::find($id);
        $data = $request->all();
        
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($activities->image !== '') $this->deleteImage($activities->image);
           
        }

        $activities->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<i class="fa fa-check"></i> Event '.$request->nama_event.' Berhasil Di Update'
        ]);

        return redirect(route ('event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activities = Activitie::find($id);
        $data['image'] = $this->deleteImage($activities->image);
        $activities->delete();
        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<i class="fa fa-check"></i>Event '.$activities->nama_event.' Berhasil Di Delete'
        ]);
        return redirect(route ('event.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(440, 220);
        $path_dir = base_path() . '/public/eonesia/images/'.$filename;
        $img->save($path_dir);
        return $filename;
    }
    
    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'eonesia/images' 
            . DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }
}
