<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Список акций магазина FaMa Prrofi Centre, которые сделают ваши покупки еще приятнее");
$APPLICATION->SetPageProperty("title", "Акции магазина FaMa Profi Centre");
$APPLICATION->SetTitle("Акции");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"IBLOCK_TYPE" => "aspro_next_content",
		"IBLOCK_ID" => "23",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"FILTER_NAME" => "arRegionLink",
		"SORT_BY1" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/sale/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PERIOD",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "PHOTOPOS",
			2 => "LINK_GOODS",
			3 => "FORM_ORDER",
			4 => "LINK_SERVICES",
			5 => "LINK_STUDY",
			6 => "VIDEO",
			7 => "PHOTOS",
			8 => "DOCUMENTS",
			9 => "",
		),
		"IBLOCK_CATALOG_TYPE" => "aspro_next_catalog",
		"DISPLAY_DATE" => "Y",
		"SHOW_FAQ_BLOCK" => "Y",
		"SHOW_BACK_LINK" => "Y",
		"GALLERY_PROPERTY" => "MORE_PHOTO",
		"SHOW_GALLERY" => "Y",
		"LINKED_PRODUCTS_PROPERTY" => "LINK",
		"SHOW_LINKED_PRODUCTS" => "Y",
		"PRICE_PROPERTY" => "PRICE",
		"SHOW_PRICE" => "N",
		"PERIOD_PROPERTY" => "PERIOD",
		"SHOW_PERIOD" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"IMAGE_POSITION" => "left",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"CATALOG_FILTER_NAME" => "arrProductsFilter",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "news",
		"SET_LAST_MODIFIED" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"IS_VERTICAL" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"SHOW_SERVICES_BLOCK" => "N",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"DETAIL_STRICT_SECTION_CHECK" => "Y",
		"STRICT_SECTION_CHECK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_GOODS" => "Товары по акции",
		"T_SERVICES" => "",
		"T_NEXT_LINK" => "",
		"T_PREV_LINK" => "",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_FILTER_DATE" => "N",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"SHOW_NEXT_ELEMENT" => "N",
		"USE_SHARE" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_VIEW" => "block",
		"LINKED_ELEMENST_PAGE_COUNT" => "150",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"HIDE_NOT_AVAILABLE" => "Y",
		"FILE_404" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>