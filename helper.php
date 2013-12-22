<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

final class mod_wow_raid_progress_mop
{

    private $params = null;
    private $raids = array(
        // Siege of Orgrimmar
        6738 => array(
            'link' => 'zone/siege-of-orgrimmar/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Immerseus
                71543 => array(
                    'link' => 'zone/siege-of-orgrimmar/immerseus',
                    'normal' => 23692,
                    'heroic' => 8463
                ),
                // The Fallen Protectors
                71475 => array(
                    'link' => 'zone/siege-of-orgrimmar/fallen-protectors',
                    'normal' => 23693,
                    'heroic' => 8465
                ),
                // Norushen
                71967 => array(
                    'link' => 'zone/siege-of-orgrimmar/norushen',
                    'normal' => 23694,
                    'heroic' => 8466
                ),
                // Sha of Pride
                71734 => array(
                    'link' => 'zone/siege-of-orgrimmar/sha-of-pride',
                    'normal' => 23695,
                    'heroic' => 8467
                ),
                // Galakras
                72957 => array(
                    'link' => 'zone/siege-of-orgrimmar/galakras',
                    'normal' => 23696,
                    'heroic' => 8468
                ),
                // Iron Juggernaut
                71466 => array(
                    'link' => 'zone/siege-of-orgrimmar/iron-juggernaut',
                    'normal' => 23697,
                    'heroic' => 8469
                ),
                // Kor'kron Dark Shaman
                71859 => array(
                    'link' => 'zone/siege-of-orgrimmar/korkron-dark-shaman  ',
                    'normal' => 23698,
                    'heroic' => 8470
                ),
                // General Nazgrim
                71515 => array(
                    'link' => 'zone/siege-of-orgrimmar/general-nazgrim',
                    'normal' => 23699,
                    'heroic' => 8471
                ),
                // Malkorok
                71454 => array(
                    'link' => 'zone/siege-of-orgrimmar/malkorok',
                    'normal' => 23700,
                    'heroic' => 8472
                ),
                // Spoils of Pandaria
                71889 => array(
                    'link' => 'zone/siege-of-orgrimmar/spoils-of-pandaria',
                    'normal' => 23702,
                    'heroic' => 8478
                ),
                // Thok the Bloodthirsty
                71529 => array(
                    'link' => 'zone/siege-of-orgrimmar/thok-the-bloodthirsty',
                    'normal' => 23703,
                    'heroic' => 8479
                ),
                // Siegecrafter Blackfuse
                71504 => array(
                    'link' => 'zone/siege-of-orgrimmar/siegecrafter-blackfuse',
                    'normal' => 23701,
                    'heroic' => 8480
                ),
                // Paragons of the Klaxxi
                71152 => array(
                    'link' => 'zone/siege-of-orgrimmar/paragons-of-the-klaxxi',
                    'normal' => 23704,
                    'heroic' => 8481
                ),
                // Garrosh Hellscream
                71865 => array(
                    'link' => 'zone/siege-of-orgrimmar/garrosh-hellscream',
                    'normal' => 23705,
                    'heroic' => 8482
                )
            )
        ),

        // Throne of Thunder
        6622 => array(
            'link' => 'zone/throne-of-thunder/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Jin'rokh the Breaker
                69465 => array(
                    'link' => 'zone/throne-of-thunder/jinrokh-the-breaker',
                    'normal' => 23072,
                    'heroic' => 8056
                ),
                // Horridon
                68476 => array(
                    'link' => 'zone/throne-of-thunder/horridon',
                    'normal' => 23073,
                    'heroic' => 8057
                ),
                // Council of Elders
                69134 => array(
                    'link' => 'zone/throne-of-thunder/council-of-elders',
                    'normal' => 23074,
                    'heroic' => 8058
                ),
                // Tortos
                67977 => array(
                    'link' => 'zone/throne-of-thunder/tortos',
                    'normal' => 23075,
                    'heroic' => 8059
                ),
                // Megaera
                70212 => array(
                    'link' => 'zone/throne-of-thunder/megaera',
                    'normal' => 23076,
                    'heroic' => 8060
                ),
                // Ji-Kun
                69712 => array(
                    'link' => 'zone/throne-of-thunder/jikun',
                    'normal' => 23077,
                    'heroic' => 8061
                ),
                // Durumu the Forgotten
                68036 => array(
                    'link' => 'zone/throne-of-thunder/durumu-the-forgotten',
                    'normal' => 23078,
                    'heroic' => 8062
                ),
                // Primordius
                69017 => array(
                    'link' => 'zone/throne-of-thunder/primordius',
                    'normal' => 23079,
                    'heroic' => 8063
                ),
                // Dark Animus
                69427 => array(
                    'link' => 'zone/throne-of-thunder/dark-animus',
                    'normal' => 23080,
                    'heroic' => 8064
                ),
                // Iron Qon
                68078 => array(
                    'link' => 'zone/throne-of-thunder/iron-qon',
                    'normal' => 23081,
                    'heroic' => 8065
                ),
                // Twin Consorts
                68905 => array(
                    'link' => 'zone/throne-of-thunder/twin-consorts',
                    'normal' => 23082,
                    'heroic' => 8066
                ),
                // Lei Shen
                68397 => array(
                    'link' => 'zone/throne-of-thunder/lei-shen',
                    'normal' => 23083,
                    'heroic' => 8067
                ),
                // Ra-den
                69473 => array(
                    'link' => 'zone/throne-of-thunder/raden',
                    'normal' => null,
                    'heroic' => 8068
                )
            )
        ),

        // Terrace of Endless Spring
        6067 => array(
            'link' => 'zone/terrace-of-endless-spring/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Protectors of the Endless
                60583 => array(
                    'link' => 'zone/terrace-of-endless-spring/protectors-of-the-endless',
                    'normal' => 19651,
                    'heroic' => 6731
                ),
                // Tsulong
                62442 => array(
                    'link' => 'zone/terrace-of-endless-spring/tsulong',
                    'normal' => 19652,
                    'heroic' => 6732
                ),
                // Lei Shi
                62983 => array(
                    'link' => 'zone/terrace-of-endless-spring/lei-shi',
                    'normal' => 19494,
                    'heroic' => 6733
                ),
                // Sha of Fear
                60999 => array(
                    'link' => 'zone/terrace-of-endless-spring/sha-of-fear',
                    'normal' => 19495,
                    'heroic' => 6734
                )
            )
        ),

        // Heart of Fear
        6297 => array(
            'link' => 'zone/heart-of-fear/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // Imperial Vizier Zor'lok
                62980 => array(
                    'link' => 'zone/heart-of-fear/imperial-vizier-zorlok',
                    'normal' => 19489,
                    'heroic' => 6725
                ),
                // Blade Lord Ta'yak
                62543 => array(
                    'link' => 'zone/heart-of-fear/blade-lord-tayak',
                    'normal' => 19490,
                    'heroic' => 6726
                ),
                // Garalon
                62164 => array(
                    'link' => 'zone/heart-of-fear/garalon',
                    'normal' => 19491,
                    'heroic' => 6727
                ),
                // Wind Lord Mel'jarak
                62397 => array(
                    'link' => 'zone/heart-of-fear/wind-lord-meljarak',
                    'normal' => 19630,
                    'heroic' => 6728
                ),
                // Amber-Shaper Un'sok
                62511 => array(
                    'link' => 'zone/heart-of-fear/ambershaper-unsok',
                    'normal' => 19492,
                    'heroic' => 6729
                ),
                // Grand Empress Shek'zeer
                62837 => array(
                    'link' => 'zone/heart-of-fear/grand-empress-shekzeer',
                    'normal' => 19493,
                    'heroic' => 6730
                )
            )
        ),

        // Mogu'shan Vaults
        6125 => array(
            'link' => 'zone/mogushan-vaults/',
            'stats' => array('kills' => 0, 'mode' => 'normal'),
            'npcs' => array(
                // The Stone Guard
                60047 => array(
                    'link' => 'zone/mogushan-vaults/the-stone-guard',
                    'normal' => 22384,
                    'heroic' => 6719
                ),
                // Feng the Accursed
                60009 => array(
                    'link' => 'zone/mogushan-vaults/feng-the-accursed',
                    'normal' => 19485,
                    'heroic' => 6720
                ),
                // Gara'jal the Spiritbinder
                60143 => array(
                    'link' => 'zone/mogushan-vaults/garajal-the-spiritbinder',
                    'normal' => 19486,
                    'heroic' => 6721
                ),
                // The Spirit Kings
                61421 => array(
                    'link' => 'zone/mogushan-vaults/the-spirit-kings',
                    'normal' => 19487,
                    'heroic' => 6722
                ),
                // Elegon
                60410 => array(
                    'link' => 'zone/mogushan-vaults/elegon',
                    'normal' => 19114,
                    'heroic' => 6723
                ),
                // Will of the Emperor
                60400 => array(
                    'link' => 'zone/mogushan-vaults/will-of-the-emperor',
                    'normal' => 19488,
                    'heroic' => 6724
                )
            )
        )
    );

    public function __construct(JRegistry &$params)
    {
        $this->params = $params;
    }

    public function getRaids()
    {
        if ($this->params->get('mode') == 'auto') {

            $url = 'http://' . $this->params->get('region') . '.battle.net/api/wow/guild/' . $this->params->get('realm') . '/' . $this->params->get('guild') . '?fields=members,achievements';

            $result = $this->remoteContent($url);

            if (!is_object($result)) {
                return $result;
            }

            $this->checkNormal($result->achievements);

            if ($this->params->get('heroic') && $this->params->get('ranks')) {
                $this->checkHeroic($result->members);
            } else {
                // remove Ra-den if only normal mode visible
                if (isset($this->raids[6622])) {
                    unset($this->raids[6622]['npcs'][69473]);
                }
            }

        }

        if ($hidden = $this->params->get('hide')) {
            foreach ($hidden as $hide) {
                unset($this->raids[$hide]);
            }
        }

        $this->adjustments();

        // at last replace links and count mode-kills
        foreach ($this->raids as $zoneId => &$zone) {
            $zone['link'] = $this->link($zone['link'], $zoneId);
            $heroic = $normal = 0;
            foreach ($zone['npcs'] as $npcId => &$npc) {
                $npc['link'] = $this->link($npc['link'], $npcId, true);
                if ($npc['heroic'] === true) {
                    $heroic++;
                }
                if ($npc['normal'] === true) {
                    $normal++;
                }
            }

            if ($normal > 0) {
                $zone['stats']['kills'] = $normal;
            }

            if ($heroic > 0) {
                $zone['stats']['kills'] = $heroic;
                $zone['stats']['mode'] = 'heroic';
            }

            $zone['opened'] = in_array($zoneId, (array)$this->params->get('opened'));

            $zone['stats']['bosses'] = count($zone['npcs']);
            $zone['stats']['percent'] = round(($zone['stats']['kills'] / $zone['stats']['bosses']) * 100);
        }

        return $this->raids;
    }

    private function remoteContent($url)
    {
        $cache = JFactory::getCache('wow', 'output');
        $cache->setCaching(1);
        $cache->setLifeTime($this->params->get('cache_time', 24) * 60 + rand(0, 60)); // randomize cache time a little bit for each url

        $key = md5($url);

        if (!$result = $cache->get($key)) {
            try {
                $http = JHttpFactory::getHttp();
                $http->setOption('userAgent', 'Joomla! ' . JVERSION . '; WoW Raid Progress - MoP; php/' . phpversion());

                $result = $http->get($url, null, $this->params->get('timeout', 10));
            } catch (Exception $e) {
                return $e->getMessage();
            }

            $cache->store($result, $key);
        }

        if ($result->code != 200) {
            return __CLASS__ . ' HTTP-Status ' . JHtml::_('link', 'http://wikipedia.org/wiki/List_of_HTTP_status_codes#' . $result->code, $result->code, array('target' => '_blank'));
        }

        return json_decode($result->body);
    }

    private function checkNormal(stdClass $achievements)
    {
        foreach ($this->raids as &$zone) {
            foreach ($zone['npcs'] as &$npc) {
                $npc['normal'] = in_array($npc['normal'], $achievements->criteria);
            }
        }
    }

    private function checkHeroic(array &$members)
    {
        $heroicIds = $this->getHeroicIDs();
        foreach ($members as &$member) {
            if (in_array($member->rank, $this->params->get('ranks'))) {
                $member->achievements = $this->loadMember($member->character->name);
                if ($member->achievements) {
                    foreach ($heroicIds as $id => $zoneNpc) {
                        list ($npc, $zone) = explode(':', $zoneNpc, 2);
                        if (in_array($id, $member->achievements->achievementsCompleted)) {
                            $this->raids[$zone]['npcs'][$npc]['heroic']++;
                        }
                    }
                }
            }
        }

        foreach ($this->raids as &$zone) {
            foreach ($zone['npcs'] as &$npc) {
                $npc['heroic'] = (bool)($npc['heroic'] >= $this->params->get('successful', 5));
            }
        }
    }

    private function getHeroicIDs()
    {
        $result = array();
        foreach ($this->raids as $zoneId => &$zone) {
            foreach ($zone['npcs'] as $npc => &$modes) {
                $result[$modes['heroic']] = $npc . ':' . $zoneId;
                $modes['heroic'] = 0;
            }
        }
        return $result;
    }

    private function loadMember($name)
    {
        $url = 'http://' . $this->params->get('region') . '.battle.net/api/wow/character/' . $this->params->get('realm') . '/' . $name . '?fields=achievements';

        $result = $this->remoteContent($url);

        if (!is_object($result) || !isset($result->achievements)) {
            return false;
        }

        return $result->achievements;
    }

    private function adjustments()
    {
        foreach ($this->raids as $zoneId => &$zone) {
            foreach ($zone['npcs'] as $npcId => &$npc) {
                if ($npc['heroic'] === true || $npc['normal'] === true) {
                    continue;
                }
                switch ($this->params->get('adjust_' . $npcId)) {
                    default:
                        continue;
                        break;

                    case 'no':
                        $npc['normal'] = false;
                        $npc['heroic'] = false;
                        break;

                    case 'normal':
                        $npc['normal'] = true;
                        break;

                    case 'heroic':
                        $npc['heroic'] = true;
                        break;
                }
            }
        }
    }

    private function link($link, $id, $npc = false)
    {
        if ($npc) {
            $sites['battle.net'] = 'http://' . $this->params->get('region') . '.battle.net/wow/' . $this->params->get('lang') . '/' . $link;
            $sites['wowhead.com'] = 'http://' . $this->params->get('lang') . '.wowhead.com/npc=' . $id;
            $sites['wowdb.com'] = 'http://www.wowdb.com/npcs/' . $id;
        } else {
            $sites['battle.net'] = 'http://' . $this->params->get('region') . '.battle.net/wow/' . $this->params->get('lang') . '/' . $link;
            $sites['wowhead.com'] = 'http://' . $this->params->get('lang') . '.wowhead.com/zone=' . $id;
            $sites['wowdb.com'] = 'http://www.wowdb.com/zones/' . $id;
        }

        return $sites[$this->params->get('link')];
    }
}