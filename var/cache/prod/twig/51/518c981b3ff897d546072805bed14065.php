<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__0d5a7be231f788c1032c8ebf29eb565d */
class __TwigTemplate_d15c3cfece43c56c33023bc593825b00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Thème et logo > Thème • Amekan</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '885b03e0207a9620f3762653ae17ba98';
    var token_admin_orders = tokenAdminOrders = 'd981f422c39cd08de4c4c4bd6bd13925';
    var token_admin_customers = 'cfb24983c7c4875b71c4a5a12ddf0eb9';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '2542d61e983d7337921856c126c38184';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = 'faaeced569ae5cbf9cccef2007da9cf0';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '2';
    var admin_modules_link = '/cses0ytzga1x2cqe/index.php/improve/modules/manage?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI';
    var admin_notification_get_link = '/cses0ytzga1x2cqe/index.php/common/notifications?_token=2Xn2Grly4xXxJbFAs";
        // line 42
        echo "uIZBUBheVqBK-hsavt1bPQ1gnI';
    var admin_notification_push_link = adminNotificationPushLink = '/cses0ytzga1x2cqe/index.php/common/notifications/ack?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/cses0ytzga1x2cqe/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/cses0ytzga1x2cqe/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cses0ytzga1x2cqe/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/cses0ytzga1x2cqe\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/cses0ytzga1x2cqe\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"Dollar des \\u00c9tats-Unis\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\"";
        // line 69
        echo ",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/cses0ytzga1x2cqe/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/cses0ytzga1x2cqe/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cses0ytzga1x2cqe/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/cses0ytzga1x2cqe/index.php/common/notifications?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/cses0ytzga1x2cqe/index.php\"  data-token=\"2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminDashboard&amp;token=fc8d72aed1891430618cb4ab8d8ac4c4\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e937f8dd61f9b22882d6f96ed6fcf091\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/improve/modules/manage?token=9a7161fb0919446014e3019cb3934ff6\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/catalog/categories/new?token=9a7161fb0919446014e3019cb3934ff6\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/catalog/products/new?token=9a7161fb0919446014e3019cb3934ff6\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"h";
        // line 140
        echo "ttp://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f05907d76997174c39c0649d4716cef0\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/orders?token=9a7161fb0919446014e3019cb3934ff6\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"93\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/import?-hsavt1bPQ1gnI\"
        data-post-link=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminQuickAccesses&token=f8bde86993f28984ecc26c00145d76da\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Theme &amp; Logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminQuickAccesses&token=f8bde86993f28984ecc26c00145d76da\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/cses0ytzga1x2cqe/index.php?controller=AdminSearch&amp;token=66d5c1f48eb60bcc73b0c75b4d71cc5e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" va";
        // line 179
        echo "lue=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-i";
        // line 193
        echo "cons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e937f8dd61f9b22882d6f96ed6fcf091\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/improve/modules/manage?token=9a7161fb0919446014e3019cb3934ff6\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/catalog/categories/new?token=9a7161fb0919446014e3019cb3934ff6\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/catalog/products/new?token=9a7161fb0919446014e3019cb3934ff6\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f05907d76997174c39c0649d4716cef0\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php/sell/orders?token=9a7161fb0919446014e3019cb3934ff6\"
             data-item=\"Orders\"
    >Or";
        // line 235
        echo "ders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"142\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/import?-hsavt1bPQ1gnI\"
      data-post-link=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminQuickAccesses&token=f8bde86993f28984ecc26c00145d76da\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Theme &amp; Logo - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminQuickAccesses&token=f8bde86993f28984ecc26c00145d76da\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://amekan.fr/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"";
        // line 283
        echo "nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fc62862246546bd07db14a7dc361bbdd\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
    ";
        // line 332
        echo "        </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://amekan.fr/img/pr/default.jpg\" alt=\"Site\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Site</span>
      </div>

      <a class=\"dropdown-item";
        // line 383
        echo " employee-link profile-link\" href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/employees/1/edit?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminLogin&amp;logout=1&amp;token=563a478e50423383c426fb4848ccfcbe\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/cses0ytzga1x2cqe/index.php/configure/advanced/employees/toggle-navigation?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminDashboard&amp;token=fc8d72aed1891430618cb4ab8d8ac4c4\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminDashboard&amp;token=fc8d72aed1891430618cb4ab8d8ac4c4\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span ";
        // line 432
        echo "class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/sell/orders/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/orders/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/orders/invoices/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Invoices
                                </a>
                              </li>

                                 ";
        // line 466
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/orders/credit-slips/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/orders/delivery-slips/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCarts&amp;token=fc62862246546bd07db14a7dc361bbdd\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/sell/catalog/products?_token=2X";
        // line 497
        echo "n2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/catalog/products?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/catalog/categories?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/catalog/monitoring/?_token=2Xn2Gr";
        // line 527
        echo "ly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminAttributesGroups&amp;token=deed4d8db4da4adc160780bcdfd260f8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/catalog/brands/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/attachments/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=";
        // line 558
        echo "\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCartRules&amp;token=f05907d76997174c39c0649d4716cef0\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/stocks/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/sell/customers/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                        ";
        // line 590
        echo "                                    
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/customers/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/addresses/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCustomerThreads&amp;token=2542d61e983d7337921856c126c38184\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"";
        // line 620
        echo "collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCustomerThreads&amp;token=2542d61e983d7337921856c126c38184\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/sell/customer-service/order-messages/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminReturn&amp;token=7f553efb0d0145848c6533800f48a1c6\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
  ";
        // line 652
        echo "                  <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminStats&amp;token=e937f8dd61f9b22882d6f96ed6fcf091\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/improve/modules/manage?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                       ";
        // line 689
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/modules/manage?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" clas";
        // line 716
        echo "s=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/mail_theme/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/cms-pages/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/modules/positions/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a hre";
        // line 748
        echo "f=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminImages&amp;token=daa7f6303af335142490a23b11d77c48\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/modules/link-widget/list?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCarriers&amp;token=5d7b1b0093021735e02394065183d3c2\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
          ";
        // line 780
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminCarriers&amp;token=5d7b1b0093021735e02394065183d3c2\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/shipping/preferences/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/improve/payment/payment_methods?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                             ";
        // line 810
        echo "         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/payment/payment_methods?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/payment/preferences?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/improve/international/localization/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
       ";
        // line 842
        echo "                                       <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/international/localization/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/international/zones/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/improve/international/taxes/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/cses0ytzga1x2cqe";
        // line 871
        echo "/index.php/improve/international/translations/settings?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/preferences/preferences?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/preferences/preferences?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" cla";
        // line 906
        echo "ss=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/order-preferences/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/product-preferences/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/customer-preferences/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-";
        // line 937
        echo "AdminParentStores\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/contacts/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/shop/seo-urls/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminSearchConf&amp;token=f9305962d6813f2c32875751065a0832\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/system-information/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
  ";
        // line 968
        echo "                    Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/system-information/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/performance/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/administration/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Administration
                       ";
        // line 996
        echo "         </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/emails/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/import/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/employees/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/sql-requests/?_";
        // line 1027
        echo "token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/logs/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/webservice-keys/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/feature-flags/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                            ";
        // line 1057
        echo "                                
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/cses0ytzga1x2cqe/index.php/configure/advanced/security/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/import?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/export?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\"                  title=\"Exporter le thème actif\"                >
                  <i class=\"material-icons\">clou";
        // line 1104
        echo "d_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminThemes?version=8.0.4&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminPsThemeCustoConfiguration&token=d954c8689db5859cc01bde2ef7202bd8\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-subme";
        // line 1130
        echo "nu=\"126\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminPsThemeCustoAdvanced&token=f7d5138b59d5a41878ed0939b2604946\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"127\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container c";
        // line 1152
        echo "ollapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/import?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\"              title=\"Ajouter un thème\"            >
              Ajouter un thème
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/cses0ytzga1x2cqe/index.php/improve/design/themes/export?_token=2Xn2Grly4xXxJbFAsuIZBUBheVqBK-hsavt1bPQ1gnI\"              title=\"Exporter le thème actif\"            >
              Exporter le thème actif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/fr/doc/AdminThemes?version=8.0.4&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1186
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://amekan.fr/cses0ytzga1x2cqe/index.php?controller=AdminDashboard&amp;token=fc8d72aed1891430618cb4ab8d8ac4c4\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1220
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1186
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1220
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__0d5a7be231f788c1032c8ebf29eb565d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1385 => 1220,  1364 => 1186,  1353 => 102,  1344 => 1220,  1304 => 1186,  1268 => 1152,  1244 => 1130,  1216 => 1104,  1167 => 1057,  1135 => 1027,  1102 => 996,  1072 => 968,  1039 => 937,  1006 => 906,  969 => 871,  938 => 842,  904 => 810,  872 => 780,  838 => 748,  804 => 716,  775 => 689,  736 => 652,  702 => 620,  670 => 590,  636 => 558,  603 => 527,  571 => 497,  538 => 466,  502 => 432,  451 => 383,  398 => 332,  347 => 283,  297 => 235,  253 => 193,  237 => 179,  196 => 140,  153 => 102,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0d5a7be231f788c1032c8ebf29eb565d", "");
    }
}
