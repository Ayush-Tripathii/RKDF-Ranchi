<?php
$dir = realpath(__DIR__ . '/../');
$files = glob($dir . '/*.php');

$emoji_map = [
    '👑' => 'award',
    '🌟' => 'sparkles',
    '⭐' => 'sparkles',
    '🏛️' => 'landmark',
    '🎓' => 'graduation-cap',
    '🌐' => 'globe',
    '🌱' => 'sparkles',
    '📜' => 'file-text',
    '⚖️' => 'scale',
    '🛡️' => 'shield-check',
    '💼' => 'briefcase',
    '📊' => 'award',
    '🔬' => 'microscope',
    '✨' => 'sparkles',
    '📞' => 'phone-call',
    '📧' => 'mail',
    '🏆' => 'trophy',
    '📈' => 'award',
    '📅' => 'calendar',
    '📍' => 'map-pin',
    '👤' => 'user',
    '👥' => 'users',
    '💻' => 'laptop',
    '🏢' => 'building-2',
    '📋' => 'clipboard-check',
    '💰' => 'coins',
    '📖' => 'book-open',
    '📑' => 'file-text',
    '🔔' => 'bell',
    '💡' => 'lightbulb',
    '🎯' => 'award',
    '🤝' => 'heart-handshake',
    '💊' => 'heart-pulse',
    '🏥' => 'building-2',
    '📝' => 'file-text',
    '✉' => 'mail',
    '✉️' => 'mail',
    '🔒' => 'shield-check',
    '👨‍🏫' => 'user-check',
    '👨' => 'user',
    '🏫' => 'landmark',
    '🎭' => 'sparkles',
    '📸' => 'camera',
    '🚀' => 'sparkles',
    '📰' => 'file-text',
    '🎖' => 'award',
    '🎖️' => 'award',
    '🧪' => 'flask-conical',
    '📚' => 'book-open',
    '🔍' => 'search',
    '⚡' => 'sparkles',
    '🩺' => 'heart-pulse',
];

$all_emojis_pattern = '/[\x{1F300}-\x{1F9FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}]/u';

foreach ($files as $filepath) {
    $filename = basename($filepath);
    if ($filename === 'index.php') continue;
    
    $content = file_get_contents($filepath);
    $orig = $content;
    
    foreach ($emoji_map as $em => $icon) {
        if (strpos($content, $em) !== false) {
            $content = str_replace($em . ' ', "<?= lucide_icon('{$icon}', 'w-3.5 h-3.5 text-gold shrink-0') ?> ", $content);
            $content = str_replace($em, "<?= lucide_icon('{$icon}', 'w-3.5 h-3.5 text-gold shrink-0') ?> ", $content);
        }
    }
    
    if ($content !== $orig) {
        file_put_contents($filepath, $content);
        echo "Updated $filename\n";
    }
}
