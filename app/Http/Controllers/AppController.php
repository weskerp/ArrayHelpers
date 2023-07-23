<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class AppController extends Controller
{
    public function getArray()
    {
        $array = ["TCC", "TCC2", "Inteligencia Artificial"];
        return $array;
    }
    public function getArray3()
    {
        $array = [
            'products' => [
                'construction' => [
                    ['id' => '1', 'name' => 'tijolo', 'unidade' => 'mieiro', 'preco' => '400'],
                    ['id' => '2', 'name' => 'telha', 'unidade' => 'unidade', 'preco' => '10'],
                    ['id' => '3', 'name' => 'cimento', 'unidade' => 'saco', 'preco' => '30'],
                    ['id' => '4', 'name' => 'vergalhão', 'unidade' => 'unidade', 'preco' => '11'],
                    ['id' => '5', 'name' => 'areia', 'unidade' => 'carro', 'preco' => '200'],
                ],
                'supermarket' => [

                    ['id' => '1', 'name' => 'leite', 'unidade' => 'litro', 'preco' => '7'],
                    ['id' => '2', 'name' => 'ovos', 'unidade' => 'duzia', 'preco' => '10'],
                    ['id' => '3', 'name' => 'arroz', 'unidade' => 'saco', 'preco' => '30'],
                    ['id' => '4', 'name' => 'trigo', 'unidade' => 'kg', 'preco' => '3'],
                    ['id' => '5', 'name' => 'fermento', 'unidade' => 'pote', 'preco' => '3'],
                ],
            ],
        ];
        return $array;
    }

    public function getArray2()
    {
        $array = [
            ['curso' => 'Ciência da Computação', 'materia1' => "TCC", 'materia2' => "TCC2"],
            ['curso' => 'Engenharia da Computação', 'materia1' => "ICC", 'materia2' => "Inteligencia Artificial"],
            ['curso' => 'Artes', 'materia1' => "ICC2", 'materia2' => "Inteligencia Artificial"],
        ];
        $array2 = collect([
            ['id' => '1', 'name' => 'tijolo', 'unidade' => 'mieiro', 'preco' => '400'],
            ['id' => '2', 'name' => 'telha', 'unidade' => 'unidade', 'preco' => '10'],
            ['id' => '3', 'name' => 'cimento', 'unidade' => 'saco', 'preco' => '30'],
            ['id' => '4', 'name' => 'vergalhão', 'unidade' => 'unidade', 'preco' => '11'],
            ['id' => '5', 'name' => 'areia', 'unidade' => 'carro', 'preco' => '200'],
        ]);

        return $array;
    }
    public function index()
    {
        $msgm = "As disciplinas restantes para a formatura são:" . implode(", ", $this->getArray());
        $grades = $this->getArray2();
        $value = 1;
        return view('app', compact('msgm', 'value'));
    }
    public function create()
    {
        $msgm = "As disciplinas restantes para a formatura são:" . Arr::join($this->getArray(), ', ', ' e ');
        return view('app', compact('msgm'));
    }
    public function show($value)
    {
        $grades = $this->getArray2();
        $keyed = [];
        switch ($value) {

            case 1:
                foreach ($grades as $grade) {
                    $keyed[$grade['curso']] = $grade;
                    break;
                }
            case 2: {
                    $keyed = Arr::keyBy($grades, 'curso');
                    break;
                }
            case 3: {
                    $grades = $this->getArray3();
                    dd($grades['products']['supermarket']['2']['preco']);
                }
            case 4: {
                    $grades = $this->getArray3();
                    dd(Arr::get($grades, 'products.supermarket.2.preco'));
                }
        }
        dd($keyed);
        return;
    }

    public function tutorial(){
        return view('tutorial');
    }
}
