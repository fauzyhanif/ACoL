<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->pick("qodr_tmp_index/index");
    }

}

