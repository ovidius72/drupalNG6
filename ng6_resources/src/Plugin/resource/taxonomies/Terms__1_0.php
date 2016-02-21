<?php

namespace Drupal\ng6_resources\Plugin\resource\taxonomies;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceInterface;

/**
 * Class Terms__1_0
 * @package Drupal\ng6_resources\Plugin\resource\taxonomies
 *
 * @Resource(
 *   name = "terms:1.0",
 *   resource = "terms",
 *   label = "Terms",
 *   description = "Export the terms with all authentication providers.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "taxonomy_term",
 *     "bundles": {
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Terms__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    unset($public_fields['self']);
    unset($public_fields['label']);

    $public_fields['title'] = array(
      'wrapper_method' => 'label',
      'wrapper_method_on_entity' => TRUE,
    );

    $public_fields['tid'] = array(
      'property' => 'tid',
    );

    $public_fields['description'] = array(
      'property' => 'description',
    );

    $public_fields['vocabulary'] = array(
      'property' => 'tid',
      'resource' => array(
        'name' => 'vocabularies'
      ),
    );

    $public_fields['weight'] = array(
      'property' => 'weight',
    );

    return $public_fields;
  }
}

