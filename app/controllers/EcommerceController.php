<?php


class EcommerceController extends BaseController {

	public function showHome()
	{
		$productos = Productos::where('category_id', '=', '1')->get();
		return View::make('ecommerce.categoria', compact('productos'));
	}

}

