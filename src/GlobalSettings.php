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
            'main' => 'http://cellspy.com/',
            'cp' => 'http://cp.cellspy.com/',
            'cookieDomain' => '.cellspy.com',
            'mailSender' => 'http://someHost/sender.php'
        ),
        2 => array(
            ''
        )
    );
    protected static $databases = array(
        'main' => array(
        ),
        'data' => array(
            0 => array(),
            1 => array(),
            2 => array()
        )
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
        return $this->getControlPanelUrl($site) . 'unlockAccount?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public function getRestorePasswordPageUrl($site, $email, $secret)
    {
        return $this->getControlPanelUrl($site) . 'resetPassword?' . http_build_query(array(
                    'email' => $email,
                    'key' => $secret
        ));
    }

    public static function getDeviceDatabaseConfig($devId)
    {
        $number = floor($devId / 10000);

        return self::$databases['data'][$number];
    }

    public static function getMainDbConfig()
    {
        return self::$databases['main'];
    }

}
