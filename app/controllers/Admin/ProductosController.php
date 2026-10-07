<?php

namespace App\Controllers\Admin;

use Core\Controller;
use App\Models\Admin\categorias;

class ProductosController extends Controller
{
    protected $categoriasModel;
    public function __construct()
    {
        $this->categoriasModel = new categorias();
    }

    public function index()
    {
        $this->view('admin/productos/index', [
            'isAdmin'     => true,
            'module'    => 'admin',
            'pageTitle' => 'Productos'
        ]);
        exit;
    }
    public function nuevo()
    {
        $categorias = $this->categoriasModel->categorias_select();
        var_dump($categorias);
        $this->view('admin/productos/nuevo', [
            'isAdmin'     => true,
            'module'    => 'admin',
            'pageTitle' => 'Nuevo Producto',
            'categorias' => $categorias
        ]);
        exit;
    }
}
