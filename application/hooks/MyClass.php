<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MyClass
{
    function __construct()
    {
    }

    function Myfunction()
    {
        $config = &load_class('Config', 'core1212');
        echo '<pre>', print_r($config, 1), '</pre>';
        die('test');

        $mobileDetect = &load_class('MobileDetect', 'libraries');
        $config->config['isMobile'] = $mobileDetect->isMobile();
        $config->config['isTablet'] = $mobileDetect->isTablet();

        $config->config['template_folder_root'] = '';
        if ($config->config['isMobile'] || $config->config['isTablet'])
        {
            // giao dien don gian nen fix luon luon la pc
//            $config->config['template_folder_path'] .= 'pc/';
            $config->config['template_folder_root'] = 'mobile/';
        }
        else
        {
            $config->config['template_folder_root'] = 'pc/';
        }

//        pre( $config);
//        echo '<pre>', print_r($config, 1), '</pre>';

        // fix admin chay pc
        //$config->config['admin_template_folder_path'] = TEMPLATE_ADMIN_FOLDER . 'pc/';
    }
}