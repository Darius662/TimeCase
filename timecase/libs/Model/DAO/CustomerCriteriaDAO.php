<?php
/** @package    Projects::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * CustomerCriteria allows custom querying for the Customer object.
 *
 * @inheritdocs
 * @package Projects::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class CustomerCriteriaDAO extends Criteria
{

	public $Id_Equals;
	public $Id_NotEquals;
	public $Id_IsLike;
	public $Id_IsNotLike;
	public $Id_BeginsWith;
	public $Id_EndWith;
	public $Id_GreaterThan;
	public $Id_GreaterThanOrEqual;
	public $Id_LessThan;
	public $Id_LessThanOrEqual;
	public $Id_In;
	public $Id_IsNotEmpty;
	public $Id_IsEmpty;
	public $Id_BitwiseOr;
	public $Id_BitwiseAnd;
	public $Name_Equals;
	public $Name_NotEquals;
	public $Name_IsLike;
	public $Name_IsNotLike;
	public $Name_BeginsWith;
	public $Name_EndWith;
	public $Name_GreaterThan;
	public $Name_GreaterThanOrEqual;
	public $Name_LessThan;
	public $Name_LessThanOrEqual;
	public $Name_In;
	public $Name_IsNotEmpty;
	public $Name_IsEmpty;
	public $Name_BitwiseOr;
	public $Name_BitwiseAnd;
	public $ContactPerson_Equals;
	public $ContactPerson_NotEquals;
	public $ContactPerson_IsLike;
	public $ContactPerson_IsNotLike;
	public $ContactPerson_BeginsWith;
	public $ContactPerson_EndWith;
	public $ContactPerson_GreaterThan;
	public $ContactPerson_GreaterThanOrEqual;
	public $ContactPerson_LessThan;
	public $ContactPerson_LessThanOrEqual;
	public $ContactPerson_In;
	public $ContactPerson_IsNotEmpty;
	public $ContactPerson_IsEmpty;
	public $ContactPerson_BitwiseOr;
	public $ContactPerson_BitwiseAnd;
	public $Email_Equals;
	public $Email_NotEquals;
	public $Email_IsLike;
	public $Email_IsNotLike;
	public $Email_BeginsWith;
	public $Email_EndWith;
	public $Email_GreaterThan;
	public $Email_GreaterThanOrEqual;
	public $Email_LessThan;
	public $Email_LessThanOrEqual;
	public $Email_In;
	public $Email_IsNotEmpty;
	public $Email_IsEmpty;
	public $Email_BitwiseOr;
	public $Email_BitwiseAnd;
	public $Password_Equals;
	public $Password_NotEquals;
	public $Password_IsLike;
	public $Password_IsNotLike;
	public $Password_BeginsWith;
	public $Password_EndWith;
	public $Password_GreaterThan;
	public $Password_GreaterThanOrEqual;
	public $Password_LessThan;
	public $Password_LessThanOrEqual;
	public $Password_In;
	public $Password_IsNotEmpty;
	public $Password_IsEmpty;
	public $Password_BitwiseOr;
	public $Password_BitwiseAnd;
	public $AllowLogin_Equals;
	public $AllowLogin_NotEquals;
	public $AllowLogin_IsLike;
	public $AllowLogin_IsNotLike;
	public $AllowLogin_BeginsWith;
	public $AllowLogin_EndWith;
	public $AllowLogin_GreaterThan;
	public $AllowLogin_GreaterThanOrEqual;
	public $AllowLogin_LessThan;
	public $AllowLogin_LessThanOrEqual;
	public $AllowLogin_In;
	public $AllowLogin_IsNotEmpty;
	public $AllowLogin_IsEmpty;
	public $AllowLogin_BitwiseOr;
	public $AllowLogin_BitwiseAnd;
	public $Address_Equals;
	public $Address_NotEquals;
	public $Address_IsLike;
	public $Address_IsNotLike;
	public $Address_BeginsWith;
	public $Address_EndWith;
	public $Address_GreaterThan;
	public $Address_GreaterThanOrEqual;
	public $Address_LessThan;
	public $Address_LessThanOrEqual;
	public $Address_In;
	public $Address_IsNotEmpty;
	public $Address_IsEmpty;
	public $Address_BitwiseOr;
	public $Address_BitwiseAnd;
	public $Location_Equals;
	public $Location_NotEquals;
	public $Location_IsLike;
	public $Location_IsNotLike;
	public $Location_BeginsWith;
	public $Location_EndWith;
	public $Location_GreaterThan;
	public $Location_GreaterThanOrEqual;
	public $Location_LessThan;
	public $Location_LessThanOrEqual;
	public $Location_In;
	public $Location_IsNotEmpty;
	public $Location_IsEmpty;
	public $Location_BitwiseOr;
	public $Location_BitwiseAnd;
	public $Url_Equals;
	public $Url_NotEquals;
	public $Url_IsLike;
	public $Url_IsNotLike;
	public $Url_BeginsWith;
	public $Url_EndWith;
	public $Url_GreaterThan;
	public $Url_GreaterThanOrEqual;
	public $Url_LessThan;
	public $Url_LessThanOrEqual;
	public $Url_In;
	public $Url_IsNotEmpty;
	public $Url_IsEmpty;
	public $Url_BitwiseOr;
	public $Url_BitwiseAnd;
	public $Tel_Equals;
	public $Tel_NotEquals;
	public $Tel_IsLike;
	public $Tel_IsNotLike;
	public $Tel_BeginsWith;
	public $Tel_EndWith;
	public $Tel_GreaterThan;
	public $Tel_GreaterThanOrEqual;
	public $Tel_LessThan;
	public $Tel_LessThanOrEqual;
	public $Tel_In;
	public $Tel_IsNotEmpty;
	public $Tel_IsEmpty;
	public $Tel_BitwiseOr;
	public $Tel_BitwiseAnd;
	public $Tel2_Equals;
	public $Tel2_NotEquals;
	public $Tel2_IsLike;
	public $Tel2_IsNotLike;
	public $Tel2_BeginsWith;
	public $Tel2_EndWith;
	public $Tel2_GreaterThan;
	public $Tel2_GreaterThanOrEqual;
	public $Tel2_LessThan;
	public $Tel2_LessThanOrEqual;
	public $Tel2_In;
	public $Tel2_IsNotEmpty;
	public $Tel2_IsEmpty;
	public $Tel2_BitwiseOr;
	public $Tel2_BitwiseAnd;
	public $StatusId_Equals;
	public $StatusId_NotEquals;
	public $StatusId_IsLike;
	public $StatusId_IsNotLike;
	public $StatusId_BeginsWith;
	public $StatusId_EndWith;
	public $StatusId_GreaterThan;
	public $StatusId_GreaterThanOrEqual;
	public $StatusId_LessThan;
	public $StatusId_LessThanOrEqual;
	public $StatusId_In;
	public $StatusId_IsNotEmpty;
	public $StatusId_IsEmpty;
	public $StatusId_BitwiseOr;
	public $StatusId_BitwiseAnd;
	public $Description_Equals;
	public $Description_NotEquals;
	public $Description_IsLike;
	public $Description_IsNotLike;
	public $Description_BeginsWith;
	public $Description_EndWith;
	public $Description_GreaterThan;
	public $Description_GreaterThanOrEqual;
	public $Description_LessThan;
	public $Description_LessThanOrEqual;
	public $Description_In;
	public $Description_IsNotEmpty;
	public $Description_IsEmpty;
	public $Description_BitwiseOr;
	public $Description_BitwiseAnd;

}

