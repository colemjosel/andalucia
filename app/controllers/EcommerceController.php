<?php


class EcommerceController extends BaseController {

	public function showHome()
	{
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

		$productos = Productos::where('category_id', '=', '1')->get();
		return View::make('ecommerce.categoria', compact('productos', 'categoryfilter'));
	}

    public function showCategoria($id)
    {
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        $productos = Productos::where('category_id', '=', $id)->get();
        return View::make('ecommerce.categoria', compact('productos', 'categoryfilter'));
    }

    public function showProducto($id)
    {
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        $producto = Productos::where('id', '=', $id)->get();
        return View::make('ecommerce.producto', compact('producto', 'categoryfilter'));
    }

    public function showSummary()
    {
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        return View::make('ecommerce.summary',  compact('categoryfilter'));
    }

    public function showCheckout()
    {
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        $data = json_decode(file_get_contents('php://input'));
        return $data;
        //return View::make('ecommerce.checkout', compact('items'));
    }

}

