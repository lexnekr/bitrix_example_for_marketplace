<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();



$arComponentParameters = array(
	"GROUPS" => array(
		"BLOCK_1" => array(
			"NAME" => GetMessage("BLOCK_1"),
			"SORT" => "110",
		),
		"BLOCK_2" => array(
			"NAME" => GetMessage("BLOCK_2"),
			"SORT" => "120",
		),
		"BLOCK_3" => array(
			"NAME" => GetMessage("BLOCK_3"),
			"SORT" => "130",
		),
		"BLOCK_4" => array(
			"NAME" => GetMessage("BLOCK_4"),
			"SORT" => "140",
		),
		"BLOCK_5" => array(
			"NAME" => GetMessage("BLOCK_5"),
			"SORT" => "150",
		),

		"BLOCK_2_1" => array(
			"NAME" => GetMessage("BLOCK_2_1"),
			"SORT" => "210",
		),
		"BLOCK_2_2" => array(
			"NAME" => GetMessage("BLOCK_2_2"),
			"SORT" => "220",
		),
		"BLOCK_2_3" => array(
			"NAME" => GetMessage("BLOCK_2_3"),
			"SORT" => "230",
		),
		"BLOCK_2_4" => array(
			"NAME" => GetMessage("BLOCK_2_4"),
			"SORT" => "240",
		),
		"BLOCK_2_5" => array(
			"NAME" => GetMessage("BLOCK_2_5"),
			"SORT" => "250",
		),

		"BLOCK_3_1" => array(
			"NAME" => GetMessage("BLOCK_3_1"),
			"SORT" => "310",
		),
		"BLOCK_3_2" => array(
			"NAME" => GetMessage("BLOCK_3_2"),
			"SORT" => "320",
		),
		"BLOCK_3_3" => array(
			"NAME" => GetMessage("BLOCK_3_3"),
			"SORT" => "330",
		),
		"BLOCK_3_4" => array(
			"NAME" => GetMessage("BLOCK_3_4"),
			"SORT" => "340",
		),
		"BLOCK_3_5" => array(
			"NAME" => GetMessage("BLOCK_3_5"),
			"SORT" => "350",
		),

		"1_SIZE_PLUS" => array(
			"NAME" => GetMessage("1_SIZE_PLUS"),
			"SORT" => "100",
		),
		"2_SIZE_PLUS" => array(
			"NAME" => GetMessage("2_SIZE_PLUS"),
			"SORT" => "100",
		),
		"3_SIZE_PLUS" => array(
			"NAME" => GetMessage("3_SIZE_PLUS"),
			"SORT" => "100",
		),


	),

	"PARAMETERS" => array(

		"BACKGRAUND_IMG" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BACKGRAUND_IMG"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			"ADDITIONAL_VALUES" => "N",
		),
		"TEXT_COLOR" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TEXT_COLOR"),
			"TYPE" => "COLORPICKER",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			"ADDITIONAL_VALUES" => "N",
		),


	),
);






?>