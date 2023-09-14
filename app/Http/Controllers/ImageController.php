<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //ioc
    private $image;



    public function __construct(Image $image){
        //ioc
        $this->image = $image;
        $this->middleware('auth');

    }


    public function create(){
   
        return view('image/create');

    }


    public function store(Request $request){
        $files = $request->file('file');

        $originNames = $request->input('origin_name');

        foreach($files as $key => $file){
            /*
             * Storage::putFileAs은 storage/app을 의미합니다, 그렇기에 결과적으로 저장되는 경로는 아래와 같습니다.
             * storage/app/uploads/23-09-14/1661757373818_git cat.png
             * $file->getClientOriginalName은 dropzone에서 renameFile로 바꾼 이름입니다.
             */

                $path = Storage::putFileAs(
                    "uploads/" . date('y-m-d') , $file , $file->getClientOriginalName()
                );


                $this->image->create([
                        'origin_name'=>$originNames[$key],
                        'path' => $path

                ]);

        }

        return response()->json(['success'=>true]);

    }



    public function index(){
        $lists = $this->image->paginate(5);
        return view('image/index',compact('lists'));

    }


}
