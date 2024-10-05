<?php
class UtilsClass
{
    public static function skinsFromJson(): array
    {
        $skins = [];
        $json = json_decode(file_get_contents(__DIR__ . "/../data/skins.json"), true);

        foreach ($json as $skin) {
            $skins[(int) $skin['weapon_defindex']][(int) $skin['paint']] = [
                'weapon_name' => $skin['weapon_name'],
                'paint_name' => $skin['paint_name'],
                'image_url' => $skin['image'],
            ];
        }

        return $skins;
    }

    public static function getDataFromJson(string $fileName): array
    {
        $skins = [];
        $filePath = __DIR__ . "/../data/" . $fileName;

        if (!file_exists($filePath)) {
            throw new Exception("File not found: " . $filePath);
        }
    
        $json = json_decode(file_get_contents($filePath), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Error decoding JSON: " . json_last_error_msg());
        }
    
        return $json;
    }

    public static function getGloveTypes(): array
    {
        $gloves = self::getDataFromJson('gloves.json');
        $uniqueGloves = [];
    
        foreach ($gloves as &$glove) {
            if (isset($glove['weapon_defindex'])) {   

                $weaponDefIndex = $glove['weapon_defindex'];

                if (!isset($uniqueGloves[$weaponDefIndex])) {
                    $uniqueGloves[$weaponDefIndex] = [
                        'weapon_defindex' => $weaponDefIndex,
                        'paint_name' => rtrim(explode("|", $glove['paint_name'])[0]),
                        'image_url' => $glove['image_url'],
                        'paint' => $glove['paint'],
                        'gloves' => []
                    ];
                }
    
                $uniqueGloves[$weaponDefIndex]['gloves'][] = $glove;
            }
        }

        return array_values($uniqueGloves);
    }

    public static function getAgentTypes(): array
    {
        $agents = self::getDataFromJson('agents.json');
        $teamAgents = [];

        foreach ($agents as $agent) {
            if (isset($agent['team'])) {
                $teamId = $agent['team'];
                if (!isset($teamAgents[$teamId])) {
                    $teamAgents[$teamId] = [
                        'team' => $teamId,
                        'agents' => []
                    ];
                }
                $teamAgents[$teamId]['agents'][] = $agent;
            }
        }
        return array_values($teamAgents);
    }

    public static function getWeaponsFromArray()
    {
        $weapons = [];
        $temp = self::skinsFromJson();

        foreach ($temp as $key => $value) {
            if (key_exists($key, $weapons))
                continue;

            $weapons[$key] = [
                'weapon_name' => $value[0]['weapon_name'],
                'paint_name' => $value[0]['paint_name'],
                'image_url' => $value[0]['image_url'],
            ];
        }

        return $weapons;
    }

    public static function getKnifeTypes()
    {
        $knifes = [];
        $temp = self::getWeaponsFromArray();

        foreach ($temp as $key => $weapon) {
            if (
                !in_array($key, [
                    500,
                    503,
                    505,
                    506,
                    507,
                    508,
                    509,
                    512,
                    514,
                    515,
                    516,
                    517,
                    518,
                    519,
                    520,
                    521,
                    522,
                    523,
                    525,
                    526
                ])
            )
                continue;

            $knifes[$key] = [
                'weapon_name' => $weapon['weapon_name'],
                'paint_name' => rtrim(explode("|", $weapon['paint_name'])[0]),
                'image_url' => $weapon['image_url'],
            ];
            $knifes[0] = [
                'weapon_name' => "weapon_knife",
                'paint_name' => "Default knife",
                'image_url' => "https://raw.githubusercontent.com/Nereziel/cs2-WeaponPaints/main/website/img/skins/weapon_knife.png",
            ];
        }

        ksort($knifes);
        return $knifes;
    }

    public static function getSelectedSkins(array $temp)
    {
        $selected = [];

        foreach ($temp as $weapon) {
            $selected[$weapon['weapon_defindex']] =  [
                'weapon_paint_id' => $weapon['weapon_paint_id'],
                'weapon_seed' => $weapon['weapon_seed'],
                'weapon_wear' => $weapon['weapon_wear'],
            ];
        }

        return $selected;
    }
}
