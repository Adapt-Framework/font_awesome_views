<?php

namespace extensions\font_awesome_views{
    
    class view_icon extends view{
        
        const NORMAL = '';
        const LARGE = 'fa-lg';
        const LARGE2X = 'fa-2x';
        const LARGE3X = 'fa-3x';
        const LARGE4X = 'fa-4x';
        const LARGE5X = 'fa-5x';
        
        const FIXED_WIDTH = 'fa-fw';
        
        const BORDER = 'fa-border';
        
        const NONE = '';
        const SPIN = 'fa-spin';
        const PULSE = 'fa-pulse';
        
        const ROTATE_90 = 'fa-rotate-90';
        const ROTATE_180 = 'fa-rotate-180';
        const ROTATE_270 = 'fa-rotate-270';
        
        const FLIP_HORIZONTAL = 'fa-flip-horizontal';
        const FLIP_VERTICAL = 'fa-flip-vertical';
        
        public function __construct($icon, $size = view_icon::NORMAL, $spin_style = view_icon::NONE, $fixed_width = false){
            parent::__construct('span');
            $this->add_class('fa');
            $this->add_class('fa-' . $icon);
            
            $this->size = $size;
            $this->spin_type = $spin_style;
            $this->fixed_width = $fixed_width;
        }
        
        public function pget_size(){
            if ($this->has_class(self::LARGE5X)){
                return self::LARGE5X;
            }elseif ($this->has_class(self::LARGE4X)){
                return self::LARGE4X;
            }elseif ($this->has_class(self::LARGE3X)){
                return self::LARGE3X;
            }elseif ($this->has_class(self::LARGE2X)){
                return self::LARGE2X;
            }elseif ($this->has_class(self::LARGE)){
                return self::LARGE;
            }else{
                return self::NORMAL;
            }
        }
        
        public function pset_size($size){
            $this->remove_class(self::LARGE);
            $this->remove_class(self::LARGE2X);
            $this->remove_class(self::LARGE3X);
            $this->remove_class(self::LARGE4X);
            $this->remove_class(self::LARGE5X);
            if (in_array($size, array(self::LARGE, self::LARGE2X, self::LARGE3X, self::LARGE4X, self::LARGE5X))) $this->add_class($size);
        }
        
        public function pget_fixed_width(){
            return $this->has_class(self::FIXED_WIDTH);
        }
        
        public function pset_fixed_width($value){
            if ($value === true){
                $this->add_class(self::FIXED_WIDTH);
            }else{
                $this->remove_class(self::FIXED_WIDTH);
            }
        }
        
        public function pget_border(){
            return $this->has_class(self::BORDER);
        }
        
        public function pset_border($value){
            if ($value === true){
                $this->add_class(self::BORDER);
            }else{
                $this->remove_class(self::BORDER);
            }
        }
        
        public function pget_spin_style(){
            if ($this->has_class(self::SPIN)){
                return self::SPIN;
            }elseif($this->has_class(self::PULSE)){
                return self::PULSE;
            }else{
                return self::NONE;
            }
        }
        
        public function pset_spin_style($value){
            $this->remove_class(self::SPIN);
            $this->remove_class(self::PULSE);
            
            if (in_array($value, array(self::SPIN, self::PULSE))){
                $this-add_class($value);
            }
        }
        
        public function pget_rotate(){
            if ($this->has_class(self::ROTATE_90)){
                return self::ROTATE_90;
            }elseif ($this->has_class(self::ROTATE_180)){
                return self::ROTATE_180;
            }elseif ($this->has_class(self::ROTATE_270)){
                return self::ROTATE_270;
            }else{
                return self::NONE;
            }
        }
        
        public function pset_rotate($rotation){
            $this->remove_class(self::ROTATE_90);
            $this->remove_class(self::ROTATE_180);
            $this->remove_class(self::ROTATE_270);
            if (in_array($size, array(self::ROTATE_90, self::ROTATE_180, self::ROTATE_270))) $this->add_class($size);
        }
        
        public function pget_flip_horizontal(){
            return $this->has_class(self::FLIP_HORIZONTAL);
        }
        
        public function pset_flip_horizontal($value){
            if ($value){
                $this->add_class(self::FLIP_HORIZONTAL);
            }else{
                $this->remove_class(self::FLIP_HORIZONTAL);
            }
        }
        
        public function pget_flip_vertical(){
            return $this->has_class(self::FLIP_VERTICAL);
        }
        
        public function pset_flip_vertical($value){
            if ($value){
                $this->add_class(self::FLIP_VERTICAL);
            }else{
                $this->remove_class(self::FLIP_VERTICAL);
            }
        }
    }
    
    
}

?>
