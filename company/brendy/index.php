<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бренды");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"partners", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALT_TITLE_GET" => "NORMAL",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "100000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "partners",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"COUNT_IN_LINE" => "3",
		"DEFAULT_LIST_TEMPLATE" => "block",
		"DEPTH_LEVEL_BRAND" => "2",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "SITE",
			1 => "PHONE",
			2 => "DOCUMENTS",
			3 => "PHOTOS",
			4 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"ELEMENT_TYPE_VIEW" => "element_3",
		"FILE_404" => "",
		"GALLERY_PRODUCTS_PROPERTY" => "PHOTOS",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_CATALOG_ID" => "21",
		"IBLOCK_CATALOG_TYPE" => "aspro_next_catalog",
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "aspro_next_content",
		"IMAGE_POSITION" => "left",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LINKED_PRODUCTS_PROPERTY" => "BRAND",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "",
		),
		"LIST_OFFERS_LIMIT" => "10",
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZES",
			1 => "ARTICLE",
			2 => "COLOR_REF",
			3 => "SIZES2",
			4 => "",
		),
		"LIST_PROPERTY_CATALOG_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "SITE",
			1 => "PHONE",
			2 => "",
		),
		"LIST_VIEW" => "block",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"OFFER_SHOW_PREVIEW_PICTURE_PROPS" => array(
		),
		"OFFER_TREE_PROPS" => array(
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "",
		),
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SALE_STIKER" => "SALE_TEXT",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"SEF_FOLDER" => "/company/brendy/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_ARTICLE_SKU" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"SHOW_GALLERY" => "Y",
		"SHOW_LINKED_PRODUCTS" => "Y",
		"SHOW_MEASURE" => "N",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_RATING" => "N",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_UNABLE_SKU_PROPS" => "Y",
		"SORT_BUTTONS" => array(
			0 => "NAME",
			1 => "PRICE",
		),
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"SORT_PRICES" => "REGION_PRICE",
		"SORT_REGION_PRICE" => "BASE",
		"STIKERS_PROP" => "HIT",
		"STORES" => array(
			0 => "1",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "N",
		"T_DOCS" => "",
		"T_GALLERY" => "Галерея",
		"T_GOODS" => "",
		"T_GOODS_SECTION" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"VIEW_TYPE" => "table",
		"DETAIL_BRAND_USE" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"T_SERVICES" => "",
		"T_CLIENTS" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"LINE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"SHOW_NEXT_ELEMENT" => "N",
		"USE_SHARE" => "N",
		"T_ALSO_ITEMS" => "",
		"ALSO_ITEMS_POSITION" => "bottom",
		"ALSO_ITEMS_COUNT" => "5",
		"GALLERY_TYPE" => "small",
		"DETAIL_USE_COMMENTS" => "Y",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "N",
		"SHOW_FILTER_DATE" => "Y",
		"SHOW_TABS" => "Y",
		"SHOW_SECTION_NAME" => "N",
		"SHOW_ASK_QUESTION_BLOCK" => "Y",
		"SECTIONS_TYPE_VIEW" => "sections_1",
		"SECTION_TYPE_VIEW" => "section_1",
		"TIZERS_IBLOCK_ID" => "",
		"LANDING_IBLOCK_ID" => "",
		"LANDING_SECTION_COUNT" => "10",
		"LANDING_TITLE" => "Популярные категории",
		"T_STAFF" => "",
		"IMAGE_CATALOG_POSITION" => "left",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_TOP_MAP" => "N",
		"GOOGLE_API_KEY" => "",
		"MAP_TYPE" => "0",
		"FILTER_NAME" => "NEXT_SMART_FILTER",
		"FILTER_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>