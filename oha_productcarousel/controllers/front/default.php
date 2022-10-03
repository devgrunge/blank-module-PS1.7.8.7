<?php
/**
 * <ModuleClassName> => catalogSlider
 * <FileName> =>showSlider.php
 * Format expected: <ModuleClassName><FileName>ModuleFrontController
 */
class Oha_productCarouselShowSliderModuleFrontController extends ModuleFrontController
{ 

    public function __construct() {
    parent::__construct();  

    }

    public function init() {
      parent::init();

    }

  //   public function initContent()
  //   {
  //  $this->setTemplate('module:oha_productcarousel/views/templates/hook/slider.tpl');
  //     parent::initContent();
  //     $this->context->smarty->assign(array());
  //     if (Tools::getValue('id') != '')
  //    $this->setTemplate('slider.tpl');
  //    else
  //   $this->errors[] = Tools::displayError('You do not have permission to view this.');
  
  
    
    
    // $sql = " select * from `"._DB_PREFIX_."product` ";roductcarousel
    // $acessory_data = Db::getInstance()->executeS($sql);
 
    
    //and now pass data to template 
    // $this->context->smarty->assign([
    //   'accessory' => $presented_accessory,
    //   'acessory_data' => $acessory_data, // passing data to template 
    // ]);
    
    
    
    // $this->setTemplate('oha_productcarousel/slider');
  



  }

  // public function setMedia() {
  //   $this->registerStylesheet(
  //     'oha_productcarousel-default',
  //     'modules/fbsample_messageoftheday/views/css/oha_productcarousel.css',
  //     array('media' => 'all', 'priority' => 150)
  // );
  // $this->context->controller->registerJavascript(
  //     'oha_productcarousel-default',
  //     'modules/fbsample_messageoftheday/views/js/default.js',
  //     ['position' => 'bottom', 'priority' => 150]
  // );
  // parent::setMedia();
  // }
                 
      
  //               }
                
              
  
              
              
              // $sql = 'SELECT * FROM ps_accessory  ';
              // $result = Db::getInstance()->ExecuteS($sql);
              // if(Tools::issubmit('result'))
              //     {
                //         $custdata = Tools::getValue('ps_accessory');
    //         echo 'test test'.$custdata;     
    //     }
 
 //set template
    
    // /** @var \Db $db */
    // $db = \Db::getInstance();
    // $request = 'SELECT `sorep_db` FROM `' . _DB_PREFIX_ . 'ps_accessory` ...';
    // /** @var array $result */
    // $result = $db->executeS($request);
    // $this->context->smarty->assign("request" , $request);
    
  // echo "<script> alert('vou parar dentro do php'); </script>";
  
  //public function Link::getModuleLink($sorep_catalogslider, $showSlider, array $params = array());
   
   
   
   
   
   
   //     $db = Db::getInstance(_PS_USE_SQL_SLAVE_);
    //     $sql = " SELECT '*' FROM `"._DB_PREFIX_."ps_accessory`  WHERE id_product='".$this->context->product->id."'";
    //     $productData = Db::getInstance()->executeS($sql);
  
  
    //   //and now pass data to template 
    //   $this->context->smarty->assign([
    // 'product' => $product,
    //  'productData' => $productData, // passing data to template 
    //  ]);
    // $this->setTemplate('hook/slider.tpl');
    // var_dump($productData);
    // die();
        