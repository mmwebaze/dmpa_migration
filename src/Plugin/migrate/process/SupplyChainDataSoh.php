<?php
namespace Drupal\dmpa_migration\Plugin\migrate\process;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Processes SOH date to timestamp
 *
 * @MigrateProcessPlugin(
 *   id = "supply_chain_data_soh"
 * )
 *
 */
class SupplyChainDataSoh extends ProcessPluginBase {
    public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property){

        $timestamp = strtotime($value);

        //print($value.' -- '.$timestamp."\n");
        //die();
        return $timestamp;
    }
}