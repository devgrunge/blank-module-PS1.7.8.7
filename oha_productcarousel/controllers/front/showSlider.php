<?php
/**
 * <ModuleClassName> => Cheque
 * <FileName> => validation.php
 * Format expected: <ModuleClassName><FileName>ModuleFrontController
 */
class Oha_productcarouselFrontController extends ModuleFrontController
{ 
    public function initContent()
{
  // In the template, we need the vars paymentId & paymentStatus to be defined
//   $this->context->smarty->assign(
//     array(
//       'paymentId' => Tools::getValue('id'), // Retrieved from GET vars
//       'paymentStatus' => [...],
//     ));

  // Will use the file modules/cheque/views/templates/front/validation.tpl
  // $this->setTemplate('module:sorep_catalogslider/views/templates/front/slider.tpl');
}
//public function Link::getModuleLink($sorep_catalogslider, $showSlider, array $params = array());
     
}