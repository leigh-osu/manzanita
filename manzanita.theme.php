<?php

/**
 * @file
 * Functions to support the Manzanita theme.
 */

/**
 * Get the logo path for the provided Companion option.
 *
 * @param string $companion_logo
 *   The Theme option from madrone_companion_logo.
 *
 * @return array
 *   An associative array for the Logo Path and Link Path.
 */
function get_companion_logo(string $companion_logo): array {
  return match ($companion_logo) {
    'cascades' => [
      'logo-name' => 'cascades',
      'logo-path' => '/' . Drupal::theme()
          ->getActiveTheme()
          ->getPath() . '/assets/osucascades.svg',
      'link-path' => Url::fromRoute('<front>')->toString(),
      'alt-text' => 'OSU-Cascades homepage',
    ],
    default => [
      'logo-name' => 'default',
      'logo-path' => '/' . Drupal::theme()
          ->getActiveTheme()
          ->getPath() . '/logo.png',
      'link-path' => 'https://oregonstate.edu/',
      'alt-text' => 'Oregon State University homepage',
    ]
  };
}
