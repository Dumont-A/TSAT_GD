<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
use Intervention\Image\ImageManager;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;
use Image;
Use File;

class PhotoController extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id) {
        
        
        $album = Album::find($album_id);
        
        //dd($album);
        return view('admin.photo.create', compact('album'));
    }
    
    public function store(Request $request) {
        $request->session()->flash('success', 'L\'image à été Ajouté !');
        
        $image = new Photo();

        $image->titre = $request->get('name');
        $image->description = $request->get('description');
        $image->album_id = $request->get('album_id');
          
        $fichier = $request->file('image');
        
        $imagename = time().'.'.$fichier->getClientOriginalExtension(); 
        $destinationPath = public_path('img/galerie/miniature/');
        Image::make($fichier->getRealPath())->resize(500, 400)
            
        ->save($destinationPath.'/'.$imagename);
     
        $destinationPath = public_path('img/galerie/');
        $fichier->move($destinationPath, $imagename);              
      
        $image->fichier = $imagename;

        $image->save();
        
        /*if ( $request->isXmlHttpRequest() )
        {
            $image = $request->file( 'image' );
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );

            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage );

            if ( $imageUploaded )
            {
                $data = [
                    'original_path' => asset( '/img/galerie/' . $savedImageName )
                ];
                return json_encode( $data, JSON_UNESCAPED_SLASHES );
            }
            return "uploading failed";
        }*/
        
        return redirect()->route("album.index");
    }

    public function destroy(Request $request, $id) {
        $request->session()->flash('success', 'L\'image à été Supprimé !');

        $lImage = Photo::find($id);
        
        File::delete("img/galerie/" . $lImage->fichier, "img\miniature" . $lImage->fichier);
        

        $lImage->delete();

        return redirect()->route("album.index");
    }

}
