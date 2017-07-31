<?php

namespace Drupal\sanjua\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'sanjua' block.
 *
 * @Block(
 *   id = "sanjua_block",
 *   admin_label = @Translation("Sanjua block"),
 *   category = @Translation("Custom sanjua block example")
 * )
*/
class SanjuaBlock extends BlockBase {

  /**
   * Builds and returns the renderable array for this block plugin.
   *
   * If a block should not be rendered because it has no content, then this
   * method must also ensure to return no content: it must then only return an
   * empty array, or an empty array with #cache set (with cacheability metadata
   * indicating the circumstances for it being empty).
   *
   * @return array
   *   A renderable array representing the content of the block.
   *
   * @see \Drupal\block\BlockViewBuilder
   */
  public function build() {
    return array(
      '#title' => 'Block title',
      '#markup' => 'This is a block custom per test drpal 8.',
    );
  }
}