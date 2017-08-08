<?php

namespace Drupal\address_cn\Plugin\GraphQL\Fields;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\graphql_core\GraphQL\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Subdivision has children.
 *
 * @GraphQLField(
 *   id = "subdivision_has_children",
 *   name = "hasChildren",
 *   type = "Boolean",
 *   types = { "AddressSubdivision" }
 * )
 */
class SubdivisionHasChildren extends FieldPluginBase {

  use DependencySerializationTrait;

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    if (is_array($value)) {
      yield $value['has_children'];
    }
  }

}