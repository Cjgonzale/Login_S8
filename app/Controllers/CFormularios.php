<?php

namespace App\Controllers;

class CFormularios extends BaseController
{
    // Este es el metodo para mostrar la vista del form1
    public function MMostrarForm1(): string
    {
        return view("Forms/form1");
    }

}
