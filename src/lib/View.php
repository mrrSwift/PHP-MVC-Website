<?php

class View {

    
    private $rendered = false;

    public function render($name) {

        //Check if view has already been rendered
        if (!$this->rendered) {

            //Prevent double rendering
            $this->rendered = true;

            //نمایش محتوای سایت به ترتیب
            

            require 'partial/header.php';

            require 'partial/navbar.php';

            require 'partial/message.php';

            require 'view/' . $name . '.php';
           
            if(Session::get('controller_name') !== 'Dashboard') {
                require 'partial/footer.php';
            }
            
            // درصورتی که حالت دیباگ فعال بود این بلاک رو به پایین صفحه اضافه میکنه
            if (DEBUG_MODE) {
                //Draw Debug-View
                require 'partial/debug.php';
            }
            // فراخانی کتابخانه های جاوا اسکریپت
            require 'partial/footer_essentials.php';

        }

    }

}