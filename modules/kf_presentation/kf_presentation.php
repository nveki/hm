<?php

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
 
    if (!defined('_PS_VERSION_')) {
        exit;
    }
    class Kf_Presentation extends Module implements WidgetInterface
{
  public function __construct()
{
    $this->name = 'kf_presentation';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Kévin Foucret';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = [
        'min' => '1.7',
        'max' => _PS_VERSION_
    ];
    $this->bootstrap = true;
    parent::__construct();


    $this->displayName = $this->trans('Module présentation courte pour HP',[], 'Modules.KfPresentation.Admin');
    $this->description = $this->trans('Module présentation d\'entreprise pour home page et lien vers page entreprise "qui sommes nous?"',[], 'Modules.KfPresentation.Admin');

    $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');

    $this->templateFile = 'module:kf_presentation/views/templates/hook/kf_presentation.tpl';
}


public function install()
{
    return parent::install() && $this->registerHook('displayHome') && $this->registerHook('displayHeader');

 
    return true;
}
 
public function uninstall()
{
    return parent::uninstall() && $this->unregisterHook('displayHome') && $this->unregisterHook('displayHeader');

}
public function postProcess()
    {
        if(Tools::isSubmit('btnSubmit'))
        {

            // foreach (Language::getLanguages(false) as $lang) {
            //     Configuration::updateValue('TITRE'.$lang['id_lang'], Tools::getValue('TITRE_'.$lang['id_lang']), true);
            //     Configuration::updateValue('SOUSTITRE'.$lang['id_lang'], Tools::getValue('SOUSTITRE_'.$lang['id_lang']), true);
            //     Configuration::updateValue('CONTENU'.$lang['id_lang'], Tools::getValue('CONTENU_'.$lang['id_lang']), true);
            // }
            Configuration::updateValue('TITRE', Tools::getValue('TITRE'));
            Configuration::updateValue('SOUSTITRE', Tools::getValue('SOUSTITRE'));
            Configuration::updateValue('CONTENU', Tools::getValue('CONTENU'));
            

            // pour V2
            // Configuration::updateValue('IMAGE', Tools::getValue('IMAGE'));
        }
    }

public function getContent()
{
    return $this->postProcess().$this->renderForm();

}

public function hookdisplayHeader()
{
    if($this->context->controller->php_self == 'category')
    {
        $this->context->controller->addCSS($this->_path . 'views/css/front.css', 'all');
    }
        
}
public function renderForm()
    {
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');
        $fields_form = [
            'form' => [
                'legend' => [
                    'title' => $this->trans('Contenu page entreprise', [], 'Modules.KfPresentation.Admin'),
                    'icon' => 'icon-cogs',
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre Titre', [], 'Modules.KfPresentation.Admin'),
                        'name' => 'TITRE',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre sous-titre', [], 'Modules.KfPresentation.Admin'),
                        'name' => 'SOUSTITRE',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre Contenu', [], 'Modules.KfPresentation.Admin'),
                        'name' => 'CONTENU',
                        'required' => true,
                        // 'lang' => true
                    ],
                    // pour V2
                    // [
                    //     'type'=>'file',
                    //     // 'autoload_rte' => true,
                    //     'label' => $this->trans('Image Uploadée'),
                    //     'name' => 'IMAGE',
                    //     'desc' => $this->trans(' Uploadez une image pour illustrer votre contenu ', [], 'Modules.KfPresentation.Admin'),

                    //     'display_image' => true,
                        
                    // ]
    
                ],
                'submit' => [
                    'title' => $this->trans('Save', [], 'Admin.Actions'),
                ],
            ],
        ];
        
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->id = $this->name;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false) . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = [
            'fields_value' => $this->getConfigFieldsValues(),
        ];
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = [
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0),
            ];
        }
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        return $helper->generateForm([$fields_form]);
    }
public function getConfigFieldsValues()
    {
        // $res = [];
        // foreach (Language::getLanguages(false) as $lang) {
        //     $res['TITRE'][$lang['id_lang']] = Tools::getValue('TITRE_'.$lang['id_lang'], Configuration::get('TITRE_'.$lang['id_lang']));
        //     $res['SOUSTITRE'][$lang['id_lang']] = Tools::getValue('SOUSTITRE_'.$lang['id_lang'], Configuration::get('SOUSTITRE_'.$lang['id_lang']));
        //     $res['CONTENU'][$lang['id_lang']] = Tools::getValue('CONTENU_'.$lang['id_lang'], Configuration::get('CONTENU_'.$lang['id_lang']));

        // }
        // return $res;
            return[               
                 'TITRE'=>Tools::getValue('TITRE',Configuration::get('TITRE')),
                 'SOUSTITRE'=>Tools::getValue('SOUSTITRE',Configuration::get('SOUSTITRE')),
                 'CONTENU'=>Tools::getValue('CONTENU',Configuration::get('CONTENU')),
                 // pour V2
                //  'IMAGE'=>Tools::getValue('IMAGE',Configuration::get('IMAGE')),
            ];


    }
    /**
     * {@inheritdoc}
     */
    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

        return $this->fetch(
           $this->templateFile
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getWidgetVariables($hookName, array $configuration)
    {
  
        return [
            'titre' => Configuration::get('TITRE'),
            'soustitre' => Configuration::get('SOUSTITRE'),
            'contenu' => Configuration::get('CONTENU'),
            // pour V2
            // 'image' => Configuration::get('IMAGE')
        ];
    }
}