<?php
 
    if (!defined('_PS_VERSION_')) {
        exit;
    }
    class Kf_Presentation extends Module
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

    $this->displayName = $this->l('Module Presentation');
    $this->description = $this->l('Module Presentation d\'entreprise etoffée');

    $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');

    if (!Configuration::get('KF_PRESENTATION_PAGENAME')) {
        $this->warning = $this->l('Aucun nom fourni');
    }
}
public function install()
{
    if (Shop::isFeatureActive()) {
        Shop::setContext(Shop::CONTEXT_ALL);
    }
 
    if (!parent::install() ||
        !$this->registerHook('DisplayLeftColumn') ||
        !$this->registerHook('DisplayHeader') ||
        !$this->registerHook('DisplayHome') ||
        !Configuration::updateValue('KF_PRESENTATION_PAGENAME', 'Mentions légales')
    ) {
        return false;
    }
 
    return true;
}
 
public function uninstall()
{
    if (!parent::uninstall() ||
    !Configuration::deleteByName('KF_PRESENTATION_PAGENAME')
) {
    return false;
}

return true;}

public function getContent()
{
    $output = null;
 
    if (Tools::isSubmit('btnSubmit')) {
        $pageName = strval(Tools::getValue('KF_PRESENTATION_PAGENAME'));
 
        if (
            !$pageName||
            empty($pageName)
        ) {
            $output .= $this->displayError($this->l('Invalid Configuration value'));
        } else {
            Configuration::updateValue('KF_PRESENTATION_PAGENAME', $pageName);
            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }
    }
 
    return $output.$this->displayForm();
}
public function displayForm()
{
    // Récupère la langue par défaut
    $defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');
  
    // Initialise les champs du formulaire dans un tableau
    $form = array(
        'form' => array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Configuration value'),
                    'name' => 'KF_PRESENTATION_PAGENAME',
                    'size' => 20,
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'name'  => 'btnSubmit'
            )
        ),
    );
  
    $helper = new HelperForm();
  
    // Module, token et currentIndex
    $helper->module = $this;
    $helper->name_controller = $this->name;
    $helper->token = Tools::getAdminTokenLite('AdminModules');
    $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
  
    // Langue
    $helper->default_form_language = $defaultLang;   
  
    // Charge la valeur de KF_PRESENTATION_PAGENAME depuis la base
    $helper->fields_value['KF_PRESENTATION_PAGENAME'] = Configuration::get('KF_PRESENTATION_PAGENAME');
  
    return $helper->generateForm(array($form));
}

public function hookDisplayLeftColumn($params)
{
    $this->context->smarty->assign([
        'kf_page_name' => Configuration::get('KF_PRESENTATION_PAGENAME'),
        'kf_page_link' => $this->context->link->getModuleLink('kf_presentation', 'display')
      ]);
 
      return $this->display(__FILE__, 'kf_presentation.tpl');
}
public function hookDisplayHome($params)
{
    $this->context->smarty->assign([
        'kf_page_name' => Configuration::get('KF_PRESENTATION_PAGENAME'),
        'kf_page_link' => $this->context->link->getModuleLink('kf_presentation', 'display')
      ]);
 
      return $this->display(__FILE__, 'kf_presentation.tpl');
}
public function hookDisplayHeader(){
    $this->context->controller->registerStylesheet(
                'kf_presentation',
                $this->_path.'views/css/kf_presentation.css',
                ['server' => 'remote', 'position' => 'head', 'priority' => 150]
            );
}


}