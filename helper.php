<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

abstract class mod_wow_raid_progress_mop
{

    private static $maxLevel = 90;

    // nHC criteria
    private static $raids = array(
        6668 => array(22384, 19485, 19486, 19487, 19114, 19488), // Mogu'shan Vaults
        6669 => array(19489, 19490, 19491, 19630, 19492, 19493), // Heart of Fear
        6670 => array(19651, 19652, 19494, 19495), // Terrace of Endless Spring
        8140 => array(23072, 23073, 23074, 23075, 23076, 23077, 23078, 23079, 23080, 23081, 23082, 23083), // Throne of Thunder
        8510 => array(23692, 23693, 23694, 23695, 23696, 23697, 23698, 23699, 23700, 23702, 23703, 23701, 23704, 23705) // Siege of Orgrimmar
    );

    public static function _(JRegistry &$params)
    {
        $url = 'http://' . $params->get('region') . '.battle.net/api/wow/guild/' . $params->get('realm') . '/' . $params->get('guild') . '?fields=members';

        $cache = JFactory::getCache('wow', 'output');
        $cache->setCaching(1);
        $cache->setLifeTime($params->get('cache_time', 24) * 60);

        $key = md5($url);

        if (!$result = $cache->get($key)) {
            try {
                $http = new JHttp(new JRegistry, new JHttpTransportCurl(new JRegistry));
                $http->setOption('userAgent', 'Joomla! ' . JVERSION . '; WoW Raid Progress - MoP; php/' . phpversion());

                $result = $http->get($url, null, $params->get('timeout', 10));
            } catch (Exception $e) {
                return $e->getMessage();
            }

            $cache->store($result, $key);
        }

        if ($result->code != 200) {
            return __CLASS__ . ' HTTP-Status ' . JHtml::_('link', 'http://wikipedia.org/wiki/List_of_HTTP_status_codes#' . $result->code, $result->code, array('target' => '_blank'));
        }

        $result->body = json_decode($result->body);

        $approved = array();
        foreach ($result->body->members as $member) {
            if ($member->character->level == self::$maxLevel) {
                $approved[] = self::loadMember($params, $member->character->name);
            }
        }

        domix($approved,1);

        if (empty($approved)) {
            return 'no max level chars found?!';
        }

        domix($result->body, 1);
    }

    private static function loadMember(JRegistry &$params, $name)
    {
        $url = 'http://' . $params->get('region') . '.battle.net/api/wow/character/' . $params->get('realm') . '/' . $name . '?fields=achievements';

        $cache = JFactory::getCache('wow', 'output');
        $cache->setCaching(1);
        $cache->setLifeTime($params->get('cache_time', 24) * 60 + rand(0, 60)); // randomize cache time for each member

        $key = md5($url);

        if (!$result = $cache->get($key)) {
            try {
                $http = new JHttp(new JRegistry, new JHttpTransportCurl(new JRegistry));
                $http->setOption('userAgent', 'Joomla! ' . JVERSION . '; WoW Raid Progress - MoP; php/' . phpversion());

                $result = $http->get($url, null, $params->get('timeout', 10));
            } catch (Exception $e) {
                return $e->getMessage();
            }

            $cache->store($result, $key);
        }

        if ($result->code != 200) {
            return false;
        }

        return json_decode($result->body);

    }
}