<div class="page-header">
    <div id="ves-header">
<div class="wrapper">
<!-- Top bar -->
<div class="panel page-topbar clearfix sticky-item">
<div class="container">
    <div class="header-top-wrap">
        <div class="ves-inner">
            <a class="action skip contentarea" href="#contentarea"><span>Skip to Content</span></a>

                                
            <div class="header-left hidden-xs hidden-sm">
                <div class="setting-wrapper pull-left">
                                            </div>
                                            <div class="header-links-wrapper pull-left">
                        <ul class="link-account-custom"><li><a href="https://galantus.dn.ua/customer/account/create/">Регистрация</a></li><li class="authorization-link" data-label="или">
<a href="https://galantus.dn.ua/customer/account/login/">
Войти    </a>
</li>
</ul>								




                    </div>
                                                            </div>
            <div class="minicart-warp sticky-item">
            <div data-block="minicart" class="minicart-wrapper">
<a class="action showcart" href="https://galantus.dn.ua/checkout/cart/" data-bind="scope:'minicart_content'">
<i class="fa "></i>        <span class="w-item">
<span class="cart-title">Моя корзина</span>
<span class="counter total-qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
    <span class="counter-number"><!-- ko text: getCartParam('summary_count') -->0<!-- /ko --><span class="hidden"> Items - </span></span>
    <span class="counter-label"> 
    <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
    </span>
    <span class="counter-price hidden" data-bind="attr: { 'data-label': $t('Excl. Tax') }, html: getCartParam('subtotal')" data-label="Без налога"><span class="price">0,00&nbsp;₴</span></span>
</span>
</span>
</a>
    


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-1" style="display: none;"><div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1" style="display: block;">
    <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
        <!-- ko template: getTemplate() -->
<div class="block-title">
<strong>
<span class="text"><!-- ko i18n: 'My Cart' --><span>Моя корзина</span><!-- /ko --></span>
<span class="qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
               attr: { title: $t('Items in Cart') }" title="шт. в корзине">
    <!-- ko text: getCartParam('summary_count') -->0<!-- /ko -->
</span>
</strong>
</div>

<div class="block-content">
<button type="button" id="btn-minicart-close" class="action close" data-action="close" data-bind="attr: { title: $t('Close') }" title="Закрыть">
<span><!-- ko i18n: 'Close' --><span>Закрыть</span><!-- /ko --></span>
</button>

<!-- ko if: getCartParam('summary_count') --><!-- /ko -->

<!-- ko if: getCartParam('summary_count') --><!-- /ko -->

<!-- ko ifnot: getCartParam('summary_count') -->
<strong class="subtitle empty" data-bind="visible: closeSidebar()">
    <!-- ko i18n: 'You have no items in your shopping cart.' --><span>Ваша корзина покупок пуста.</span><!-- /ko -->
</strong>
<!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
<!-- /ko -->

<!-- ko if: getCartParam('summary_count') --><!-- /ko -->

<div id="minicart-widgets" class="minicart-widgets">
<!-- ko foreach: getRegion('promotion') -->
    <!-- ko template: getTemplate() -->
<!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
<!-- /ko -->
<!-- /ko -->
</div>
</div>
<!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
<!-- /ko -->
    </div>
</div></div></div>


            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 header-bottom top-search">
                                    <div class="search-wrapper pull-right">
                    <div class="dropdown-toggle hidden-md hidden-lg" data-toggle="dropdown">
                        <i class="fa fa-search">&nbsp;</i>
                    </div>
                    <div class="search-content" role="menu">
                        <div class="block block-search">
<div class="block block-title"><strong>Поиск</strong></div>
<div class="block block-content">
<form class="form minisearch" id="search_mini_form" action="https://galantus.dn.ua/catalogsearch/result/" method="get">
<div class="field search">
<label class="label" for="search" data-role="minisearch-label">
  <span>Поиск</span>
</label>
<div class="control">
  <input id="search" type="text" name="q" value="" placeholder="Поиск" class="input-text" maxlength="128" role="combobox" aria-expanded="false" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">
<div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
      </div>
</div>
<div class="actions">
<button type="submit" title="Поиск" class="action search" disabled="">
<span class="hidden-xs">search</span>      </button>
</div>
</form>
</div>
</div>
                    </div>
                </div>
                            </div>

    </div>
</div>
</div>
<!-- header content -->
<div class="header-content clearfix">
<div class="ves-inner">
    <div class="container">
        <div class="header-content-inner">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo-wrapper sticky-item">
                        <span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>
<strong class="logo">
<img src="https://galantus.dn.ua/media/logo/stores/1/galantus-logo.jpg" alt="Магазин цветов ГАЛАНТУС" height="100">
</strong>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="row our-services-wrap">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 our-services-item">
<div class="our-services our-services-1">
    <div class="pull-left our-services-icon"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/online-support.png" alt=""></div>
    <div class="pull-left our-services-content">
        <h4 class="services-title">+380509601030</h4>
        <p>Всегда на связи</p>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 our-services-item">
<div class="our-services our-services-2">
    <div class="pull-left our-services-icon"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/potted-plant.png" alt=""></div>
    <div class="pull-left our-services-content">
        <h4 class="services-title">Быстро. Удобно.</h4>
        <p>Более 100 видов различных цветов</p>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 our-services-item">
<div class="our-services our-services-3">
    <div class="pull-left our-services-icon"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/in-transit.png" alt=""></div>
    <div class="pull-left our-services-content">
        <h4 class="services-title">Доставка</h4>
        <p><span>по Краматорску и ближайшим городам</span></p>
    </div>
</div>
</div>
</div>						</div>
            </div>
                            </div>
    </div>
</div>
</div>

<div class="header-bottom">
 <div class="container">
     <div class="header-bottom-inner">
        <!-- Menu top -->
        <div class="ves-menutop clearfix sticky-item">
            <div class="row">
                
                <div class="col-12">
                    <div class="ves-inner">
                        <div class="hidden-xs hidden-sm">
                            <div><div class="block ves-menu " id="menu-top15845337551273944385-menu">
        <ul id="menu-top15845337551273944385" class="ves-megamenu menu-hover ves-horizontal nav-mobile" data-disable-bellow="1">
<li id="vesitem-3098215845337551307163332" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/cvety" target="_parent" class=" nav-anchor"><span>Цветы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-menu" style="width:100%;"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level1 nav-dropdown ves-column4"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-0 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza" target="_parent" class=" nav-anchor subitems-group"><span>Роза</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level2 nav-dropdown ves-column1"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-3 mega-col-level-2 col-xs-12"><div class="nav-item level2 nav-0 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-1 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-2 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div></div></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/roza"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/8-vday-21roses-1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-4 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/al-stromerija" target="_parent" class=" nav-anchor subitems-group"><span>Альстромерия</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/al-stromerija"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/_-_-_-_-_.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-1 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/hrizantema" target="_blank" class=" nav-anchor subitems-group"><span>Хризантема</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/hrizantema"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/020002________.jpeg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-5 submenu-alignright subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/irisy" target="_parent" class=" nav-anchor subitems-group"><span>Ирисы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/irisy"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/buket-iz-irisov-i-tyulpanov.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-2 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jeustoma" target="_blank" class=" nav-anchor subitems-group"><span>Эустома</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jeustoma"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/c1bf7996adb5267ed4558f9325ab95e1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-6 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jekzotika" target="_blank" class=" nav-anchor subitems-group"><span>Экзотика</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jekzotika"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/svetly-buket-iz-ekzotiki-razmer-s-030074-448x448.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/tjul-pan" target="_parent" class=" nav-anchor subitems-group"><span>Тюльпан</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/tjul-pan"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/51_tyulpam.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-7 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/gerbera" target="_self" class=" nav-anchor subitems-group"><span>Гербера</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/gerbera"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/penelopa.jpg" alt="" width="300" height="300"></a></p></div></div></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza" target="_parent" class=" nav-anchor subitems-group"><span>Роза</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level2 nav-dropdown ves-column1"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-3 mega-col-level-2 col-xs-12"><div class="nav-item level2 nav-0 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-1 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-2 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div></div></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/roza"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/8-vday-21roses-1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/hrizantema" target="_blank" class=" nav-anchor subitems-group"><span>Хризантема</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/hrizantema"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/020002________.jpeg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jeustoma" target="_blank" class=" nav-anchor subitems-group"><span>Эустома</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jeustoma"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/c1bf7996adb5267ed4558f9325ab95e1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/tjul-pan" target="_parent" class=" nav-anchor subitems-group"><span>Тюльпан</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/tjul-pan"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/51_tyulpam.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/al-stromerija" target="_parent" class=" nav-anchor subitems-group"><span>Альстромерия</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/al-stromerija"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/_-_-_-_-_.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignright subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/irisy" target="_parent" class=" nav-anchor subitems-group"><span>Ирисы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/irisy"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/buket-iz-irisov-i-tyulpanov.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jekzotika" target="_blank" class=" nav-anchor subitems-group"><span>Экзотика</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jekzotika"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/svetly-buket-iz-ekzotiki-razmer-s-030074-448x448.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/gerbera" target="_self" class=" nav-anchor subitems-group"><span>Гербера</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/gerbera"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/penelopa.jpg" alt="" width="300" height="300"></a></p></div></div></div></div></div></div></div></div></li><li id="vesitem-3098515845337551239034967" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top " data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii" target="_parent" class=" nav-anchor"><span>Композиции</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-menu" style="width:100%;"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level1 nav-dropdown ves-column3"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-2 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-0 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii/cvety-i-sladosti-v-korobkah" target="_parent" class=" nav-anchor subitems-group"><span>Цветы и Сладости в коробках</span></a></div></div><div class="mega-col mega-col-2 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-1 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii/kompozicii-i-korziny-iz-cvetov" target="_parent" class=" nav-anchor subitems-group"><span>Композиции и Корзины из цветов</span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level1 nav-2 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii/cvety-i-sladosti-v-korobkah" target="_parent" class=" nav-anchor subitems-group"><span>Цветы и Сладости в коробках</span></a></div><div class="nav-item level1 nav-2 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii/kompozicii-i-korziny-iz-cvetov" target="_parent" class=" nav-anchor subitems-group"><span>Композиции и Корзины из цветов</span></a></div></div></div></div></div></div></li><li id="vesitem-30986158453375510423355" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/sbornie-buketi" target="_parent" class=" nav-anchor"><span>Букеты</span></a></li><li id="vesitem-309871584533755162386673" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/podarki" target="_parent" class=" nav-anchor"><span>Подарки</span></a></li><li id="vesitem-3098815845337551471236471" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/gorshochnye-cvety" target="_self" class=" nav-anchor"><span>Горшочные растения</span></a></li><li id="vesitem-309891584533755241305756" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/otkrytki" target="_parent" class=" nav-anchor"><span>Открытки</span></a></li><li id="vesitem-309901584533755771975399" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top " data-disable-bellow="1"><a href="https://galantus.dn.ua/uslugi-dekora" target="_parent" class=" nav-anchor"><span>Услуги Декора</span></a></li><li id="vesitem-3099115845337551027948825" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/svadba" target="_parent" class=" nav-anchor"><span>Свадьба</span></a></li><li id="vesitem-309921584533755860071237" class=" nav-item level0 nav-0 submenu-alignright subhover  dropdown level-top "><a href="https://galantus.dn.ua/contact" target="_parent" class=" nav-anchor"><span>О Нас</span></a></li><li id="vesitem-3099315845337551808560639" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/dostavka-i-oplata" target="_parent" class=" nav-anchor"><span>Информация для клиентов</span></a></li>	</ul>

</div>


</div>								</div>
                        <div class="hidden-lg hidden-md">
                            <div class="sections nav-sections">
<div class="section-items nav-sections-items" role="tablist">
        <div class="section-item-title nav-sections-item-title menu hidden-lg hidden-md active" data-role="collapsible" role="tab" aria-controls="store.top.menu" data-collapsible="true" aria-selected="false" aria-expanded="true" tabindex="0"><a class="nav-sections-item-switch" href="#store.menu">Меню</a></div>
                <div class="section-item-title nav-sections-item-title account hidden-lg hidden-md" data-role="collapsible" role="tab" aria-controls="store.account" data-collapsible="true" aria-selected="false" aria-expanded="false" tabindex="0"><a class="nav-sections-item-switch" href="#store.menu">Учётная запись</a></div>
                        <div class="section-item-content" id="store.top.menu" data-role="content" role="tabpanel" aria-hidden="false">
    
<div id="menu-top15845337551962284729-menu" class="nav-menu " role="navigation">
<ul id="menu-top15845337551962284729" class="ves-megamenu menu-hover ves-horizontal nav-mobile" data-disable-bellow="1">
<li id="vesitem-3098215845337551665680928" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/cvety" target="_parent" class=" nav-anchor"><span>Цветы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-menu" style="width:100%;"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level1 nav-dropdown ves-column4"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-0 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza" target="_parent" class=" nav-anchor subitems-group"><span>Роза</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level2 nav-dropdown ves-column1"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-3 mega-col-level-2 col-xs-12"><div class="nav-item level2 nav-0 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-1 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-2 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div></div></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/roza"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/8-vday-21roses-1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-4 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/al-stromerija" target="_parent" class=" nav-anchor subitems-group"><span>Альстромерия</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/al-stromerija"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/_-_-_-_-_.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-1 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/hrizantema" target="_blank" class=" nav-anchor subitems-group"><span>Хризантема</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/hrizantema"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/020002________.jpeg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-5 submenu-alignright subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/irisy" target="_parent" class=" nav-anchor subitems-group"><span>Ирисы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/irisy"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/buket-iz-irisov-i-tyulpanov.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-2 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jeustoma" target="_blank" class=" nav-anchor subitems-group"><span>Эустома</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jeustoma"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/c1bf7996adb5267ed4558f9325ab95e1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-6 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jekzotika" target="_blank" class=" nav-anchor subitems-group"><span>Экзотика</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jekzotika"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/svetly-buket-iz-ekzotiki-razmer-s-030074-448x448.jpg" alt="" width="300" height="300"></a></p></div></div></div></div><div class="mega-col mega-col-8 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/tjul-pan" target="_parent" class=" nav-anchor subitems-group"><span>Тюльпан</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/tjul-pan"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/51_tyulpam.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-7 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/gerbera" target="_self" class=" nav-anchor subitems-group"><span>Гербера</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/gerbera"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/penelopa.jpg" alt="" width="300" height="300"></a></p></div></div></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza" target="_parent" class=" nav-anchor subitems-group"><span>Роза</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level2 nav-dropdown ves-column1"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-3 mega-col-level-2 col-xs-12"><div class="nav-item level2 nav-0 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-1 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-2 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/bukety-iz-roz" target="_self" class=" nav-anchor subitems-group"><span>Букеты из роз<span class="cat-label cat-label-v2">Hot!</span></span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/roza-poshtuchno" target="_self" class=" nav-anchor subitems-group"><span>Роза поштучно</span></a></div><div class="nav-item level2 nav-3 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/roza/rozy-optom" target="_self" class=" nav-anchor subitems-group"><span>Розы оптом<span class="cat-label cat-label-v1">New</span></span></a></div></div></div></div></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/roza"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/8-vday-21roses-1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/hrizantema" target="_blank" class=" nav-anchor subitems-group"><span>Хризантема</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/hrizantema"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/020002________.jpeg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jeustoma" target="_blank" class=" nav-anchor subitems-group"><span>Эустома</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jeustoma"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/c1bf7996adb5267ed4558f9325ab95e1.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/tjul-pan" target="_parent" class=" nav-anchor subitems-group"><span>Тюльпан</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/tjul-pan"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/51_tyulpam.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/al-stromerija" target="_parent" class=" nav-anchor subitems-group"><span>Альстромерия</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/al-stromerija"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/_-_-_-_-_.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignright subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/irisy" target="_parent" class=" nav-anchor subitems-group"><span>Ирисы</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/irisy"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/buket-iz-irisov-i-tyulpanov.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-left subgroup  dropdown-submenu"><a href="https://galantus.dn.ua/cvety/jekzotika" target="_blank" class=" nav-anchor subitems-group"><span>Экзотика</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/jekzotika"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/svetly-buket-iz-ekzotiki-razmer-s-030074-448x448.jpg" alt="" width="300" height="300"></a></p></div></div></div><div class="nav-item level1 nav-8 submenu-alignleft subgroup  dropdown-submenu" style="position: relative;"><a href="https://galantus.dn.ua/cvety/gerbera" target="_self" class=" nav-anchor subitems-group"><span>Гербера</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-mega"><div class="content-wrap"></div><div class="megamenu-footer"><p><a href="https://galantus.dn.ua//cvety/gerbera"><img src="https://galantus.dn.ua/media/wysiwyg/ves_floristy/penelopa.jpg" alt="" width="300" height="300"></a></p></div></div></div></div></div></div></div></div></li><li id="vesitem-3098515845337551676104283" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top " data-disable-bellow="1"><a href="https://galantus.dn.ua/kompozicii" target="_parent" class=" nav-anchor"><span>Композиции</span><span class="caret"></span><span class="opener"></span></a><div class="submenu dropdown-menu" style="width:100%;"><div class="content-wrap"><div class="megamenu-content" style="width:100%"><div class="level1 nav-dropdown ves-column3"><div class="item-content1 hidden-xs hidden-sm"><div class="mega-col mega-col-2 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-0 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1" style="position: relative;"><a href="https://galantus.dn.ua/kompozicii/cvety-i-sladosti-v-korobkah" target="_parent" class=" nav-anchor subitems-group"><span>Цветы и Сладости в коробках</span></a></div></div><div class="mega-col mega-col-2 mega-col-level-1 col-xs-12"><div class="nav-item level1 nav-1 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1" style="position: relative;"><a href="https://galantus.dn.ua/kompozicii/kompozicii-i-korziny-iz-cvetov" target="_parent" class=" nav-anchor subitems-group"><span>Композиции и Корзины из цветов</span></a></div></div></div><div class="item-content2 hidden-lg hidden-md"><div class="nav-item level1 nav-2 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1" style="position: relative;"><a href="https://galantus.dn.ua/kompozicii/cvety-i-sladosti-v-korobkah" target="_parent" class=" nav-anchor subitems-group"><span>Цветы и Сладости в коробках</span></a></div><div class="nav-item level1 nav-2 submenu-alignleft subgroup  dropdown-submenu" data-disable-bellow="1" style="position: relative;"><a href="https://galantus.dn.ua/kompozicii/kompozicii-i-korziny-iz-cvetov" target="_parent" class=" nav-anchor subitems-group"><span>Композиции и Корзины из цветов</span></a></div></div></div></div></div></div></li><li id="vesitem-3098615845337551746045240" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/sbornie-buketi" target="_parent" class=" nav-anchor"><span>Букеты</span></a></li><li id="vesitem-309871584533755779820344" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/podarki" target="_parent" class=" nav-anchor"><span>Подарки</span></a></li><li id="vesitem-3098815845337551917410039" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/gorshochnye-cvety" target="_self" class=" nav-anchor"><span>Горшочные растения</span></a></li><li id="vesitem-309891584533755370536992" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/otkrytki" target="_parent" class=" nav-anchor"><span>Открытки</span></a></li><li id="vesitem-3099015845337551807769169" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top " data-disable-bellow="1"><a href="https://galantus.dn.ua/uslugi-dekora" target="_parent" class=" nav-anchor"><span>Услуги Декора</span></a></li><li id="vesitem-309911584533755629997629" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/svadba" target="_parent" class=" nav-anchor"><span>Свадьба</span></a></li><li id="vesitem-30992158453375531613983" class=" nav-item level0 nav-0 submenu-alignright subhover  dropdown level-top "><a href="https://galantus.dn.ua/contact" target="_parent" class=" nav-anchor"><span>О Нас</span></a></li><li id="vesitem-309931584533755335981256" class=" nav-item level0 nav-0 submenu-left subhover  dropdown level-top "><a href="https://galantus.dn.ua/dostavka-i-oplata" target="_parent" class=" nav-anchor"><span>Информация для клиентов</span></a></li>	</ul>
</div>

</div>
                <div class="section-item-content hidden-lg hidden-md" id="store.account" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
    

<div class="header-links" id="header-links158455379035850959">
<div class="actions dropdown options header-links-options">
<div class="action toggle switcher-trigger" id="header-links-trigger158455379035850959">
    <strong class="hidden-xs">Моя учётная запись </strong>
</div>
<ul>
<li><a href="https://galantus.dn.ua/customer/account/">Моя учётная запись</a></li><li class="link wishlist" data-bind="scope: 'wishlist'">
<a href="https://galantus.dn.ua/wishlist/">Мой лист пожеланий        <!-- ko if: wishlist().counter --><!-- /ko -->
</a>
</li>

<li class="item link compare" data-bind="scope: 'compareProducts'" data-role="compare-products-link">
<a class="action compare no-display" title="Сравнение товаров" data-bind="attr: {'href': compareProducts().listUrl}, css: {'no-display': !compareProducts().count}">
Сравнение товаров        <span class="counter qty" data-bind="text: compareProducts().countCaption"></span>
</a>
</li>

    </ul>
</div>
</div>




    <ul class="link-account-custom-2"><li class="authorization-link" data-label="или">
<a href="https://galantus.dn.ua/customer/account/login/">
Войти    </a>
</li>
<li><a href="https://galantus.dn.ua/customer/account/create/">Регистрация</a></li></ul>		</div>
            </div>
</div>								</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>