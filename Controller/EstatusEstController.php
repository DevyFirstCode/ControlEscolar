<?php
include_once __DIR__ . "/../Models/EstatusEst.php";

class EstatusEstController
{
    private $estatusEstModel;

    public function __construct()
    {
        $this->estatusEstModel = new EstatusEst();
    }


    public function eliminarEstatusEst($estatusEstId)
    {
        return $this->estatusEstModel->eliminarEstatusEst($estatusEstId);
    }
}
?>