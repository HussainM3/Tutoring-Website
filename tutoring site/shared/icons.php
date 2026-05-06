<?php
function sm_icon($name)
{
    $icons = [
        'video' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h6A2.5 2.5 0 0 1 15 7.5v9a2.5 2.5 0 0 1-2.5 2.5h-6A2.5 2.5 0 0 1 4 16.5v-9Z"/><path d="m15 10 5-3v10l-5-3v-4Z"/></svg>',
        'award' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15.5a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13Z"/><path d="m8.5 14.2-1.2 7.3 4.7-2.8 4.7 2.8-1.2-7.3"/></svg>',
        'levels' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 17h4V7H4v10Z"/><path d="M10 17h4V4h-4v13Z"/><path d="M16 17h4v-7h-4v7Z"/><path d="M3 20h18"/></svg>',
        'school' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m3 9 9-5 9 5-9 5-9-5Z"/><path d="M7 11.5V17c2.8 2 7.2 2 10 0v-5.5"/><path d="M20 10v6"/></svg>',
        'exam' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3h9l3 3v15H6V3Z"/><path d="M15 3v4h4"/><path d="M9 11h6"/><path d="M9 15h6"/><path d="M9 19h3"/></svg>',
        'mail' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h16v12H4V6Z"/><path d="m4 7 8 6 8-6"/></svg>',
        'phone' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 4 5 7c1 6 6 11 12 12l3-3-4-4-2 2c-2.4-1-4-2.6-5-5l2-2-3-3Z"/></svg>',
        'check' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/></svg>',
    ];

    return $icons[$name] ?? '';
}
?>
