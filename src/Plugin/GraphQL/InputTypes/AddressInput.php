<?php

namespace Drupal\address_cn\Plugin\GraphQL\InputTypes;

use Drupal\graphql_core\GraphQL\InputTypePluginBase;

/**
 * Address input type.
 *
 * @GraphQLInputType(
 *   id = "address_input",
 *   name = "AddressInput",
 *   fields = {
 *     "contact" = {
 *       "type" = "String",
 *       "nullable" = false,
 *       "multi" = false,
 *     },
 *     "province" = {
 *       "type" = "String",
 *       "nullable" = false,
 *       "multi" = false,
 *     },
 *     "city" = {
 *       "type" = "String",
 *       "nullable" = false,
 *       "multi" = false,
 *     },
 *     "district" = {
 *       "type" = "String",
 *       "nullable" = true,
 *       "multi" = false,
 *     },
 *     "streetAddress" = {
 *       "type" = "String",
 *       "nullable" = false,
 *       "multi" = false,
 *     },
 *   },
 * )
 *
 * Note: the 'district' is nullable.
 */
class AddressInput extends InputTypePluginBase {

}