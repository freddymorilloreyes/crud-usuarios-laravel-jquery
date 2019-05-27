<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array(
            array('id' => '775','country_id' => '47','name' => 'Amazonas','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '776','country_id' => '47','name' => 'Antioquia','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '777','country_id' => '47','name' => 'Arauca','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '778','country_id' => '47','name' => 'Atlantico','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '779','country_id' => '47','name' => 'Bogota','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '780','country_id' => '47','name' => 'Bolivar','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '781','country_id' => '47','name' => 'Boyaca','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '782','country_id' => '47','name' => 'Caldas','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '783','country_id' => '47','name' => 'Caqueta','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '784','country_id' => '47','name' => 'Casanare','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '785','country_id' => '47','name' => 'Cauca','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '786','country_id' => '47','name' => 'Cesar','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '787','country_id' => '47','name' => 'Choco','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '788','country_id' => '47','name' => 'Cordoba','created_at' => '2019-05-09 16:22:52','updated_at' => '2019-05-09 16:22:52'),
            array('id' => '789','country_id' => '47','name' => 'Cundinamarca','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '790','country_id' => '47','name' => 'Guainia','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '791','country_id' => '47','name' => 'Guaviare','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '792','country_id' => '47','name' => 'Huila','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '793','country_id' => '47','name' => 'La Guajira','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '794','country_id' => '47','name' => 'Magdalena','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '795','country_id' => '47','name' => 'Meta','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '796','country_id' => '47','name' => 'Narino','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '797','country_id' => '47','name' => 'Norte de Santander','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '798','country_id' => '47','name' => 'Putumayo','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '799','country_id' => '47','name' => 'Quindio','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '800','country_id' => '47','name' => 'Risaralda','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '801','country_id' => '47','name' => 'San Andres y Providencia','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '802','country_id' => '47','name' => 'Santander','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '803','country_id' => '47','name' => 'Sucre','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '804','country_id' => '47','name' => 'Tolima','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '805','country_id' => '47','name' => 'Valle del Cauca','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '806','country_id' => '47','name' => 'Vaupes','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '807','country_id' => '47','name' => 'Vichada','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2812','country_id' => '172','name' => 'Amazonas','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2813','country_id' => '172','name' => 'Ancash','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2814','country_id' => '172','name' => 'Apurimac','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2815','country_id' => '172','name' => 'Arequipa','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2816','country_id' => '172','name' => 'Ayacucho','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2817','country_id' => '172','name' => 'Cajamarca','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2818','country_id' => '172','name' => 'Cusco','created_at' => '2019-05-09 16:22:53','updated_at' => '2019-05-09 16:22:53'),
            array('id' => '2819','country_id' => '172','name' => 'Huancavelica','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2820','country_id' => '172','name' => 'Huanuco','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2821','country_id' => '172','name' => 'Ica','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2822','country_id' => '172','name' => 'Junin','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2823','country_id' => '172','name' => 'La Libertad','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2824','country_id' => '172','name' => 'Lambayeque','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2825','country_id' => '172','name' => 'Lima y Callao','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2826','country_id' => '172','name' => 'Loreto','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2827','country_id' => '172','name' => 'Madre de Dios','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2828','country_id' => '172','name' => 'Moquegua','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2829','country_id' => '172','name' => 'Pasco','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2830','country_id' => '172','name' => 'Piura','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2831','country_id' => '172','name' => 'Puno','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2832','country_id' => '172','name' => 'San Martin','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2833','country_id' => '172','name' => 'Tacna','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2834','country_id' => '172','name' => 'Tumbes','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '2835','country_id' => '172','name' => 'Ucayali','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4020','country_id' => '237','name' => 'Amazonas','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4021','country_id' => '237','name' => 'Anzoategui','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4022','country_id' => '237','name' => 'Apure','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4023','country_id' => '237','name' => 'Aragua','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4024','country_id' => '237','name' => 'Barinas','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4025','country_id' => '237','name' => 'Bolivar','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4026','country_id' => '237','name' => 'Carabobo','created_at' => '2019-05-09 16:22:54','updated_at' => '2019-05-09 16:22:54'),
            array('id' => '4027','country_id' => '237','name' => 'Cojedes','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4028','country_id' => '237','name' => 'Delta Amacuro','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4029','country_id' => '237','name' => 'Distrito Federal','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4030','country_id' => '237','name' => 'Falcon','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4031','country_id' => '237','name' => 'Guarico','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4032','country_id' => '237','name' => 'Lara','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4033','country_id' => '237','name' => 'Merida','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4034','country_id' => '237','name' => 'Miranda','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4035','country_id' => '237','name' => 'Monagas','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4036','country_id' => '237','name' => 'Nueva Esparta','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4037','country_id' => '237','name' => 'Portuguesa','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4038','country_id' => '237','name' => 'Sucre','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4039','country_id' => '237','name' => 'Tachira','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4040','country_id' => '237','name' => 'Trujillo','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4041','country_id' => '237','name' => 'Vargas','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4042','country_id' => '237','name' => 'Yaracuy','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55'),
            array('id' => '4043','country_id' => '237','name' => 'Zulia','created_at' => '2019-05-09 16:22:55','updated_at' => '2019-05-09 16:22:55')
        );
        foreach ($departments as $key =>$departamento){
            $department = new Department();
            $department->id = $departamento['id'];
            $department->name = $departamento['name'];
            $department->country_id = $departamento['country_id'];
            $department->save();
        }

    }
}
