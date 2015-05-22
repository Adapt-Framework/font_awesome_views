<?php

namespace extensions\font_awesome_views{
    
    class view extends \frameworks\adapt\view{
        
        public function __construct($tag, $data = null, $attributes = array()){
            parent::__construct('span', $data, $attributes);
            $this->add_class('font-awesome');
        }
    }
    
    
}

?>
