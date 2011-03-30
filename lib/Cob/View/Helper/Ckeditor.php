<?php

/**
 * My Promotions eCommerce Platform
 * Copyright � 2010-2011 Promocon Group Pty. Ltd.
 */
namespace Cob\View\Helper;

/**
 * 
 * 
 * @author Cobby
 */

class Ckeditor extends \Zend_View_Helper_FormTextarea
{
    public function ckeditor($name, $value = null, $attribs = null)
    {
        $info = $this->_getInfo($name, $value, $attribs);
        $this->view->headScript()->appendFile($this->view->payloadUrl('js/ckeditor/ckeditor.js', 'core'));
        $this->view->headScript()->appendFile($this->view->payloadUrl('js/ckeditor/adapters/jquery.js', 'core'));
        $html = parent::formTextarea($name, $value, $attribs);
        $html .= <<<CKE
\n
<script type="text/javascript">
$('#{$info['id']}').ckeditor();
</script>
CKE;
        return $html;
    }


}
