<?php

use Illuminate\Database\Seeder;

class seeder_stop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('stops')->insert([
            'adress' =>'Cra 7 # 135',
			'name' => 'Br. Segundo Contador',
            'latitude' => '4.71345',
			'longitude'=>'-74.02905',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',
        ]);
		 DB::table('stops')->insert([
			'adress' =>'Cra 7 # 140',
			'name' => 'C.C Palatino',
			'latitude' => '4.71586',
			'longitude' => '-74.02861',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
		]);
		  DB::table('stops')->insert([
            'adress' =>'Cra 7 # 145',
			'name' => 'Br. Bosque de pinos',
            'latitude' => '4.71981',
			'longitude' => '-74.02715',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		  DB::table('stops')->insert([
            'adress' =>'Cra 7 # 149',
			'name' => 'Colegio Gregoriano',
            'latitude' => '4.72476',
			'longitude' => '-74.02512',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		 DB::table('stops')->insert([
            'adress' =>'Cra 7 # 153b',
			'name' => 'Br. Bosque de Pinos',
            'latitude' => '4.72882',
			'longitude' => '-74.02402',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 156b',
			'name' => 'Br. Bosque de Pinos III',
            'latitude' => '4.7322',
			'longitude' => '-74.02381',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 159c',
			'name' => 'Br. Ibiza',
            'latitude' => '4.73484',
			'longitude' => '-74.02422',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 163',
			'name' => 'Cai Villa Nidia',
            'latitude' => '4.73776',
			'longitude' => '-74.02264',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 170b',
			'name' => 'Ied Friedrich Naumann',
            'latitude' => '4.74809',
			'longitude' => '-74.02291',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 176',
			'name' => 'Colego Claustro Moderno',
            'latitude' => '4.75468',
			'longitude' => '-74.02433',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 182',
			'name' => 'Cra 7 # 182',
            'latitude' => '4.75889',
			'longitude' => '-74.02581',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 185c',
			'name' => 'Br. Horizontes Usaquén',
            'latitude' => '4.76231',
			'longitude' => '-74.02705',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 189',
			'name' => 'Br. Buenavista',
            'latitude' => '4.76516',
			'longitude' => '-74.02756',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 191',
			'name' => 'Colegio Ruíz de Alarcón',
            'latitude' => '4.76831',
			'longitude' => '-74.02759',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 200',
			'name' => 'Subestación electrica Torca',
            'latitude' => '4.77689',
			'longitude' => '-74.02602',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Cra 7 # 237',
			'name' => '',
            'latitude' => '4.81165',
			'longitude' => '-74.03079',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
		DB::table('stops')->insert([
            'adress' =>'Clínica Teletón',
			'name' => 'Clínica Teletón',
            'latitude' => '4.85448',
			'longitude' => '-74.03087',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);

        //Paradas Ruta IDA Calle 9
		DB::table('stops')->insert([
            'adress' =>'Av 9 # 134B',
			'name' => 'Urb. Contador Norte',
            'latitude' => '4.71405',
			'longitude' => '-74.03243',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
        DB::table('stops')->insert([
            'adress' =>'Av 9 # 135c',
			'name' => 'Surtifruver de la Sabana',
            'latitude' => '4.71601',
			'longitude' => '-74.03238',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
        DB::table('stops')->insert([
            'adress' =>'Av 9 # 140',
			'name' => 'Calle 140',
            'latitude' => '4.71842',
			'longitude' => '-74.03232',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
        DB::table('stops')->insert([
            'adress' =>'Av 9 # 142',
			'name' => 'Urb. Belmira',
            'latitude' => '4.72019',
			'longitude' => '-74.03227',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
         DB::table('stops')->insert([
            'adress' =>'Av 9 # 145',
			'name' => 'Calle 146',
            'latitude' => '4.72355',
			'longitude' => '-74.03218',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
          DB::table('stops')->insert([
            'adress' =>'Av 9 # 149',
			'name' => 'Pq. Centro Madeira',
            'latitude' => '4.72712',
			'longitude' => '-74.03211',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
           DB::table('stops')->insert([
            'adress' =>'Av 9 # 152a',
			'name' => 'Avenida Calle 153',
            'latitude' => '4.7305',
			'longitude' => '-74.03201',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
            DB::table('stops')->insert([
            'adress' =>'Av 9 # 157',
			'name' => 'Br. Barrancas',
            'latitude' => '4.73477',
			'longitude' => '-74.03189',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
             DB::table('stops')->insert([
            'adress' =>'Av 9 # 161a',
			'name' => 'Calle 161',
            'latitude' => '4.73902',
			'longitude' => '-74.03179',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Av 9 # 164',
			'name' => 'Br. San Cristóbal Norte',
            'latitude' => '4.74142',
			'longitude' => '-74.03174',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Av 9 # 165a',
			'name' => 'Br. San Cristóbal Norte',
            'latitude' => '4.74405',
			'longitude' => '-74.03165',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Av 9 # 169',
			'name' => 'Br. Pradera Norte',
            'latitude' => '4.74724',
			'longitude' => '-74.03154',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Calle 170 # 11',
			'name' => 'Colegio de la Salle',
            'latitude' => '4.74855',
			'longitude' => '-74.03282',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Calle 170 # 15',
			'name' => 'Br. La Alameda',
            'latitude' => '4.7492',
			'longitude' => '-74.03713',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Calle 170 # 17',
			'name' => 'Colegio The English School',
            'latitude' => '4.74964',
			'longitude' => '-74.03912',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Calle 170 # 19',
			'name' => 'Colegio Eucarístico',
            'latitude' => '4.75006',
			'longitude' => '-74.04074',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);

              //Paradas Ruta IDA Carrera 134
              
              DB::table('stops')->insert([
            'adress' =>'Calle 175 # 22',
			'name' => 'Exito Calle 170',
            'latitude' => '4.75572',
			'longitude' => '-74.04534',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 187Bis',
			'name' => 'Estación Santafé',
            'latitude' => '4.76428',
			'longitude' => '-74.04384',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 191',
			'name' => 'Estación Terminal',
            'latitude' => '4.76993',
			'longitude' => '-74.04301',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 193',
			'name' => 'Auto Norte X Cl 193',
            'latitude' => '4.77201',
			'longitude' => '-74.04265',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 198',
			'name' => 'Auto Norte X Cl 198',
            'latitude' => '4.77731',
			'longitude' => '-74.04186',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 207',
			'name' => 'Auto Norte X Cl 207',
            'latitude' => '4.78364',
			'longitude' => '-74.04079',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 224',
			'name' => 'Auto Norte X Cl 224',
            'latitude' => '4.80189',
			'longitude' => '-74.03761',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
              DB::table('stops')->insert([
            'adress' =>'Auto Norte-Calle 234',
			'name' => 'Auto Norte X Cl 234',
            'latitude' => '4.80647',
			'longitude' => '-74.0369',
			'created_at'=>'2016-03-07 00:00:00',
			'updated_at'=>'2016-03-17 00:00:00',	
        ]);
    
    }
}
