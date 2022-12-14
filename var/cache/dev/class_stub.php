<?php

class Customer extends CustomerCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheApc extends CacheApcCore {};
class CacheMemcached extends CacheMemcachedCore {};
abstract class Cache extends CacheCore {};
class Employee extends EmployeeCore {};
class Manufacturer extends ManufacturerCore {};
class Carrier extends CarrierCore {};
class Connection extends ConnectionCore {};
class ProductDownload extends ProductDownloadCore {};
class Access extends AccessCore {};
class RequestSql extends RequestSqlCore {};
class AttributeGroup extends AttributeGroupCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class JsMinifier extends JsMinifierCore {};
class StylesheetManager extends StylesheetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CssMinifier extends CssMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class CccReducer extends CccReducerCore {};
class DbMySQLi extends DbMySQLiCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbPDO extends DbPDOCore {};
class FileUploader extends FileUploaderCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class DateRange extends DateRangeCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class Link extends LinkCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class AddressValidator extends AddressValidatorCore {};
class CheckoutSession extends CheckoutSessionCore {};
class FileLogger extends FileLoggerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class Risk extends RiskCore {};
class Image extends ImageCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class SpecificPrice extends SpecificPriceCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Translate extends TranslateCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class CustomerSession extends CustomerSessionCore {};
class Guest extends GuestCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class Configuration extends ConfigurationCore {};
class Mail extends MailCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class Uploader extends UploaderCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
abstract class Controller extends ControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class LocalizationPack extends LocalizationPackCore {};
class Hook extends HookCore {};
class Country extends CountryCore {};
class SupplierAddress extends SupplierAddressCore {};
class FeatureValue extends FeatureValueCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class QuickAccess extends QuickAccessCore {};
class Cart extends CartCore {};
class Context extends ContextCore {};
class Profile extends ProfileCore {};
class Supplier extends SupplierCore {};
class Combination extends CombinationCore {};
class Delivery extends DeliveryCore {};
class Referrer extends ReferrerCore {};
class Windows extends WindowsCore {};
class CMS extends CMSCore {};
class CMSRole extends CMSRoleCore {};
class AddressFormat extends AddressFormatCore {};
class Meta extends MetaCore {};
class Message extends MessageCore {};
class CMSCategory extends CMSCategoryCore {};
class Cookie extends CookieCore {};
class Gender extends GenderCore {};
class Feature extends FeatureCore {};
class CustomerThread extends CustomerThreadCore {};
class ProductSupplier extends ProductSupplierCore {};
class CustomerAddress extends CustomerAddressCore {};
class Product extends ProductCore {};
class Address extends AddressCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Curve extends CurveCore {};
class Pack extends PackCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class ThemeLang extends ThemeLangCore {};
class RiskLang extends RiskLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class ProfileLang extends ProfileLangCore {};
class CarrierLang extends CarrierLangCore {};
class MetaLang extends MetaLangCore {};
class GenderLang extends GenderLangCore {};
class AttributeLang extends AttributeLangCore {};
class TabLang extends TabLangCore {};
class GroupLang extends GroupLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class FeatureLang extends FeatureLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class ContactLang extends ContactLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class CategoryLang extends CategoryLangCore {};
class DataLang extends DataLangCore {};
class Validate extends ValidateCore {};
class Upgrader extends UpgraderCore {};
class CartRule extends CartRuleCore {};
class Currency extends CurrencyCore {};
class Page extends PageCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class Module extends ModuleCore {};
class Media extends MediaCore {};
class ProductSale extends ProductSaleCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class FormField extends FormFieldCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class AddressChecksum extends AddressChecksumCore {};
class Attachment extends AttachmentCore {};
class Group extends GroupCore {};
class SearchEngine extends SearchEngineCore {};
class LinkProxy extends LinkProxyCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class OrderDetail extends OrderDetailCore {};
class OrderReturn extends OrderReturnCore {};
class OrderSlip extends OrderSlipCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderMessage extends OrderMessageCore {};
class OrderDiscount extends OrderDiscountCore {};
class Order extends OrderCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderState extends OrderStateCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Attribute extends AttributeCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class State extends StateCore {};
class Store extends StoreCore {};
abstract class ObjectModel extends ObjectModelCore {};
class EmployeeSession extends EmployeeSessionCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockMvtWS extends StockMvtWSCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockMvt extends StockMvtCore {};
class SupplyOrder extends SupplyOrderCore {};
class Stock extends StockCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockManager extends StockManagerCore {};
class StockMvtReason extends StockMvtReasonCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class Alias extends AliasCore {};
class CSV extends CSVCore {};
class Search extends SearchCore {};
class CustomizationField extends CustomizationFieldCore {};
class ImageType extends ImageTypeCore {};
class Zone extends ZoneCore {};
class Language extends LanguageCore {};
class Tab extends TabCore {};
class Contact extends ContactCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class Category extends CategoryCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class Tax extends TaxCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxRule extends TaxRuleCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class CustomerMessage extends CustomerMessageCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperShop extends HelperShopCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperForm extends HelperFormCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperList extends HelperListCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperKpi extends HelperKpiCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperView extends HelperViewCore {};
class Helper extends HelperCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class Tools extends ToolsCore {};
class Dispatcher extends DispatcherCore {};
class ImageManager extends ImageManagerCore {};
class GroupReduction extends GroupReductionCore {};
class Notification extends NotificationCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Customization extends CustomizationCore {};
class Chart extends ChartCore {};
class Tag extends TagCore {};
class PhpEncryption extends PhpEncryptionCore {};
