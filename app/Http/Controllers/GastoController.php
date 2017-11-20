<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;
use App\Http\Controllers;

class GastoController extends Controller 
{

	public function getDashboard()
	{
		$gastos = Gasto::all();
		return view('dashboard', ['gastos' => $gastos]);
	}

	function postGastoPost(Request $request)
	{
		$this->validate($request, [
			'descricao' => 'required|max:200',
			'valor' => 'required',
			'desconto' => 'required',
			'multa' => 'required'
			]);

		$objgasto = new Gasto();
		$objgasto->descricao = $request['descricao'];
		$objgasto->valor = $request['valor'];
		$objgasto->desconto = $request['desconto'];
		$objgasto->multa = $request['multa'];

		$message = 'Houve um problema';
		if($request->user()->gastos()->save($objgasto))
		{
			$message = 'Gasto Salvo com sucesso';
		}

		return redirect()->route('dashboard')->with(['message' => $message]);
	}

	function postGastoEdit()
	{

	}

	function postGastoDelete($gasto_id)
	{
		$gasto = Gasto::where('id', $gasto_id)->first();
		$gasto->delete();

		return redirect()->route('dashboard')->with(['message' => 'Deletado com Sucesso']);
	}
}