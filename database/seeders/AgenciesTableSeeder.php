<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([
            'name' => 'Société de transport de Montréal',
            'color' => '#00aeef',
            'text_color' => '#ffffff',
            'vehicles_type' => 'bus',
            'slug' => 'stm',
            'is_active' => true,
            'static_gtfs_url' => 'http://www.stm.info/sites/default/files/gtfs/gtfs_stm.zip',
            'realtime_url' => 'https://api.stm.info/pub/od/gtfs-rt/ic/v1/vehiclePositions',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": "apikey", "param_value": null, "header_value": null, "realtime_method": "post"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Trains',
            'color' => '#000000',
            'text_color' => '#FFFFFF',
            'vehicles_type' => 'train',
            'slug' => 'trains',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/trains/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'Société de transport de Laval',
            'color' => '#84c444',
            'text_color' => '#ffffff',
            'vehicles_type' => 'bus',
            'slug' => 'stl',
            'is_active' => true,
            'static_gtfs_url' => 'http://www.stl.laval.qc.ca/opendata/GTF_STL.zip',
            'realtime_url' => 'http://webservices.nextbus.com/service/publicXMLFeed?command=vehicleLocations&a=stl&t=0',
            'realtime_type' => 'nextbus',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'Réseau de transport de Longueuil',
            'color' => '#a80532',
            'text_color' => '#FFFFFF',
            'vehicles_type' => 'bus',
            'slug' => 'rtl',
            'is_active' => true,
            'static_gtfs_url' => 'http://www.rtl-longueuil.qc.ca/transit/latestfeed/RTL.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=rtl&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Laurentides',
            'color' => '#00A586',
            'text_color' => '#ffffff',
            'vehicles_type' => 'bus',
            'slug' => 'la',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citla/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citla&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Vallée-du-Richelieu',
            'color' => '#1F96A4',
            'text_color' => '#ffffff',
            'vehicles_type' => 'bus',
            'slug' => 'vr',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citvr/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citvr&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Le Richelain',
            'color' => '#7C5D81',
            'text_color' => '#FFFFFF',
            'vehicles_type' => 'bus',
            'slug' => 'lr',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citlr/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citlr&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo L\'Assomption',
            'color' => '#0071BA',
            'text_color' => '#FFFFFF',
            'vehicles_type' => 'bus',
            'slug' => 'lasso',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/mrclasso/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=mrclasso&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Sainte-Julie',
            'color' => '#F7A389',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'sju',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/omitsju/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=omitsju&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Sud-Ouest',
            'color' => '#B94065',
            'text_color' => '#FFFFFF',
            'vehicles_type' => 'bus',
            'slug' => 'so',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citso/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citso&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Haut-Saint-Laurent',
            'color' => '#DBE9D0',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'hsl',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/cithsl/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=cithsl&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo La Presqu\'Île',
            'color' => '#fcefc5',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'pi',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citpi/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citpi&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Roussillon',
            'color' => '#CEDFE4',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'rous',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citrous/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citrous&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Sorel-Varennes',
            'color' => '#EFDCCE',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'sv',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citsv/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citsv&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Terrebonne-Mascouche',
            'color' => '#9ED1C6',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'tm',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/mrclm/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=mrclm&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);

        DB::table('agencies')->insert([
            'name' => 'exo Chambly-Richelieu-Carignan',
            'color' => '#f1776a',
            'text_color' => '#000000',
            'vehicles_type' => 'bus',
            'slug' => 'crc',
            'is_active' => true,
            'static_gtfs_url' => 'https://exo.quebec/xdata/citcrc/google_transit.zip',
            'realtime_url' => 'http://opendata.rtm.quebec:2539/ServiceGTFSR/VehiclePosition.pb?agency=citcrc&token=',
            'realtime_type' => 'gtfsrt',
            'realtime_options' => '{ "param_name": null, "header_name": null, "param_value": null, "header_value": null, "realtime_method": "get"}',
            'region_id' => 1,
        ]);
    }
}
