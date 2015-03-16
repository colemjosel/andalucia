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
        $user_id = '1';
        $estado = 'pendiente';

        $data = Request::all();
 
        foreach ($data['data'] as $key => $value) {
            if($key == 'totalCost'){
                $totalCost = $value;
            }else if($key == 'items'){
                $items = array();
                foreach ($value as $key2 => $value2) {
                    if($key2 == 'id'){
                        $items[] = $value2;
                    }
                }

            }
            
        } 


        $pedido = new Pedidos;

        $pedido->user_id = $user_id;
        $pedido->products_id = $items;
        $pedido->total_cost = $totalCost;
        $pedido->estado = $estado;

        $pedido->save(); 

        return 'guardó';

        //$categorias = Categorias::all();
        //$categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        //return View::make('ecommerce.checkout', compact('categoryfilter'));
    }

}

