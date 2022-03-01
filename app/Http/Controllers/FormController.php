<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
 
class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'name' => 'required|max:50',
           'phonenumber' => 'required|numeric',
           'address' => 'required|min:5|max:100',
           'amount' => 'required|numeric|min:2.5|max:99.99',
           'reason' => 'required|max:150',
           'ktp' => 'required|image|max:2048|mimes:png,jpg,jpeg'
        ]);
        $imagelink = $this->displayImage($request);
        $request->ktp = $imagelink;

        return view('proses',['data' => $request]) -> with('success', 'form submitted');
    }

    public function displayImage(Request $request)
    {
        $image = $request->ktp;
        $imagename = '';
        if ($image !== NULL)
        {
            $imagename = "ktp" . "." . $image->extension();
            $image->storeAs(null, $imagename, ['disk' => 'public']);
        }
        return asset('storage') . '/' . $imagename;
    }
}


