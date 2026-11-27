<?php
function content_json(string $relative): array {
    $path = dirname(__DIR__) . '/public/data/' . $relative;
    return json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);
}
function resolve_saved_item(string $key): ?array {
    $records = content_json('countries.json');
    if (preg_match('/^country:([A-Z]{3})$/D', $key, $match)) {
        foreach ($records as $record) {
            if (($record['cca3'] ?? '') === $match[1]) {
                return ['key' => $key, 'country' => $match[1], 'type' => 'Country', 'name' => $record['name']['common']];
            }
        }
    }
    if (preg_match('/^site:[a-z0-9-]{1,80}$/D', $key)) {
        foreach (content_json('editorial/index.json') as $code) {
            if (!preg_match('/^[A-Z]{3}$/D', $code)) continue;
            foreach (content_json('editorial/' . $code . '.json')['sites'] ?? [] as $site) {
                if ($key === 'site:' . $site['id']) {
                    return ['key' => $key, 'country' => $code, 'type' => 'Site', 'name' => $site['name']];
                }
            }
        }
    }
    return null;
}
