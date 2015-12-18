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
}