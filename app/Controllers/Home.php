namespace App\Controllers;

// Tambahkan baris ini jika VS Code masih rewel:
use App\Controllers\BaseController; 

class Home extends BaseController
{
    public function index()
    {
        return view('cek_email');
    }
}


