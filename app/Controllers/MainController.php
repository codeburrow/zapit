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

    public function index($result=null)
    {
        if ($result == null) {

            include __DIR__ . "/../Services/phpqrcode/qrlib.php";

            $backColor = 0xFFFF00;
            $foreColor = 0xFF00FF;

            $id = 2345;
            $eid = 23543254;

            // create a QR Code with this text and display it
            QRcode::png("id:$id eid:$eid", "img/qr.png", "L", 4, 4, false, $backColor, $foreColor);

            echo $this->twig->render('index.twig');
        } else {
            echo $this->twig->render('index.twig', array('result'=>$result));
        }
    }

}