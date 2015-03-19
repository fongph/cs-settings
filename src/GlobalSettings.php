<?php

namespace CS\Settings;

use PDO;

/**
 * Description of GlobalSettings
 *
 * @author root
 */
class GlobalSettings
{

    protected static $sites = array(
        0 => array(
            'mainDomain' => 'http://pumpic.com',
            'cpDomain' => 'http://cp.pumpic.com',
            'cpStaticDomain' => 'http://cp.pumpic.com/static',
            'demoCpDomain' => 'http://demo.pumpic.com',
            'demoCpStaticDomain' => 'http://demo.pumpic.com/static',
            'cookieDomain' => '.pumpic.com',
            'supportEmail' => 'support@pumpic.com',
            'registrationPage' => 'http://pumpic.com/store.html',
            'refundPolicyPage' => 'http://pumpic.com/policy.html#refund-policy',
            'mailSender' => 'http://sender-mail.pumpic.com/',
            'mailSenderSecret' => '258EAFA5-E914-47DA-95CA-C5AB0DC85B11',
            'directLoginSalt' => '2hTXkCn38;J]eN}b-'
        ),
        1 => array(
            'mainDomain' => 'http://pumpic.com',
            'cpDomain' => 'http://cp.pumpic.com',
            'cpStaticDomain' => 'http://cp.pumpic.com/static',
            'demoCpDomain' => 'http://demo.pumpic.com',
            'demoCpStaticDomain' => 'http://demo.pumpic.com/static',
            'cookieDomain' => '.pumpic.com',
            'supportEmail' => 'support@pumpic.com',
            'registrationPage' => 'http://pumpic.com/store.html',
            'refundPolicyPage' => 'http://pumpic.com/policy.html#refund-policy',
            'mailSender' => 'http://sender-mail.pumpic.com/',
            'mailSenderSecret' => '258EAFA5-E914-47DA-95CA-C5AB0DC85B11',
            'directLoginSalt' => 'wNDs{j++?o@-*|q|2hTXkCn38;J]eN}b--n9/SIVoj6+'
        )
    );
    protected static $databases = array(
        'main' => array(
            'host' => '188.40.64.2',
            'username' => 'ci_user',
            'password' => 'qmsgrSR8qhxeNSC44533hVBqwNajd62z2QtXwN6E',
            'dbname' => 'main',
            'options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8;',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            )
        ),
        'data' => array(
            0 => array(
                'host' => '188.40.64.2',
                'username' => 'ci_user',
                'password' => 'qmsgrSR8qhxeNSC44533hVBqwNajd62z2QtXwN6E',
                'dbname' => 'data',
                'options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8;',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                )
            )
        ),
        'error' => array(
            'host' => '188.40.64.2',
            'username' => 'user_error',
            'password' => 'xntL7uKxLKX6ccv667kZpbeUFQYMCX4DbuxQJ48g',
            'dbname' => 'error',
            'options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8;',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            )
        )
    );
    protected static $redis = array(
        'pins' => array(
            'host' => '148.251.64.9',
            'port' => 6319,
            'database' => 0
        ),
        'limits' => array(
            'host' => '148.251.64.9',
            'port' => 6319,
            'database' => 1
        ),
        'sessions' => array(
            1 => array(
                'host' => '148.251.64.9',
                'port' => 6319,
                'database' => 0
            )
        )
    );
    protected static $s3 = array(
        'key' => 'AKIAJCULQL4O4GXAD4WQ',
        'secret' => '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',
        'bucket' => 'incoming-files',
        'region' => 'us-west-2'
    );
    protected static $elasticTranscode = array(
        'PipelineId' => '1417273865573-ymbfo9',
        'PresetId' => '1351620000001-000020'
    );
    protected static $cloudFront = array(
        'domain' => 'http://media.pumpic.com/',
        'keyPairId' => 'APKAJGHJLY2FNTE5A62Q'
    );
    protected static $icloud = array(
        'pathIcloudBackups' => '/var/www/dump/',
        'pathDownloadService' => '/var/www/service/current/download_icloud/iloot.py',
        'backupItems' => 'calendar address_book call_history bookmarks web_history sms' // "sms call_history address_book calendar notes all_sql all_db all_sql3 all_plist all_storedata"
    );
    protected static $queue = array(
        'host' => '188.166.51.138',
        'port' => 5672,
        'user' => 'worker_user',
        'password' => 'ZSHfQF5JTEjM7en',
        'vhost' => '/',
        'countErrorCycles' => 2,
    );
    protected static $apiSalt = 'RPnZJu2Qwnaz9nKQTeYnCpB8MzJzaR2J8r7dm6u4';
    protected static $fastSpringConfig = array(
        'storeId' => 'pumpic',
        'privateKey' => '5e478cb711606c68738a232a9f3db855',
        'userName' => 'api@dizboard.com',
        'userPassword' => 'c0RdI48G7Est'
    );
    protected static $timeWaitForSend = null; //in seconds
    
    protected static $removeApp = false; //if deleteApp = true then android and ios replace self empty app
    
    protected static $versionsApps = array(
        'ios' => 3,
        'android' => 5,
        'blackberry' => 1
    );
    protected static $apiJson = array(
        'master' => 'https://apijson.pumpic.com:4433/api.php',
        'slave' => null
    );
    protected static $apiUpload = array(
        'master' => 'https://apifiles.pumpic.com:4433/api_upload.php',
        'slave' => null
    );
    public static function getIcloudConfig(){
        return self::$icloud;
    }
    public static function getQueueConfig(){
        return self::$queue;
    }
    public static function getTimeWaitForSend()
    {
        return self::$timeWaitForSend;
    }
    
    public static function getRemoveApp()
    {
        return self::$removeApp;
    }
    
    public static function getVersionApp($os)
    {
        return self::$versionsApps[$os];
    }

    public static function getApiJson($type)
    {
        return self::$apiJson[$type];
    }

    public static function getApiUpload($type)
    {
        return self::$apiUpload[$type];
    }

    public static function getShardDB($devId)
    {
        return self::getDeviceDatabaseConfig($devId);
    }

    public static function getDB()
    {
        return self::$databases['main'];
    }

    public static function getErrorDb()
    {
        return self::$databases['error'];
    }

    public static function getFastSpringConfig()
    {
        return self::$fastSpringConfig;
    }

    public static function getControlPanelURL($site)
    {
        if (isset(self::$sites[$site]['cpDomain'])) {
            return self::$sites[$site]['cpDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getDemoControlPanelURL($site)
    {
        if (isset(self::$sites[$site]['demoCpDomain'])) {
            return self::$sites[$site]['demoCpDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }
    
    public static function getDemoControlPanelStaticURL($site)
    {
        if (isset(self::$sites[$site]['demoCpStaticDomain'])) {
            return self::$sites[$site]['demoCpStaticDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getCookieDomain($site)
    {
        if (isset(self::$sites[$site]['cookieDomain'])) {
            return self::$sites[$site]['cookieDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getSupportEmail($site)
    {
        if (isset(self::$sites[$site]['supportEmail'])) {
            return self::$sites[$site]['supportEmail'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getControlPanelStaticURL($site)
    {
        if (isset(self::$sites[$site]['cpStaticDomain'])) {
            return self::$sites[$site]['cpStaticDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getRefundPolicyPageURL($site)
    {
        if (isset(self::$sites[$site]['refundPolicyPage'])) {
            return self::$sites[$site]['refundPolicyPage'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getMailSenderURL($site)
    {
        if (isset(self::$sites[$site]['mailSender'])) {
            return self::$sites[$site]['mailSender'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getMailSenderSecret($site)
    {
        if (isset(self::$sites[$site]['mailSenderSecret'])) {
            return self::$sites[$site]['mailSenderSecret'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getMainURL($site)
    {
        if (isset(self::$sites[$site]['mainDomain'])) {
            return self::$sites[$site]['mainDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getDirectLoginSalt($site)
    {
        if (isset(self::$sites[$site]['directLoginSalt'])) {
            return self::$sites[$site]['directLoginSalt'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getRegistrationPageURL($site)
    {
        if (isset(self::$sites[$site]['registrationPage'])) {
            return self::$sites[$site]['registrationPage'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getUnlockAccountPageUrl($site, $email, $secret)
    {
        return self::getControlPanelURL($site) . '/unlockAccount?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getRestorePasswordPageUrl($site, $email, $secret)
    {
        return self::getControlPanelURL($site) . '/resetPassword?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getEmailConfirmPageUrl($site, $email, $secret)
    {
        return self::getControlPanelURL($site) . '/emailConfirm?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getDeviceDatabaseConfig($devId)
    {
        //$number = floor($devId / 10000);
        $number = 0;

        return self::$databases['data'][$number];
    }

    public static function verifyApiRequest($hash, $methodName, $timestamp)
    {
        return (md5('test' . $methodName . $timestamp) == $hash) || (md5(self::$apiSalt . $methodName . $timestamp) == $hash);
    }

    public static function getCloudFrontConfig()
    {
        self::$cloudFront['privatKeyFilename'] = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'cloudFrontPrivateKey';

        return self::$cloudFront;
    }

    public static function getS3Config()
    {
        return self::$s3;
    }

    public static function getElasticTrancodeConfig()
    {
        return self::$elasticTranscode;
    }

    public static function getMainDbConfig()
    {
        return self::$databases['main'];
    }

    public static function getRedisConfig($keyDB = 'pins', $siteId = null)
    {
        if ($siteId !== null) {
            return self::$redis[$keyDB][$siteId];
        }
        
        return self::$redis[$keyDB];
    }

}
