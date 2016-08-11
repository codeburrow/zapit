<?php
namespace Zapit\Controllers;

use ChromePhp;
use QRcode;
use Zapit\Models\User;

class MainController extends Controller
{
    protected $user;

    public function __construct($data = null)
    {
        parent::__construct($data);

        if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
            $this->user = new User($_SESSION['user'], $_SESSION['password']);
        }
    }

    public function index()
    {
        echo "Life is a bitch. Deal with it.";
    }
    
    public function generate_qr_code()
    {
        include __DIR__ . "/../Services/phpqrcode/qrlib.php";

        //Retrieve parameters from db
        $id = 123;
        $eid = 345;

        // create a QR Code with this text and display it
        echo QRcode::png("id:$id eid:$eid");

    }

    public function showWidget()
    {
        echo $this->twig->render('showWidget.twig');
    }

    public function about()
    {
        echo $this->twig->render('about.twig');
    }

    public function test()
    {
        echo $this->twig->render('test.twig');
    }

}