<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

use App\Models\Products;
use App\Models\User;
class Admin_dashborad extends Controller
{
    //

    public function admin_dashboard(){
        return view('admin.dashboard');
    }



    public function adminlogout(){
        auth()->logout();
        Session()->flush();

        return Redirect::to('/');
    }

    public function addproduct(){
        return view('admin.addproduct');
    }

    public function productlist(){
        $Productsdata = Products::all();
        return view('admin.productslist',['products' => $Productsdata]);
    }

    public function userlist(){
        $userlist=User::where('role','User')->get();
        return view('admin.userlist',['userlist'=>$userlist]);
    }
    public function adduser(){
        return view('admin.adduser');
    }

    public function saveproductdata(Request $req){
        $Products = new Products;

        $p_name=$req->input('product_name');
        $p_price=$req->input('product_price');
     
        $p_desc=$req->input('product_desc');
        if($files=$req->file('product_picture')){  
            $file_name=$files->getClientOriginalName();  
            $files->move(public_path('assets/product_images'),$file_name);  
            $files->path=$file_name;  
            }  

                $Products->product_name = $p_name;
				$Products->product_price = $p_price;
                $Products->product_description=$p_desc;
                $Products->product_image=$file_name;
				$Products->save();

                return redirect()->route('productlist')->withSuccess(__('Product added successfully.'));

    }
    public function deleteproduct($id){

        $product=Products::where('id',$id);
        $product->delete(); 

        return redirect()->route('productlist')->withSuccess(__('Product Deleted successfully.'));
    }

    public function deleteuser($id){

        $user=User::where('id',$id);
        $user->delete(); 

        return redirect()->route('userlist')->withSuccess(__('User Deleted successfully.'));
    }

    public function createuser(Request $req){
        
        $User=new User;
        $User->name=$req->input('user_name');
        $User->email=$req->input('user_email');
        $User->mobile=$req->input('mobile');
        $User->role='User';
        $User->password=bcrypt($req->input('user_password'));
        if($files=$req->file('picture')){  
            $file_name=$files->getClientOriginalName();  
            $files->move(public_path('assets/user_picture'),$file_name);  
            $files->path=$file_name;
            $User->picture=$file_name;  
            }  
        $User->save();

        return redirect()->route('userlist')->withSuccess(__('User Created successfully.'));

    }

    public function edituser($id){
        $userdata=User::where('id',$id)->first();
        return view('admin.edit_user',['userdata'=>$userdata]);
    }

    public function updateuserdata(Request $req){

        $User=User::find($req->id);
        $User->name=$req->input('user_name');
        $User->email=$req->input('user_email');
        $User->mobile=$req->input('mobile');
        $User->password=bcrypt($req->input('user_password'));
        if($files=$req->file('picture')){  
            $file_name=$files->getClientOriginalName();  
            $files->move(public_path('assets/user_picture'),$file_name);  
            $files->path=$file_name;
            $User->picture=$file_name;  
            }  
        $User->save();

        return redirect()->route('userlist')->withSuccess(__('User Update successfully.'));
    }



    public function editproduct($id){
        $productdata=Products::where('id',$id)->first();
        return view('admin.edit_product',['productdata'=>$productdata]);
    }

    public function updateproductdata(Request $req){

        $Products=Products::find($req->id);
        $p_name=$req->input('product_name');
        $p_price=$req->input('product_price');
     
        $p_desc=$req->input('product_desc');
        if($files=$req->file('product_picture'))
        {  
            $file_name=$files->getClientOriginalName();  
            $files->move(public_path('assets/product_images'),$file_name);  
            $files->path=$file_name;  
            $Products->product_image=$file_name;
        }  

        $Products->product_name = $p_name;
        $Products->product_price = $p_price;
        $Products->product_description=$p_desc;
        $Products->save();

        return redirect()->route('productlist')->withSuccess(__('Product Updated successfully.'));

    }

    public function profile(){
        return view('admin.profile');
    }

    public function profileform(){
        return view('admin.profile_form');
    }

    public function updateprofiledata(Request $req){
       

        $User=User::find(Auth::user()->id);
        $User->name=$req->input('name');
        $User->email=$req->input('email');
        $User->mobile=$req->input('mobile');
        if($files=$req->file('picture')){  
            $file_name=$files->getClientOriginalName();  
            $files->move(public_path('assets/user_picture'),$file_name);  
            $files->path=$file_name;
            $User->picture=$file_name;  
            }  
        $User->save();

        return redirect()->route('profile')->withSuccess(__('Profile Updated successfully.'));



    }

           


}
