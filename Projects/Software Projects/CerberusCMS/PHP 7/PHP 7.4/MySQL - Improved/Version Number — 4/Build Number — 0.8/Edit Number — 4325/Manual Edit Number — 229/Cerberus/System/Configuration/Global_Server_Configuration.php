<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Rosedale In Southern California, U.S.A.
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Rosedale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()  ()  () () --
 +  () ()  () --- ()
 +  ------------------------------
 +  System File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => System => Configuration => Global_Server_Configuration.php
 + - This File, Version		 : 0.7.1
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + -				 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, November 1st of 2023
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	 - Nyx -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|4|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 0.8 - Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 4,325
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + System :: Configuration :: Global Server Configuration
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Server :: Configuration :: Variables :: Strings
 +
 ============================================================================================================
*/

$_ACCESS_DATABASE_SERVER_HOSTNAME 						= "";
$_ACCESS_DATABASE_SERVER_HOSTNAME_PORT	 					= "";
$_ACCESS_DATABASE_SERVER_USERNAME 						= "";
$_ACCESS_DATABASE_SERVER_PASSWORD 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_NAME 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 					= "";

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Post-Processor :: Engine :: Configuration
 +
 ============================================================================================================
*/

$_ACCESS_PHP_ENGINE_VERSION							= "5";
$_ACCESS_SQL_ENGINE_VERSION							= "1";

/*
 ============================================================================================================
 +
 + Web Server :: Configuration :: Connection
 +
 ============================================================================================================
*/

$_ACCESS_URL_CLEARTEXT 								= "";
$_ACCESS_URL_SECURE								= "";
$_ACCESS_URL_SECURE_SSL								= "";
$_ACCESS_URL_SECURE_SSL_CUSTOM							= "";
$_ACCESS_URL_SECURE_SSL_OPENSSL							= "";
$_ACCESS_URL_SECURE_TLS								= "";
$_ACCESS_URL_SECURE_TLS_CUSTOM							= "";

/*
 ============================================================================================================
 +
 + System :: Configuration :: Electronic Mail Addresses and Electronic Mail Message Encryption
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Addresses
 ============================================================================================================
*/

$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR				= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT					= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES				= "";

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Message Encryption
 ============================================================================================================
*/

$_SYSTEM_SETTINGS_STATUS_ENCRYPTION_PGP_ELECTRONIC_MAIL_MESSAGE			= "1";
$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC	= "";
?>