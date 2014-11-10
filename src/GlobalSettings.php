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
        1 => array(
            'main' => 'http://cellspy.org/',
            'cp' => 'http://cp.cellspy.org',
            'cookieDomain' => '.cellspy.com',
            'mailSender' => 'http://someHost/sender.php'
        ),
        2 => array(
            ''
        )
    );
    protected static $databases = array(
        'main' => array(
            'host' => '66.232.96.3',
            'username' => 'user_data',
            'password' => 'pai1Geo9',
            'dbname' => 'user_data'
        ),
        'data' => array(
            0 => array(
            )
        )
    );
    protected static $s3 = array(
        'key' => 'AKIAIHGTCBLPUEKBCRGA',
        'secret' => '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',
        'bucket' => 'data'
    );
    protected static $cloudFront = array(
        'domain' => 'http://media.topspyapp.com/',
        'keyPairId' => 'APKAJEW3MLUPI6ZCDZBA'
    );

    public static function getControlPanelUrl($site)
    {
        if (isset(self::$data[$site]['cp'])) {
            return self::$data[$site]['cp'];
        }

        throw new Exception("invalid site");
    }

    public static function getUnlockAccountPageUrl($site, $email, $secret)
    {
        return $this->getControlPanelUrl($site) . '/unlockAccount?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getRestorePasswordPageUrl($site, $email, $secret)
    {
        return $this->getControlPanelUrl($site) . '/resetPassword?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getEmailConfirmPageUrl($site, $email, $secret)
    {
        return $this->getControlPanelUrl($site) . '/emailConfirm?' . http_build_query(array(
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

    public static function getCloudFrontConfig()
    {
        self::$cloudFront['privatKeyFilename'] = dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'cloudFrontPrivateKey';

        return self::$cloudFront;
    }

    public function getS3Config()
    {
        return self::$s3;
    }

    public static function getMainDbConfig()
    {
        return self::$databases['main'];
    }

}
