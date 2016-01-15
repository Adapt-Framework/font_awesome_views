<?php

namespace font_awesome\views{
    
    class view extends \adapt\view{
        
        public function __construct($tag, $data = null, $attributes = array()){
            parent::__construct('span', $data, $attributes);
            $this->add_class('font-awesome');
        }
    }
    
    
}

?>
