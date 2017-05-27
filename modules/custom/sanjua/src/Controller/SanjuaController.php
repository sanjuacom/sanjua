<?php

namespace Drupal\sanjua\Controller;

use Drupal\Core\Controller\ControllerBase;

class SanjuaController extends ControllerBase {
  /**
   * @return array
   */
  public function content() {
    return array(
      '#title' => 'General Settings',
      '#markup' => 'Description for my first module in drupal 8',
    );
  }
}