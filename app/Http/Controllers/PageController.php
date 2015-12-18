<?php namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Repositories\ImageRepository;
use Validator;
use Input;
use File;
use Illuminate\Foundation\Validation\ValidatesRequests;
use \Eventviva\ImageResize;

class PageController extends Controller {
	/**
	 * The BlogRepository instance.
	 *
	 * @var App\Repositories\BlogRepository
	 */
	protected $image_gestion;

	/**
	 * Create a new PageController instance.
	 *
	 * @param  App\Repositories\ImageRepository $image_gestion
	 * @return void
	*/
	public function __construct(ImageRepository $image_gestion)
	{
		$this->image_gestion = $image_gestion;
	}

	public function frontPage()
	{
		return view('pages.front', array());
	}

}