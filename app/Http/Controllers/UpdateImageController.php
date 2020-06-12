<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\UserImage;

class UpdateImageController extends Controller
{
    public function updateImage(Request $request, $id){

        if ($request->file('file') && $request->input('media_type') === 'image') {
            $file = $request->file('file');

            $extension = $file->getClientOriginalExtension();

            // $path = "media/images";

            //Salvar imagem no S3 da Amazon
            $path = Storage::disk('s3')->put('images', $file);

            $url = env("AWS_URL") . $path;

            # SALVAR ARQUIVO EM STORAGE/PUBLIC/MEDIA/USERS/...
            // $saved = explode('/', Storage::disk('local')->put('/public/media', $file));

            // # TROCAR O PUBLIC DA URL POR STORAGE
            // $saved[0] = '/storage';

            // # CRIAR URL
            // $url = env('APP_URL') . implode('/', $saved);

            $userimage = UserImage::where('user_id', $id)->first();

            if(!$userimage){
                $userimage = new UserImage;
            }

            $userimage->user_id = $id;
            $userimage->image_url = $url;
            $userimage->save();

            return response()->json([
                "message" => "Imagem salva com sucesso!",
            ], 200);
        }else{
            return response()->json([
                "message" => "Esse arquivo não é uma imagem!"
            ], 500);
        }

    }

    public function getimage(Request $request, $id){

        $userimage = UserImage::where('user_id', $id)->first();

        return response()->json([
            "userimage" => $userimage,
        ], 200);


    }
}
