<?php

namespace Drupal\address_cn\Plugin\GraphQL\Types;

use Drupal\graphql_core\GraphQL\TypePluginBase;

/**
 * GraphQL type for Address.
 *
 * @GraphQLType(
 *   id = "address",
 *   name = "Address"
 * )
 *
 * @see \Drupal\address\Plugin\Field\FieldFormatter\AddressDefaultFormatter::viewElement()
 */
class Address extends TypePluginBase {

}