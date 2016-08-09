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
        include __DIR__ . "/../Services/phpqrcode/qrlib.php";

        $id = $_GET['id'];
        $eid = $_GET['eid'];

        // create a QR Code with this text and display it
       echo QRcode::png("id:$id eid:$eid");

//        echo $this->twig->render('index.twig');
    }

    public function test()
    {
        echo $this->twig->render('test.twig');
    }

}