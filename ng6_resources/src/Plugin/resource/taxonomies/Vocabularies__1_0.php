<?php

namespace Drupal\ng6_resources\Plugin\resource\taxonomies;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceInterface;

/**
 * Class Vocabularies__1_0
 * @package Drupal\ng6_resources\Plugin\resource\taxonomies
 *
 * @Resource(
 *   name = "vocabularies:1.0",
 *   resource = "vocabularies",
 *   label = "Vocabularies",
 *   description = "Export the vocabularies with all authentication providers.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "taxonomy_vocabulary",
 *     "bundles": {
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Vocabularies__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    unset($public_fields['self']);
    unset($public_fields['label']);

    $public_fields['vid'] = array(
      'property' => 'vid',
    );

    $public_fields['name'] = array(
      'property' => 'name',
    );

    $public_fields['machine_name'] = array(
      'property' => 'machine_name',
    );

    $public_fields['description'] = array(
      'property' => 'description',
    );

    return $public_fields;
  }
}

