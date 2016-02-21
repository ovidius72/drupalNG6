<?php

namespace Drupal\ng6_resources\Plugin\resource\files;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceInterface;

/**
 * Class Files__1_0
 * @package Drupal\ng6_resources\Plugin\resource\files
 *
 * @Resource(
 *   name = "files:1.0",
 *   resource = "files",
 *   label = "Files",
 *   description = "Export the files with all authentication providers.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "file",
 *     "bundles": {
 *       "file"
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Files__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    unset($public_fields['self']);
    unset($public_fields['label']);

    $public_fields['meta'] = array(
      'property' => 'fid',
      'process_callbacks' => array(
        '\Drupal\ng6_resources\utils\NG6_Utils::getFile'
      ),
    );

    return $public_fields;
  }
}
