<?php

namespace Drupal\address_cn\Plugin\GraphQL\Fields;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\graphql_core\GraphQL\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Subdivision code.
 *
 * @GraphQLField(
 *   id = "subdivision_code",
 *   name = "code",
 *   type = "String",
 *   types = { "AddressSubdivision" }
 * )
 */
class SubdivisionCode extends FieldPluginBase {

  use DependencySerializationTrait;

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    if (is_array($value)) {
      yield $value['code'];
    }
  }

}