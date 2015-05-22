<?php

namespace extensions\font_awesome_views{
    
    class view_stack extends view{
        
        public function __construct($bottom_icon, $top_icon){
            parent::__construct('span');
            $this->add_class('fa-stack');
            $this->add_class('fa-lg');
            
            if ($bottom_icon instanceof view_icon && $top_icon instanceof view_icon){
                $bottom_icon->add_class('fa-stack-1x');
                $top_icon->add_class('fa-stack-2x');
                $this->add($top_icon, $bottom_icon);
            }
        }
        
    }
    
    
}

?>
