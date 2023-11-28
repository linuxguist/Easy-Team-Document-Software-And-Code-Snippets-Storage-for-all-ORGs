<?php

include_once dirname(__FILE__) . '/' . 'phpgen_settings.php';
include_once dirname(__FILE__) . '/' . 'components/application.php';
include_once dirname(__FILE__) . '/' . 'components/security/permission_set.php';
include_once dirname(__FILE__) . '/' . 'components/security/user_authentication/table_based_user_authentication.php';
include_once dirname(__FILE__) . '/' . 'components/security/grant_manager/hard_coded_user_grant_manager.php';
include_once dirname(__FILE__) . '/' . 'components/security/table_based_user_manager.php';
include_once dirname(__FILE__) . '/' . 'components/security/user_identity_storage/user_identity_session_storage.php';
include_once dirname(__FILE__) . '/' . 'components/security/recaptcha.php';
include_once dirname(__FILE__) . '/' . 'database_engine/mysql_engine.php';

$grants = array('guest' => 
        array()
    ,
    'defaultUser' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team1' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team2' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team3' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team4' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team5' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team6' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team7' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team8' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team9' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team10' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team11' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team12' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team13' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team14' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team15' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team16' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team17' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team18' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team19' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team20' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team21' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team22' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team23' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team24' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team25' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team26' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team27' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team28' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team29' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team30' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team31' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team32' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team33' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team34' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team35' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team36' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team37' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team38' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team39' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team40' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team41' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team42' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team43' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team44' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team45' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team46' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team47' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team48' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team49' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    ,
    'team50' => 
        array('all_categories' => new PermissionSet(false, false, false, false),
        'all_scripts' => new PermissionSet(false, false, false, false))
    );

$appGrants = array('guest' => new PermissionSet(false, false, false, false),
    'defaultUser' => new PermissionSet(true, true, true, true),
    'team1' => new PermissionSet(false, false, false, false),
    'team2' => new PermissionSet(false, false, false, false),
    'team3' => new PermissionSet(false, false, false, false),
    'team4' => new PermissionSet(false, false, false, false),
    'team5' => new PermissionSet(false, false, false, false),
    'team6' => new PermissionSet(false, false, false, false),
    'team7' => new PermissionSet(false, false, false, false),
    'team8' => new PermissionSet(false, false, false, false),
    'team9' => new PermissionSet(false, false, false, false),
    'team10' => new PermissionSet(false, false, false, false),
    'team11' => new PermissionSet(false, false, false, false),
    'team12' => new PermissionSet(false, false, false, false),
    'team13' => new PermissionSet(false, false, false, false),
    'team14' => new PermissionSet(false, false, false, false),
    'team15' => new PermissionSet(false, false, false, false),
    'team16' => new PermissionSet(false, false, false, false),
    'team17' => new PermissionSet(false, false, false, false),
    'team18' => new PermissionSet(false, false, false, false),
    'team19' => new PermissionSet(false, false, false, false),
    'team20' => new PermissionSet(false, false, false, false),
    'team21' => new PermissionSet(false, false, false, false),
    'team22' => new PermissionSet(false, false, false, false),
    'team23' => new PermissionSet(false, false, false, false),
    'team24' => new PermissionSet(false, false, false, false),
    'team25' => new PermissionSet(false, false, false, false),
    'team26' => new PermissionSet(false, false, false, false),
    'team27' => new PermissionSet(false, false, false, false),
    'team28' => new PermissionSet(false, false, false, false),
    'team29' => new PermissionSet(false, false, false, false),
    'team30' => new PermissionSet(false, false, false, false),
    'team31' => new PermissionSet(false, false, false, false),
    'team32' => new PermissionSet(false, false, false, false),
    'team33' => new PermissionSet(false, false, false, false),
    'team34' => new PermissionSet(false, false, false, false),
    'team35' => new PermissionSet(false, false, false, false),
    'team36' => new PermissionSet(false, false, false, false),
    'team37' => new PermissionSet(false, false, false, false),
    'team38' => new PermissionSet(false, false, false, false),
    'team39' => new PermissionSet(false, false, false, false),
    'team40' => new PermissionSet(false, false, false, false),
    'team41' => new PermissionSet(false, false, false, false),
    'team42' => new PermissionSet(false, false, false, false),
    'team43' => new PermissionSet(false, false, false, false),
    'team44' => new PermissionSet(false, false, false, false),
    'team45' => new PermissionSet(false, false, false, false),
    'team46' => new PermissionSet(false, false, false, false),
    'team47' => new PermissionSet(false, false, false, false),
    'team48' => new PermissionSet(false, false, false, false),
    'team49' => new PermissionSet(false, false, false, false),
    'team50' => new PermissionSet(false, false, false, false));

$dataSourceRecordPermissions = array('all_categories' => new DataSourceRecordPermission('user_id', false, false, false, true, true, true),
  'all_scripts' => new DataSourceRecordPermission('user_id', false, false, false, true, true, true));

$tableCaptions = array('all_categories' => 'All Categories',
'all_scripts' => 'All Documents');

$usersTableInfo = array(
    'TableName' => 'phpgen_users',
    'UserId' => 'user_id',
    'UserName' => 'user_name',
    'Password' => 'user_password',
    'Email' => '',
    'UserToken' => '',
    'UserStatus' => ''
);

function EncryptPassword($password, &$result)
{

}

function VerifyPassword($enteredPassword, $encryptedPassword, &$result)
{

}

function BeforeUserRegistration($userName, $email, $password, &$allowRegistration, &$errorMessage)
{

}    

function AfterUserRegistration($userName, $email)
{

}    

function PasswordResetRequest($userName, $email)
{

}

function PasswordResetComplete($userName, $email)
{

}

function VerifyPasswordStrength($password, &$result, &$passwordRuleMessage) 
{

}

function CreatePasswordHasher()
{
    $hasher = CreateHasher('SHA256');
    if ($hasher instanceof CustomStringHasher) {
        $hasher->OnEncryptPassword->AddListener('EncryptPassword');
        $hasher->OnVerifyPassword->AddListener('VerifyPassword');
    }
    return $hasher;
}

function CreateGrantManager() 
{
    global $grants;
    global $appGrants;
    
    return new HardCodedUserGrantManager($grants, $appGrants);
}

function CreateTableBasedUserManager() 
{
    global $usersTableInfo;

    $userManager = new TableBasedUserManager(MyPDOConnectionFactory::getInstance(), GetGlobalConnectionOptions(), 
        $usersTableInfo, CreatePasswordHasher(), false);
    $userManager->OnVerifyPasswordStrength->AddListener('VerifyPasswordStrength');

    return $userManager;
}

function GetReCaptcha($formId) 
{
    return null;
}

function SetUpUserAuthorization() 
{
    global $dataSourceRecordPermissions;

    $hasher = CreatePasswordHasher();

    $grantManager = CreateGrantManager();

    $userAuthentication = new TableBasedUserAuthentication(new UserIdentitySessionStorage(), false, $hasher, CreateTableBasedUserManager(), true, false, false);

    GetApplication()->SetUserAuthentication($userAuthentication);
    GetApplication()->SetUserGrantManager($grantManager);
    GetApplication()->SetDataSourceRecordPermissionRetrieveStrategy(new HardCodedDataSourceRecordPermissionRetrieveStrategy($dataSourceRecordPermissions));
}
