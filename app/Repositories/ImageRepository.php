<?php
namespace App\Repositories;
use App\Models\Image;
class ImageRepository extends BaseRepository {
    
    /**
     * Create a new ImageRepository instance.
     *
     * @param  App\Models\Image $image
     * @return void
     */
    public function __construct(Image $image) 
    {
        $this->model = $image;
    }

    /**
     * Create a new image.
     *
     * @param  App\Models\Image $image
     * @param  array  $inputs
     * @return App\Models\Image
     */
    public function saveImage($inputs)
    {
        $image = new $this->model;
        // Mandatory field for an image instance
        $image->image_name = $inputs['image_name'];
        $image->image_extension = $inputs['image_extension'];
        $image->image_location = $inputs['image_location'];
        
        if(isset($inputs['created_at']))
        {
            $image->created_at = $inputs['created_at'];
        }
        else
        {
            $image->created_at = time();
        }
        
        if(isset($inputs['updated_at']))
        {
            $image->updated_at = $inputs['updated_at'];
        }
        else
        {
            $image->updated_at = time();
        }

        // Optional field for an image instance
        if(isset($inputs['height']))
        {
            $image->height = $inputs['height'];    
        }

        if(isset($inputs['width']))
        {
            $image->width = $inputs['width'];    
        }
        if(isset($inputs['origin_height']))
        {
            $image->origin_height = $inputs['origin_height'];    
        }

        if(isset($inputs['origin_width']))
        {
            $image->origin_width = $inputs['origin_width'];    
        }
        if(isset($inputs['request_times']))
        {
            $image->request_times = $inputs['request_times'];    
        }

        if(isset($inputs['status']))
        {
            $image->status = $inputs['status'];    
        }

        $image->save();
        return $image;
    }
}