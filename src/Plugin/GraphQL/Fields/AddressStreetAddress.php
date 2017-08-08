<?php

namespace Drupal\address_cn\Plugin\GraphQL\Fields;

use Drupal\address\AddressInterface;
use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\graphql_core\GraphQL\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * Address street address (address line1).
 *
 * @GraphQLField(
 *   id = "address_street_address",
 *   name = "streetAddress",
 *   type = "String",
 *   types = { "Address" }
 * )
 */
class AddressStreetAddress extends FieldPluginBase {

  use DependencySerializationTrait;

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    if ($value instanceof AddressInterface) {
      yield $value->getAddressLine1();
    }
  }

}
