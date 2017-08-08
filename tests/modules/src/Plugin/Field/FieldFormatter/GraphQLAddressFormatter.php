<?php

namespace Drupal\address_cn_test\Plugin\Field\FieldFormatter;

use Drupal\graphql_content\GraphQLFieldFormatterBase;

/**
 * Placeholder formatter for GraphQL address fields.
 *
 * @FieldFormatter(
 *   id = "graphql_address",
 *   label = @Translation("GraphQL Address"),
 *   field_types = { "address" }
 * )
 */
class GraphQLAddressFormatter extends GraphQLFieldFormatterBase {

}
