<?php

$vendorDir = dirname(__DIR__);

return array (
  'topshelfcraft/wordsmith' => 
  array (
    'class' => 'topshelfcraft\\wordsmith\\Wordsmith',
    'basePath' => $vendorDir . '/topshelfcraft/wordsmith/src',
    'handle' => 'wordsmith',
    'aliases' => 
    array (
      '@topshelfcraft/wordsmith' => $vendorDir . '/topshelfcraft/wordsmith/src',
    ),
    'name' => 'Wordsmith',
    'version' => '3.0.3',
    'schemaVersion' => '0.0.0.0',
    'description' => '...because you have the best words.',
    'developer' => 'Michael Rog',
    'developerUrl' => 'https://topshelfcraft.com',
    'changelogUrl' => 'https://raw.githubusercontent.com/topshelfcraft/wordsmith/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'emoji' => 'topshelfcraft\\wordsmith\\services\\EmojiService',
      'smith' => 'topshelfcraft\\wordsmith\\services\\WordsmithService',
      'typography' => 'topshelfcraft\\wordsmith\\services\\TypographyService',
    ),
  ),
);
