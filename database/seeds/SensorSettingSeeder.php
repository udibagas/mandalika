<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'parameter' => 'data1',
                'description' => 'Arah angin',
                'height' => 100,
                'min_value' => 0,
                'max_value' => 360,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'no update',
                    90 => 'timur',
                    180 => 'selatan',
                    270 => 'barat',
                    360 => 'utara'
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data2',
                'description' => 'Kecepatan angin',
                'height' => 100,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data3',
                'description' => 'Suhu',
                'height' => 100,
                'min_value' => 0,
                'max_value' => 1000,
                'unit' => 'F',
                'value_formatter' => 'data / 10',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data4',
                'description' => 'Kelembaban',
                'height' => 100,
                'min_value' => 0,
                'max_value' => 100,
                'unit' => '%RH',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data5',
                'description' => 'Tekanan udara',
                'height' => 100,
                'min_value' => 20,
                'max_value' => 35,
                'unit' => 'inHg',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data6',
                'description' => 'Arah angin',
                'height' => 70,
                'min_value' => 0,
                'max_value' => 360,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'no update',
                    90 => 'timur',
                    180 => 'selatan',
                    270 => 'barat',
                    360 => 'utara'
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data7',
                'description' => 'Kecepatan angin',
                'height' => 70,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data8',
                'description' => 'Arah angin',
                'height' => 40,
                'min_value' => 0,
                'max_value' => 360,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'no update',
                    90 => 'timur',
                    180 => 'selatan',
                    270 => 'barat',
                    360 => 'utara'
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data9',
                'description' => 'Kecepatan angin',
                'height' => 40,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data10',
                'description' => 'Arah angin',
                'height' => 10,
                'min_value' => 0,
                'max_value' => 360,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'no update',
                    90 => 'timur',
                    180 => 'selatan',
                    270 => 'barat',
                    360 => 'utara'
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data11',
                'description' => 'Kecepatan angin',
                'height' => 10,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data12',
                'description' => 'Suhu',
                'height' => 10,
                'min_value' => 0,
                'max_value' => 1000,
                'unit' => 'F',
                'value_formatter' => 'data / 10',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data13',
                'description' => 'Kelembaban',
                'height' => 10,
                'min_value' => 0,
                'max_value' => 100,
                'unit' => '%RH',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data14',
                'description' => 'Tekanan udara',
                'height' => 10,
                'min_value' => 20,
                'max_value' => 35,
                'unit' => 'inHg',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data15',
                'description' => 'Barometric trend 3 jam terkahir',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'steady',
                    20 => 'raising slowly',
                    60 => 'raising rapidly',
                    196 => 'falling rapidly',
                    236 => 'falling slowly',
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data16',
                'description' => 'Tekanan udara',
                'height' => 2,
                'min_value' => 20,
                'max_value' => 35,
                'unit' => 'inHg',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data17',
                'description' => 'Suhu',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 1000,
                'unit' => 'F',
                'value_formatter' => 'data / 10',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data18',
                'description' => 'Kecepatan angin',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data19',
                'description' => 'Arah angin',
                'height' => 10,
                'min_value' => 0,
                'max_value' => 360,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    0 => 'no update',
                    90 => 'timur',
                    180 => 'selatan',
                    270 => 'barat',
                    360 => 'utara'
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data20',
                'description' => 'Kecepatan angin rata - rata 10 menit terakhir',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => 'mph',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data21',
                'description' => 'Kelembaban',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 100,
                'unit' => '%RH',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data22',
                'description' => 'Suhu luar',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 1000,
                'unit' => 'F',
                'value_formatter' => 'data / 10',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data23',
                'description' => 'Kelembaban luar',
                'height' => 2,
                'min_value' => 0,
                'max_value' => 100,
                'unit' => '%RH',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data24',
                'description' => 'Rata - rata curah hujan',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 655,
                'unit' => 'inch',
                'value_formatter' => 'data / 100',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data25',
                'description' => 'UV Index',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 255,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data26',
                'description' => 'Radiasi matahari',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 65535,
                'unit' => 'watt/m2',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data27',
                'description' => 'Badai hujan',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 65535,
                'unit' => 'inch',
                'value_formatter' => 'data / 100',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data28',
                'description' => 'Tanggal permulaan badai terjadi',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 100,
                'unit' => '',
                'value_formatter' => '\\App\\SensorSetting::decimalToDate(data)',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'none',
            ],
            [
                'parameter' => 'data29',
                'description' => 'Jumlah hujan hari ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 655,
                'unit' => 'inch',
                'value_formatter' => 'data / 100',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data30',
                'description' => 'Jumlah hujan bulan ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 655,
                'unit' => 'inch',
                'value_formatter' => 'data / 100',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data31',
                'description' => 'Jumlah hujan tahun ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 655,
                'unit' => 'inch',
                'value_formatter' => 'data / 100',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data32',
                'description' => ' Jumlah penguapan air ke atmosfer (evapotranspiration/ET) hari ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 65,
                'unit' => 'in3/jam',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data33',
                'description' => ' Jumlah penguapan air ke atmosfer (evapotranspiration/ET) bulan ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 65,
                'unit' => 'in3/jam',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data34',
                'description' => ' Jumlah penguapan air ke atmosfer (evapotranspiration/ET) tahun ini',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 65,
                'unit' => 'in3/jam',
                'value_formatter' => 'data / 1000',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data35',
                'description' => 'Dew Point',
                'height' => 2,
                'min_value' => -32768,
                'max_value' => 32767,
                'unit' => 'F',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'bar',
            ],
            [
                'parameter' => 'data36',
                'description' => 'Heat Index',
                'height' => 2,
                'min_value' => -32768,
                'max_value' => 32767,
                'unit' => 'F',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data37',
                'description' => 'Wind Chill',
                'height' => 2,
                'min_value' => -32768,
                'max_value' => 32767,
                'unit' => 'F',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
            [
                'parameter' => 'data38',
                'description' => 'Prakiraan cuaca',
                'height' => 0,
                'min_value' => 0,
                'max_value' => 25,
                'unit' => '',
                'value_formatter' => 'data * 1',
                'value_description' => json_encode([
                    1 => 'hujan',
                    2 => 'berawan',
                    3 => 'sebagian besar berawan & hujan dalam 12 jam',
                    4 => 'sebagian berawan',
                    6 => 'cerah dan berawan',
                    7 => 'sedikit berawan & hujan dalam 12 jam',
                    8 => 'cerah',
                    16 => 'turun salju',
                    18 => 'berawan & salju dalam 12 jam',
                    19 => 'kebanyakan berawan,hujan atau salju dalam 12 jam',
                    22 => 'berawan salju dalam 12 jam',
                    23 => 'berawan salju dalam 12 jam',
                ]),
                'secondary_unit' => json_encode([]),
                'chart_type' => 'gauge',
            ],
        ];

        DB::table('sensor_settings')->truncate();
        DB::table('sensor_settings')->insert($data);
    }
}
