<?php

use PrestaShop\PrestaShop\Adapter\ObjectPresenter;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;


class KfPresentation extends Module implements WidgetInterface

{
   
    public function __construct()
    {
        $this->name = 'kfpresentation';
        $this->author = 'Kévin Foucret';
        $this->version = '1.0.0';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '1.7.1.0',
            'max' => _PS_VERSION_,
        ];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Presentation text and pictures', [], 'Modules.KfPresentation.Admin');
        $this->description = $this->trans('Display Custom Text', [], 'Modules.KfPresentation.Admin');

        $this->templateFile = 'module:kfpresentation/views/templates/hook/kfpresentation.tpl';
    }

    public function install()
    {
        $this->_clearCache('*');
        return parent::install() && $this->registerHook('displayHome') && $this->registerHook('displayHeader');
    
    }

    public function uninstall()
    {
        $this->_clearCache('*');
        return parent::uninstall() && $this->unregisterHook('displayHome') && $this->unregisterHook('displayHeader');
    }

    public function postProcess()
    {
        if(Tools::isSubmit('btnSubmitMyModule'))
        {
            foreach (Language::getLanguages(false) as $lang){
            Configuration::updateValue('PRESENTATION_1_'.$lang['id_lang'], Tools::getValue('PRESENTATION_1_'.$lang['id_lang']),true);
            }
    
        }
    }

    public function getContent()
    {    
        return $this->postProcess().$this->renderForm();

    }
    public function hookdisplayHeader(){ 
        if($this->context->controller->php_self =='category'){
            $this->context->controller->addCSS($this->_path . 'views/css/front.css', 'all');

        }
    }

    // public function hookdisplayLeftColumn(){
    //     $this->context->smarty->assign('message', Configuration::get('TEST_INPUT_'.$this->context->language->id));
    //     return $this->fetch($this->templateFile);
    // }

    public function renderForm()
    {
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');

        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->trans('Presentation Text and Pictures', [], 'Modules.Presentation.Admin'),
                ],
                'input' => [
                    [
                        'type' => 'textarea',
                        'autoload_rte'=> true, 
                        // 'label' => $this->trans('Payee (name)', [], 'Modules.Checkpayment.Admin'),
                        'name' => 'PRESENTATION_1',
                        'required' => true,
                        'lang'=> true, 
                    ],
                    // [
                    //     'type' => 'textarea',
                    //     'label' => $this->trans('Address', [], 'Modules.Checkpayment.Admin'),
                    //     'desc' => $this->trans('Address where the check should be sent to.', [], 'Modules.Checkpayment.Admin'),
                    //     'name' => 'PRESENTATION_1',
                    //     'required' => true,
                    // ],
                ],
                'submit' => [
                    'title' => $this->trans('Save', [], 'Admin.Actions'),
                ],
            ],
        ];

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->id = (int) Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmitMyModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = [
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0),
            ];
        }
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFieldsValues(),
        ];

        return $helper->generateForm([$fields_form]);
    }
    public function getConfigFieldsValues()
    {
        $res=[];
        $res['PRESENTATION_1'][1]="lang 1"; 
        $res['PRESENTATION_1'][2]="lang 2"; 

        foreach (Language::getLanguages(false) as $lang){
            $res['PRESENTATION_1'][$lang['id_lang']] = Tools::getValue('PRESENTATION_1_'.$lang['id_lang'], Configuration::get('PRESENTATION_1_'.$lang['id_lang']));

        }
        return $res;
    }
    /**
     * @param string|null $hookName
     * @param array $configuration
     *
     * @return string
     */
    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('kf_presentation'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('kf_presentation '));
    }

    /**
     * @param string|null $hookName
     * @param array $configuration
     *
     * @return array<string, mixed>
     */
    public function getWidgetVariables($hookName = null, array $configuration = [])
    {   
        $this->context->smarty->assign('message', Configuration::get('PRESENTATION_1_'.$this->context->language->id));

        $customText = new CustomText(1, (int) $this->context->language->id, (int) $this->context->shop->id);
        $objectPresenter = new ObjectPresenter();
        $data = $objectPresenter->present($customText);
        $data['id_lang'] = $this->context->language->id;
        $data['id_shop'] = $this->context->shop->id;
        unset($data['id']);
        
        return ['cms_infos' => $data];
        
    }
    
}
