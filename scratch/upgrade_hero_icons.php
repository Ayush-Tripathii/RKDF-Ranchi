<?php
$dir = realpath(__DIR__ . '/../');
$files = glob($dir . '/*.php');

$emoji_map = [
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
];

$modified = [];

foreach ($files as $filepath) {
    $filename = basename($filepath);
    if ($filename === 'index.php') continue; // NEVER touch index.php
    
    $content = file_get_contents($filepath);
    $orig = $content;
    
    foreach ($emoji_map as $emoji => $icon) {
        if (strpos($content, $emoji) !== false) {
            // Replace <span class="hero-pill... >\s*EMOJI\s*(.*?)</span>
            // Or standalone EMOJI text
            $content = str_replace($emoji . ' ', "<?= lucide_icon('{$icon}', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> ", $content);
            $content = str_replace($emoji, "<?= lucide_icon('{$icon}', 'w-3.5 h-3.5 text-gold inline-block shrink-0') ?> ", $content);
        }
    }
    
    if ($content !== $orig) {
        file_put_contents($filepath, $content);
        $modified[] = $filename;
    }
}

echo "Updated pages with clean Lucide SVG icons:\n";
print_r($modified);
