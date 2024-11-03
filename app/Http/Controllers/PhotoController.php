<?php

namespace App\Http\Controllers;

use App\Models\photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $file = $request->file('photo');
    
        $fileName = $this->compressImage($file);
    
        $folder = 'photos';
        $filePath = $folder . '/' . $fileName;
        Storage::disk('public')->put($filePath, file_get_contents($file));
    
        $photo = new Photo();
        $photo->photo = $filePath; 
        $photo->save();
    
        return redirect()->back()->with('success', 'File uploaded and compressed successfully.');
    }
    
    public function compressImage($file)
    {
        $imageInfo = getimagesize($file);
        $imageType = $imageInfo[2];
    
        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($file);
                break;
            case IMAGETYPE_GIF:
                $sourceImage = imagecreatefromgif($file);
                break;
            default:
                throw new \Exception("Unsupported image type");
        }
    
        $fileName = Str::random(10) . '.webp';
        $compressedImagePath = storage_path('app/public/photos/' . $fileName);
    
        imagewebp($sourceImage, $compressedImagePath, 80);
    
        imagedestroy($sourceImage);
    
        return $fileName;
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        Storage::disk('public')->delete($photo->photo);
        $photo->delete();
        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $file = $request->file('photo');
    
        $fileName = $this->compressImage($file);
    
        $folder = 'photos';
        $filePath = $folder . '/' . $fileName;
        Storage::disk('public')->put($filePath, file_get_contents($file));
    
        $photo = Photo::find($id);
        $photo->photo = $filePath; 
        $photo->save();
    
        return redirect()->back()->with('success', 'File uploaded and compressed successfully.');
    }
}
