<?php
namespace Project\Controllers;
use Core\Controller;

class NumController extends Controller
{
    public function sum($a)
    {
        echo (array_sum($a)); // ['var1' => 'eee', 'var2' => 'bbb']
    }
}
?>