<?php

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
 
    if (!defined('_PS_VERSION_')) {
        exit;
    }
    class Kf_Story extends Module implements WidgetInterface
{
  public function __construct()
{
    $this->name = 'kf_story';
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


    $this->displayName = $this->trans('Module pour contenu entreprise',[], 'Modules.KfStory.Admin');
    $this->description = $this->trans('Module présentation d\'entreprise etoffé ',[], 'Modules.KfStory.Admin');

    $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');

    $this->templateFile = 'module:kf_story/views/templates/hook/kf_story.tpl';

}


public function install()
{
    return parent::install() && $this->registerHook('displayHeader');

 
    return true;
}
 
public function uninstall()
{
    return parent::uninstall()  && $this->unregisterHook('displayHeader');

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

            if (isset($_FILES['IMAGE1']) && isset($_FILES['IMAGE1']['tmp_name']) && !empty($_FILES['IMAGE1']['tmp_name'])) {
                $path = _PS_MODULE_DIR_ . 'kf_story/images/';

                if (!move_uploaded_file($_FILES['IMAGE1']['tmp_name'], $path . $_FILES['IMAGE1']['name'])) {
                    return $this->displayError('Erreur lors de l\'enregistrement de l\'image');
                }
                Configuration::updateValue('IMAGE1', $_FILES['IMAGE1']['name']);
            }
            if (isset($_FILES['IMAGE2']) && isset($_FILES['IMAGE2']['tmp_name']) && !empty($_FILES['IMAGE2']['tmp_name'])) {
                $path = _PS_MODULE_DIR_ . 'kf_story/images/';

                if (!move_uploaded_file($_FILES['IMAGE2']['tmp_name'], $path . $_FILES['IMAGE2']['name'])) {
                    return $this->displayError('Erreur lors de l\'enregistrement de l\'image');
                }
                Configuration::updateValue('IMAGE2', $_FILES['IMAGE2']['name']);
            }
            if (isset($_FILES['IMAGE3']) && isset($_FILES['IMAGE3']['tmp_name']) && !empty($_FILES['IMAGE3']['tmp_name'])) {
                $path = _PS_MODULE_DIR_ . 'kf_story/images/';

                if (!move_uploaded_file($_FILES['IMAGE3']['tmp_name'], $path . $_FILES['IMAGE3']['name'])) {
                    return $this->displayError('Erreur lors de l\'enregistrement de l\'image');
                }
                Configuration::updateValue('IMAGE3', $_FILES['IMAGE3']['name']);
            }
                
          
            Configuration::updateValue('TITRE1', Tools::getValue('TITRE1'));
            Configuration::updateValue('TITRE2', Tools::getValue('TITRE2'));
            Configuration::updateValue('TITRE3', Tools::getValue('TITRE3'));
            Configuration::updateValue('SOUSTITRE1', Tools::getValue('SOUSTITRE1'));
            Configuration::updateValue('SOUSTITRE2', Tools::getValue('SOUSTITRE2'));
            Configuration::updateValue('SOUSTITRE3', Tools::getValue('SOUSTITRE3'));
            Configuration::updateValue('CONTENU1', Tools::getValue('CONTENU1'));
            Configuration::updateValue('CONTENU2', Tools::getValue('CONTENU2'));
            Configuration::updateValue('CONTENU3', Tools::getValue('CONTENU3'));
            Configuration::updateValue('IMAGEDESC1', Tools::getValue('IMAGEDESC1'));
            Configuration::updateValue('IMAGEDESC2', Tools::getValue('IMAGEDESC2'));
            Configuration::updateValue('IMAGEDESC3', Tools::getValue('IMAGEDESC3'));
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
                    'title' => $this->trans('Contenu page entreprise', [], 'Modules.KfStory.Admin'),
                    'icon' => 'icon-cogs',
                ],
                'input' => [
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre Titre pour le premier paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'TITRE1',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre sous-titre pour le premier paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'SOUSTITRE1',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre premier paragraphe ', [], 'Modules.KfStory.Admin'),
                        'name' => 'CONTENU1',
                        'required' => true,
                        // 'lang' => true
                    ],
              
                    [
                        'type'=>'file',
                        // 'autoload_rte' => true,
                        'label' => $this->trans('Image Uploadée'),
                        'name' => 'IMAGE1',
                        'desc' => $this->trans(' Uploadez une image pour illustrer votre contenu du premier paragraphe ', [], 'Modules.KfStory.Admin'),

                        'display_image' => true,
                        
                    ], 
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Description de l\'image', [], 'Modules.KfStory.Admin'),
                        'name' => 'IMAGEDESC1',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre Titre pour le second paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'TITRE2',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre sous-titre pour le second paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'SOUSTITRE2',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre second paragraphe ', [], 'Modules.KfStory.Admin'),
                        'name' => 'CONTENU2',
                        'required' => true,
                        // 'lang' => true
                    ],
                
                    [
                        'type'=>'file',
                        // 'autoload_rte' => true,
                        'label' => $this->trans('Image Uploadée'),
                        'name' => 'IMAGE2',
                        'desc' => $this->trans(' Uploadez une image pour illustrer votre contenu du second paragraphe ', [], 'Modules.KfStory.Admin'),

                        'display_image' => true,
                        
                    ], 
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Description de l\'image du second paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'IMAGEDESC2',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre Titre pour le troisième paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'TITRE3',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre sous-titre pour le troisième paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'SOUSTITRE3',
                        'required' => true,
                        // 'lang' => true
                    ],
                    [
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'label' => $this->trans('Votre troisième paragraphe ', [], 'Modules.KfStory.Admin'),
                        'name' => 'CONTENU3',
                        'required' => true,
                        // 'lang' => true
                    ],

                    [
                        'type'=>'file',
                        // 'autoload_rte' => true,
                        'label' => $this->trans('Image Uploadée'),
                        'name' => 'IMAGE3',
                        'desc' => $this->trans(' Uploadez une image pour illustrer votre contenu du troisième paragraphe ', [], 'Modules.KfStory.Admin'),

                        'display_image' => true,
                        
                    ], 
                    [
                        'type' => 'text',
                        'autoload_rte' => true,
                        'label' => $this->trans('Description de l\'image du troisième paragraphe', [], 'Modules.KfStory.Admin'),
                        'name' => 'IMAGEDESC3',
                        'required' => true,
                        // 'lang' => true
                    ],
    
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
     //si gestion des lang   
        // $res = [];
        // foreach (Language::getLanguages(false) as $lang) {
        //     $res['TITRE'][$lang['id_lang']] = Tools::getValue('TITRE_'.$lang['id_lang'], Configuration::get('TITRE_'.$lang['id_lang']));
        //     $res['SOUSTITRE'][$lang['id_lang']] = Tools::getValue('SOUSTITRE_'.$lang['id_lang'], Configuration::get('SOUSTITRE_'.$lang['id_lang']));
        //     $res['CONTENU'][$lang['id_lang']] = Tools::getValue('CONTENU_'.$lang['id_lang'], Configuration::get('CONTENU_'.$lang['id_lang']));

        // }
        // return $res;
            return[               
                 'TITRE1'=>Tools::getValue('TITRE1',Configuration::get('TITRE1')),
                 'TITRE2'=>Tools::getValue('TITRE2',Configuration::get('TITRE2')),
                 'TITRE3'=>Tools::getValue('TITRE3',Configuration::get('TITRE3')),
                 'SOUSTITRE1'=>Tools::getValue('SOUSTITRE1',Configuration::get('SOUSTITRE1')),
                 'SOUSTITRE2'=>Tools::getValue('SOUSTITRE2',Configuration::get('SOUSTITRE2')),
                 'SOUSTITRE3'=>Tools::getValue('SOUSTITRE3',Configuration::get('SOUSTITRE3')),
                 'CONTENU1'=>Tools::getValue('CONTENU1',Configuration::get('CONTENU1')),
                 'CONTENU2'=>Tools::getValue('CONTENU2',Configuration::get('CONTENU2')),
                 'CONTENU3'=>Tools::getValue('CONTENU3',Configuration::get('CONTENU3')),

                 'IMAGE1'=>Tools::getValue('IMAGE1',Configuration::get('IMAGE1')),
                 'IMAGE2'=>Tools::getValue('IMAGE2',Configuration::get('IMAGE2')),
                 'IMAGE3'=>Tools::getValue('IMAGE3',Configuration::get('IMAGE3')),

                 'IMAGEDESC1'=>Tools::getValue('IMAGEDESC1',Configuration::get('IMAGEDESC1')),
                 'IMAGEDESC2'=>Tools::getValue('IMAGEDESC2',Configuration::get('IMAGEDESC2')),
                 'IMAGEDESC3'=>Tools::getValue('IMAGEDESC3',Configuration::get('IMAGEDESC3')),
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
        $image1 = Configuration::get('IMAGE1', $this->context->language->id);
        $imgDir1 = _PS_MODULE_DIR_ . $this->name . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $image1;

        if ($image1 && file_exists($imgDir1)) {
            $sizes = getimagesize($imgDir1);

            $this->smarty->assign([
                'image' => $this->context->link->protocol_content . Tools::getMediaServer($image1) . $this->_path . 'images/' . $image1,
    
            ]);
        }
        $image2 = Configuration::get('IMAGE2', $this->context->language->id);
        $imgDir2 = _PS_MODULE_DIR_ . $this->name . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $image2;

        if ($image2 && file_exists($imgDir2)) {
            $sizes = getimagesize($imgDir2);

            $this->smarty->assign([
                'image' => $this->context->link->protocol_content . Tools::getMediaServer($image2) . $this->_path . 'images/' . $image2,
    
            ]);
        }
        $image3 = Configuration::get('IMAGE3', $this->context->language->id);
        $imgDir3 = _PS_MODULE_DIR_ . $this->name . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $image3;

        if ($image3 && file_exists($imgDir3)) {
            $sizes = getimagesize($imgDir3);

            $this->smarty->assign([
                'image' => $this->context->link->protocol_content . Tools::getMediaServer($image3) . $this->_path . 'images/' . $image3,
    
            ]);
        }

  
        return [
            'titre1' => Configuration::get('TITRE1'),
            'titre2' => Configuration::get('TITRE2'),
            'titre3' => Configuration::get('TITRE3'),
            'soustitre1' => Configuration::get('SOUSTITRE1'),
            'soustitre2' => Configuration::get('SOUSTITRE2'),
            'soustitre3' => Configuration::get('SOUSTITRE3'),
            'contenu1' => Configuration::get('CONTENU1'),
            'contenu2' => Configuration::get('CONTENU2'),
            'contenu3' => Configuration::get('CONTENU3'),
            'imagedesc1' => Configuration::get('IMAGEDESC1'),
            'imagedesc2' => Configuration::get('IMAGEDESC2'),
            'imagedesc3' => Configuration::get('IMAGEDESC3'),
            
        ];
    }


}