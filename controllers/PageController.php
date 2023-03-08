<?php
namespace ism\controllers;

use ism\lib\Request;
use ism\lib\Response;
use ism\lib\AbstractModel;
use ism\lib\AbstractController;

class PageController extends AbstractController {

    public function __construct(){
        parent::__construct();
    }

    public function accueil(){
        $this->render("pages/home/index");
    }

    public function conditions_generales_utilisation(){
        $this->render("pages/cgu/cgu");
    }

    public function politique_confidentialite(){
        $this->render("pages/pc/pc");
    }

    public function sms(){
        $this->render("pages/sms/sms");
    }

    public function chatbot(){
        $this->render("pages/chatbot/chatbot");
    }

    public function website_ads(){
        $this->render("pages/website/website");
    }

    public function search_engine_ads(){
        $this->render("pages/search-engine/search-engine");
    }

    public function led_pannels_ads(){
        $this->render("pages/led-pannels/led-pannels");
    }

    public function tv(){
        $this->render("pages/tv/tv");
    }

    public function radio(){
        $this->render("pages/radio/radio");
    }

    public function ussd(){
        $this->render("pages/ussd/ussd");
    }

    public function push_vocal(){
        $this->render("pages/push-vocal/push-vocal");
    }

    public function simulator(){
        $this->render("pages/simulator/simulator");
    }

    public function tutorials(){
        $this->render("pages/tutorials/tutorials");
    }


}
