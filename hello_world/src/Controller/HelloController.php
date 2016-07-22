<?php

/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

    
    
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Ciao mondo, dal controller di Hello', array(
                '@name' => $name,
                    )
            ),
        );
    }

    
    
}
