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
                $items = $value;
            }
            
        } 


        $pedido = new Pedidos;

        $pedido->user_id = $user_id;
        $items = json_encode($items);
        $pedido->products_id = $items;
        $pedido->total_cost = $totalCost;
        $pedido->estado = $estado;

        $pedido->save();

        $the_id = $pedido->id;

        $comprobante = array('user_id' => $user_id, 'id' => $the_id, 'totalCost' => $totalCost, 'items' => $items, 'estado' => $estado);

        return View::make('ecommerce.checkout', compact('comprobante', 'the_id'));
    }

    public function printPDF($id)
    {
        $pedido = Pedidos::where('id', '=', $id)->get();

        $pdf = App::make('dompdf');
        $pdf->loadHTML('<h1>Comprobante</h1><ul><li><b>User:</b> '.$pedido[0]->user_id.'</li><li><b>ID:</b>'.$pedido[0]->id.'</li><li><b>Costo:</b>'.$pedido[0]->totalCost.'</li><li><b>Estado:</b>'.$pedido[0]->estado.'</li><li><b>items:</b>'.$pedido[0]->products_id);
        return $pdf->stream();
    }

}

