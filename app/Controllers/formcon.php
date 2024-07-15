<?php

namespace App\Controllers;

use CodeIgniter\Controller; 

class formcon extends BaseController
{
    public function Profile()
    {
        return view('profile');
    }
    public function Experience()
    {
        return view('experience');
    }
}
