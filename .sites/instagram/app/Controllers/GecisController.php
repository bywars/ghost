<?php

    namespace App\Controllers;

    use App\Libraries\InstagramReaction;
    use BulkReaction;
    use Wow;
    use Wow\Net\Response;

    class GecisController extends BaseController {

        /**
         * @var InstagramReaction $iReaction
         */
        private $instagramReaction;

        /**
         * Override onStart
         */
		 
        function onActionExecuting() {
            if(($pass = parent::onActionExecuting()) instanceof Response) {
                return $pass;
            }

            //�ye giri�i kontrol�.
            if(($pass = $this->middleware("logged")) instanceof Response) {
                return $pass;
            }

//            //Navigation
            $this->navigation->add("Ara�lar", "/tools");

            $this->instagramReaction = new InstagramReaction($this->logonPerson->member->uyeID);
        }
		
		function IndexAction() {
			return $this->partialView();
        }
           
    }