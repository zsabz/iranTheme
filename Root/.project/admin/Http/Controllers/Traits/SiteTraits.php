<?php
namespace Admin\Http\Controllers\Traits;
use Admin\Models\Category;
use App\Models\Atribute;

trait SiteTraits
{
    public function view($path, $sidebar = true)
    {
        $view=view($path);
        $header = $this->header();
        // dd($header);
        $view->with(compact('header'));
        if ($sidebar) {
            $sidebar = $this->sidebar();
            $view->with(compact('sidebar'));
        }

        return $view;
    }

    public function sidebar()
    {
        $catitem = $this->cat_item();  
        return view('views::products.component.sidebar')
            ->with(compact('catitem'));
    }  

    public function header()
    {
        $catitem = $this->cat_item();  
        return view('views::products.component.header')
            ->with(compact('catitem'));
    }

    public function foote()
    {
        # code...
    }
    
    public function cat_item()
    {
        $catitem = Category::where('parent_id', 0)->with('child')->get(); 
        return $catitem;
    }

    public function get_cart()
    {
        if (!session()->has('cart')) {
            session()->put('cart', []);
        }       
        return session()->get('cart');
    }
}
?>
