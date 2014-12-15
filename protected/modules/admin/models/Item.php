<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Item extends CFormModel
{
    public $image;
    public $imageNo;
    // ... other attributes
 
    public function rules()
    {
        return array(
            array('image', 'file', 'types'=>'jpg'),
        );
    }
    
    public function getImageNo()
    {
        return $this->imageNo;
    }
}

?>
