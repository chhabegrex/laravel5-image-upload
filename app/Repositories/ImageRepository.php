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


    
    /**
     * Get search collection.
     *
     * @param  array  $search_options
     * @param  Int  $offset
     * @param  Int  $limit
     * @return array
     */
    public function search($search_options = array(), $offset = 0, $limit = 0)
    {
        if(isset($search_options['image_id']))
        {
            $this->model->where('image_id', '=', $search_options['image_id']);
        }

        if(isset($search_options['image_name']))
        {
            $this->model->where('image_name', '=', $search_options['image_name']);
        }

        if(isset($search_options['image_extension']))
        {
            $this->model->where('image_extension', '=', $search_options['image_extension']);
        }

        if(isset($search_options['image_location']))
        {
            $this->model->where('image_location', '=', $search_options['image_location']);
        }


        if(isset($search_options['order_by']) && isset($search_options['order_type']))
        {
            $this->model->orderBy($search_options['order_by'], $search_options['order_type']);
        }
        else
        {
            $this->model->orderBy('image_id', 'desc');   
        }

        if(isset($search_options['group_by']))
        {
            $this->model->groupBy($search_options['group_by']);
        }

        if($offset != 0)
        {
            $this->model->skip($offset);
        }

        if($limit != 0)
        {
            $this->model->take($limit);
        }

        return $this->model->get();
    }
}