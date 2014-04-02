<?php
/**
 * @author xiangshouding
 */
class IpUtil {
    private static $ips = null;

    public static function inRange($ip, $ips)
    {
        $ip = trim($ip);
        if ($ip == '')
        {
            return FALSE;
        }

        self::$ips = trim($ips);
        $ip_long = ip2long($ip);
        $range = self::getRange();
        if ($ip_long >= $range['start'] && $ip_long <= $range['end'])
        {
            return TRUE;
        }
        return FALSE;
    }

    private static function getRange()
    {
        $p = strpos(self::$ips, '-');
        if (FALSE == $p)
        {
            return array(
                'start' =>  ip2long(self::$ips),
                'end'   =>  ip2long(self::$ips)
            );
        }

        $sp = strrpos(self::$ips, '.');
        $ip_root = substr(self::$ips, 0, $sp+1);
        list($ip_start, $ip_end) = explode('-', substr(self::$ips, $sp+1));
        return array(
            'start' => ip2long($ip_root . $ip_start),
            'end'   => ip2long($ip_root . $ip_end)
        );
    }
}

?>
