<?php
namespace ism\controllers;

use ism\lib\Request;
use ism\lib\Response;
use ism\lib\AbstractModel;
use ism\lib\AbstractController;

class PageController extends AbstractController {

    private AbstractModel $model;
    public function __construct(){
        parent::__construct();
    }

    public function accueil(){
        $this->render("pages/home/index");
    }

    public function solutions(){
        $this->render("pages/solutions/solutions");
    }

    public function cgu(){
        $this->render("pages/cgu/cgu");
    }

    public function pc(){
        $this->render("pages/pc/pc");
    }

    public function sms(){
        $this->render("pages/sms/sms");
    }

    public function chatbot(){
        $this->render("pages/chatbot/chatbot");
    }


}
