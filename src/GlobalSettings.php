<?php

namespace CS\Settings;

/**
* Description of GlobalSettings
*
* @author root
*/
class GlobalSettings
{

    protected static $sites = array(
        0 => array(
            'name'            => 'test',
            'mainDomain'      => 'http://test',
            'cpDomain'        => 'http://cp.test',
            'cpStaticDomain'  => 'http://cp.test/static',
            'cookieDomain'    => '.test',
            'supportEmail'    => 'support@pumpic.com',
            'registrationPage'=> 'http://test/pricing-and-plans',
            'mailSender'      => 'http://test/sender.php'
        ),
        1 => array(
            'name'            => 'pumpic.com',
            'mainDomain'      => 'http://pumpic.com',
            'cpDomain'        => 'http://cp.pumpic.com',
            'cpStaticDomain'  => 'http://cp.pumpic.com/static',
            'cookieDomain'    => '.pumpic.com',
            'supportEmail'    => 'support@pumpic.com',
            'registrationPage'=> 'http://pumpic.com/pricing-and-plans',
            'mailSender'      => 'http://someHost/sender.php'
        ),
        2 => array(
            ''
        )
    );
    protected static $databases = array(
        'main' => array(
            'host'    => '77.77.77.77',
            'username'=> 'main',
            'password'=> 'password',
            'dbname'  => 'db-name',
            'options'  => array(
                PDO::MYSQL_ATTR_INIT_COMMAND=> 'set names utf8;',
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
            )
        ),
        'data' => array(
            0 => array(
                'host'    => '77.77.77.77',
                'username'=> 'main',
                'password'=> 'password',
                'dbname'  => 'db-name',
                'options'  => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND=> 'set names utf8;',
                    PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
                )
            )
        )
    );
    protected static $s3 = array(
        'key'   => 'AKIAIHGTCBLPUEKBCRGA',
        'secret'=> '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',
        'bucket'=> 'data'
    );
    protected static $cloudFront = array(
        'domain'   => 'http://media.topspyapp.com/',
        'keyPairId'=> 'APKAJEW3MLUPI6ZCDZBA'
    );
    protected static $apiSalt = 'test';

    protected static $versionsApps = array(
        'ios'       => 44,
        'android'   => 66,
        'blackberry'=> 3
    );

    protected static $apiJson = array(
        'master'=> 'https://apijson.pumpic.com:4433/api.php',
        'slave'  => array(0=> 'https://apijson.pumpic.com:4433/slave-api.php')
    );

    protected static $apiUpload = array(
        'master'=> 'https://apifiles.pumpic.com:4433/api_upload.php',
        'slave'  => array(0=> 'https://apifiles.pumpic.com:4433/slave-api-upload.php')
    );

    public static function getApiJson()
    {
        return self::$apiJson['master'];
    }

    public static function getApiUpload()
    {
        return self::$apiUpload['master'];
    }


    public static function getShardDB($uniq_id)
    {
        return self::$databases['data'][0];
    }

    public static function getDB()
    {
        return self::$databases['main'];
    }

    public static function getControlPanelURL($site)
    {
        if (isset(self::$sites[$site]['cpStaticDomain'])) {
            return self::$sites[$site]['cpStaticDomain'];
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
        if (isset(self::$sites[$site]['cpDomain'])) {
            return self::$sites[$site]['cpDomain'];
        }

        throw new InvalidSite("Invalid site or site settings");
    }

    public static function getName($site)
    {
        if (isset(self::$sites[$site]['name'])) {
            return self::$sites[$site]['name'];
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
                'email'=> $email,
                'key'  => $secret
            ));
    }

    public static function getRestorePasswordPageUrl($site, $email, $secret)
    {
        return self::getControlPanelURL($site) . '/resetPassword?' . http_build_query(array(
                'email'=> $email,
                'key'  => $secret
            ));
    }

    public static function getEmailConfirmPageUrl($site, $email, $secret)
    {
        return self::getControlPanelURL($site) . '/emailConfirm?' . http_build_query(array(
                'email'=> $email,
                'key'  => $secret
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
        return md5(self::$apiSalt . $methodName . $timestamp) == $hash;
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

    public static function getMainDbConfig()
    {
        return self::$databases['main'];
    }

}
