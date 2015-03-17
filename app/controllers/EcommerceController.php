<?php


class EcommerceController extends BaseController {

	public function showHome()
	{
        $categoryfilter = $this->categoryFilter();

		$productos = Productos::where('category_id', '=', '1')->get();
		return View::make('ecommerce.categoria', compact('productos', 'categoryfilter'));
	}

    public function showCategoria($id)
    {
        $categoryfilter = $this->categoryFilter();

        $productos = Productos::where('category_id', '=', $id)->get();

        $productos = $this->CatRate($productos);

        return View::make('ecommerce.categoria', compact('productos', 'categoryfilter'));
    }

    public function showProducto($id)
    {
        $categoryfilter = $this->categoryFilter();

        $comments = Comments::where('component_item_id', '=', $id)->get();

        $rate = $this->rate($comments);


        $producto = Productos::where('id', '=', $id)->get();
        return View::make('ecommerce.producto', compact('producto', 'categoryfilter', 'comments', 'rate'));
    }

    public function showSummary()
    {
        $categoryfilter = $this->categoryFilter();

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

    //Category Filter
    public function categoryFilter(){
        $categorias = Categorias::all();
        $categoryfilter = View::make('ecommerce.modulos.categoryfilter', compact('categorias'));

        return $categoryfilter;
    }

    //Category rate
    public function CatRate($productos){
        $products2 = array();
        foreach($productos as $pro){
            $id = $pro->id;
            $comments = Comments::where('component_item_id', '=', $id)->get();

            $pro->rate = $this->rate($comments);

            $products2[] = $pro;
        }

        return $products2;
    }

    //Rate
    public function rate($comments){
        $rate = array();

        foreach($comments as $comment){
            $rate[] = $comment->rate;
        }

        $total = count($rate);

        if($total > 0) {
            $sum = array_sum($rate);
            $rate = ($sum / $total);
        }else{
            $rate = 'Se el primero en calificar';
        }

        return $rate;
    }

}

