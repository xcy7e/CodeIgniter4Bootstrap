<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Pages extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
    /**
     * Bootstrap template to render
     * Override on the fly to change render path
     * possible values:
     * album | pricing | checkout
     * @var string
     */
    public $bootstrapTemplate = 'album';

    /**
     * Bootstrap theme
     * (not every template supports theme by default)
     * light | dark
     * @var string
     */
    public $bootstrapTheme = 'light';

	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

	}

    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['theme'] = $this->bootstrapTheme;
        $data['content'] =  view($page, $data);

        // template chunks:
        echo view('templates/'.$this->bootstrapTemplate.'/head', $data);
        // optional sidebar
        if (is_file(APPPATH.'/Views/templates/'.$this->bootstrapTemplate.'/sidebar.php')) {
            echo view('templates/'.$this->bootstrapTemplate.'sidebar', $data);
        }
        // optional navigation
        if (is_file(APPPATH.'/Views/templates/'.$this->bootstrapTemplate.'/nav.php')) {
            echo view('templates/'.$this->bootstrapTemplate.'/nav', $data);
        }
        echo view('templates/'.$this->bootstrapTemplate.'/main', $data);
        echo view('templates/'.$this->bootstrapTemplate.'/footer', $data);
    }
}
