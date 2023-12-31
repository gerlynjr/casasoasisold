<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert(['id'=>1, 'name'=>'La Lisa', 'slugged'=>str_slug('La Lisa'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>2, 'name'=>'Diez de Octubre', 'slugged'=>str_slug('Diez de Octubre'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>3, 'name'=>'Marianao', 'slugged'=>str_slug('Marianao'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>4, 'name'=>'Playa', 'slugged'=>str_slug('Playa'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>5, 'name'=>'Plaza de la Revolución', 'slugged'=>str_slug('Plaza de la Revolución'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>6, 'name'=>'Boyeros', 'slugged'=>str_slug('Boyeros'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>7, 'name'=>'San Miguel del Padrón', 'slugged'=>str_slug('San Miguel del Padrón'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>8, 'name'=>'Habana del Este', 'slugged'=>str_slug('Habana del Este'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>9, 'name'=>'Arroyo Naranjo', 'slugged'=>str_slug('Arroyo Naranjo'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>10, 'name'=>'Habana Vieja', 'slugged'=>str_slug('Habana Vieja'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>11, 'name'=>'Guanabacoa', 'slugged'=>str_slug('Guanabacoa'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>12, 'name'=>'Regla', 'slugged'=>str_slug('Regla'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>13, 'name'=>'Cerro', 'slugged'=>str_slug('Cerro'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>14, 'name'=>'Centro Habana', 'slugged'=>str_slug('Centro Habana'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>15, 'name'=>'Cotorro', 'slugged'=>str_slug('Cotorro'), 'province_id'=>1]);
        DB::table('municipios')->insert(['id'=>16, 'name'=>'Jimagüayú', 'slugged'=>str_slug('Jimagüayú'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>17, 'name'=>'Sibanicú', 'slugged'=>str_slug('Sibanicú'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>18, 'name'=>'Céspedes', 'slugged'=>str_slug('Céspedes'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>19, 'name'=>'Esmeralda', 'slugged'=>str_slug('Esmeralda'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>20, 'name'=>'Florida', 'slugged'=>str_slug('Florida'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>21, 'name'=>'Guáimaro', 'slugged'=>str_slug('Guáimaro'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>22, 'name'=>'Minas', 'slugged'=>str_slug('Minas'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>23, 'name'=>'Sierra de Cubitas', 'slugged'=>str_slug('Sierra de Cubitas'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>24, 'name'=>'Vertientes', 'slugged'=>str_slug('Vertientes'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>25, 'name'=>'Nuevitas', 'slugged'=>str_slug('Nuevitas'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>26, 'name'=>'Santa Cruz del Sur', 'slugged'=>str_slug('Santa Cruz del Sur'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>27, 'name'=>'Najasa', 'slugged'=>str_slug('Najasa'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>28, 'name'=>'Camagüey', 'slugged'=>str_slug('Camagüey'), 'province_id'=>2]);
        DB::table('municipios')->insert(['id'=>29, 'name'=>'Florencia', 'slugged'=>str_slug('Florencia'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>30, 'name'=>'Morón', 'slugged'=>str_slug('Morón'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>31, 'name'=>'Majagua', 'slugged'=>str_slug('Majagua'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>32, 'name'=>'Primero de enero', 'slugged'=>str_slug('Primero de enero'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>33, 'name'=>'Chambas', 'slugged'=>str_slug('Chambas'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>34, 'name'=>'Ciego de Avila', 'slugged'=>str_slug('Ciego de Avila'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>35, 'name'=>'Ciro Redondo', 'slugged'=>str_slug('Ciro Redondo'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>36, 'name'=>'Baraguá', 'slugged'=>str_slug('Baraguá'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>37, 'name'=>'Bolivia', 'slugged'=>str_slug('Bolivia'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>38, 'name'=>'Venezuela', 'slugged'=>str_slug('Venezuela'), 'province_id'=>3]);
        DB::table('municipios')->insert(['id'=>39, 'name'=>'Aguada de Pasajeros', 'slugged'=>str_slug('Aguada de Pasajeros'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>40, 'name'=>'Santa Isabel de las Lajas', 'slugged'=>str_slug('Santa Isabel de las Lajas'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>41, 'name'=>'Cruces', 'slugged'=>str_slug('Cruces'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>42, 'name'=>'Cienfuegos', 'slugged'=>str_slug('Cienfuegos'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>43, 'name'=>'Palmira', 'slugged'=>str_slug('Palmira'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>44, 'name'=>'Abreus', 'slugged'=>str_slug('Abreus'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>45, 'name'=>'Rodas', 'slugged'=>str_slug('Rodas'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>46, 'name'=>'Cumanayagua', 'slugged'=>str_slug('Cumanayagua'), 'province_id'=>4]);
        DB::table('municipios')->insert(['id'=>47, 'name'=>'Manzanillo', 'slugged'=>str_slug('Manzanillo'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>48, 'name'=>'Niquero', 'slugged'=>str_slug('Niquero'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>49, 'name'=>'Yara', 'slugged'=>str_slug('Yara'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>50, 'name'=>'Buey Arriba', 'slugged'=>str_slug('Buey Arriba'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>51, 'name'=>'Bartolomé Masó', 'slugged'=>str_slug('Bartolomé Masó'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>52, 'name'=>'Cauto Cristo', 'slugged'=>str_slug('Cauto Cristo'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>53, 'name'=>'Bayamo', 'slugged'=>str_slug('Bayamo'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>54, 'name'=>'Jiguaní', 'slugged'=>str_slug('Jiguaní'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>55, 'name'=>'Campechuela', 'slugged'=>str_slug('Campechuela'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>56, 'name'=>'Media Luna', 'slugged'=>str_slug('Media Luna'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>57, 'name'=>'Río Cauto', 'slugged'=>str_slug('Río Cauto'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>58, 'name'=>'Pilón', 'slugged'=>str_slug('Pilón'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>59, 'name'=>'Guisa', 'slugged'=>str_slug('Guisa'), 'province_id'=>5]);
        DB::table('municipios')->insert(['id'=>60, 'name'=>'Niceto Perez', 'slugged'=>str_slug('Niceto Perez'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>61, 'name'=>'Manuel Tames', 'slugged'=>str_slug('Manuel Tames'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>62, 'name'=>'Maisí', 'slugged'=>str_slug('Maisí'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>63, 'name'=>'Caimanera', 'slugged'=>str_slug('Caimanera'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>64, 'name'=>'El Salvador', 'slugged'=>str_slug('El Salvador'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>65, 'name'=>'Yateras', 'slugged'=>str_slug('Yateras'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>66, 'name'=>'San Antonio del Sur', 'slugged'=>str_slug('San Antonio del Sur'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>67, 'name'=>'Baracoa', 'slugged'=>str_slug('Baracoa'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>68, 'name'=>'Imías', 'slugged'=>str_slug('Imías'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>69, 'name'=>'Guantánamo', 'slugged'=>str_slug('Guantánamo'), 'province_id'=>6]);
        DB::table('municipios')->insert(['id'=>70, 'name'=>'Rafael Freyre', 'slugged'=>str_slug('Rafael Freyre'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>71, 'name'=>'Cacocum', 'slugged'=>str_slug('Cacocum'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>72, 'name'=>'Calixto García', 'slugged'=>str_slug('Calixto García'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>73, 'name'=>'Holguín', 'slugged'=>str_slug('Holguín'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>74, 'name'=>'Banes', 'slugged'=>str_slug('Banes'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>75, 'name'=>'Antilla', 'slugged'=>str_slug('Antilla'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>76, 'name'=>'Báguanos', 'slugged'=>str_slug('Báguanos'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>77, 'name'=>'Sagua de Tánamo', 'slugged'=>str_slug('Sagua de Tánamo'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>78, 'name'=>'Urbano Noris', 'slugged'=>str_slug('Urbano Noris'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>79, 'name'=>'Frank País', 'slugged'=>str_slug('Frank País'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>80, 'name'=>'Mayarí', 'slugged'=>str_slug('Mayarí'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>81, 'name'=>'Gibara', 'slugged'=>str_slug('Gibara'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>82, 'name'=>'Moa', 'slugged'=>str_slug('Moa'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>83, 'name'=>'Cueto', 'slugged'=>str_slug('Cueto'), 'province_id'=>7]);
        DB::table('municipios')->insert(['id'=>84, 'name'=>'Julio Antonio Mella (Isla de la Juventud)', 'slugged'=>str_slug('Julio Antonio Mella (Isla de la Juventud)'), 'province_id'=>8]);
        DB::table('municipios')->insert(['id'=>85, 'name'=>'Isla de la Juventud', 'slugged'=>str_slug('Isla de la Juventud'), 'province_id'=>8]);
        DB::table('municipios')->insert(['id'=>86, 'name'=>'Güira de Melena', 'slugged'=>str_slug('Güira de Melena'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>87, 'name'=>'San Cristóbal', 'slugged'=>str_slug('San Cristóbal'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>88, 'name'=>'Guanajay', 'slugged'=>str_slug('Guanajay'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>89, 'name'=>'Caimito', 'slugged'=>str_slug('Caimito'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>90, 'name'=>'Mariel', 'slugged'=>str_slug('Mariel'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>91, 'name'=>'Artemisa', 'slugged'=>str_slug('Artemisa'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>92, 'name'=>'Bahía Honda', 'slugged'=>str_slug('Bahía Honda'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>93, 'name'=>'Bauta', 'slugged'=>str_slug('Bauta'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>94, 'name'=>'San Antonio de los Baños', 'slugged'=>str_slug('San Antonio de los Baños'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>95, 'name'=>'Candelaria', 'slugged'=>str_slug('Candelaria'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>96, 'name'=>'Alquizar', 'slugged'=>str_slug('Alquizar'), 'province_id'=>9]);
        DB::table('municipios')->insert(['id'=>97, 'name'=>'Amancio', 'slugged'=>str_slug('Amancio'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>98, 'name'=>'Puerto Padre', 'slugged'=>str_slug('Puerto Padre'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>99, 'name'=>'Majibacoa', 'slugged'=>str_slug('Majibacoa'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>100, 'name'=>'Jesús Menéndez', 'slugged'=>str_slug('Jesús Menéndez'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>101, 'name'=>'Manatí', 'slugged'=>str_slug('Manatí'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>102, 'name'=>'Las Tunas', 'slugged'=>str_slug('Las Tunas'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>103, 'name'=>'Jobabo', 'slugged'=>str_slug('Jobabo'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>104, 'name'=>'Colombia', 'slugged'=>str_slug('Colombia'), 'province_id'=>10]);
        DB::table('municipios')->insert(['id'=>105, 'name'=>'Colón', 'slugged'=>str_slug('Colón'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>106, 'name'=>'Unión de Reyes', 'slugged'=>str_slug('Unión de Reyes'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>107, 'name'=>'Calimete', 'slugged'=>str_slug('Calimete'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>108, 'name'=>'Jovellanos', 'slugged'=>str_slug('Jovellanos'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>109, 'name'=>'Cárdenas', 'slugged'=>str_slug('Cárdenas'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>110, 'name'=>'Matanzas', 'slugged'=>str_slug('Matanzas'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>111, 'name'=>'Los Arabos', 'slugged'=>str_slug('Los Arabos'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>112, 'name'=>'Perico', 'slugged'=>str_slug('Perico'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>113, 'name'=>'Martí', 'slugged'=>str_slug('Martí'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>114, 'name'=>'Limonar', 'slugged'=>str_slug('Limonar'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>115, 'name'=>'Ciénaga de Zapata', 'slugged'=>str_slug('Ciénaga de Zapata'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>116, 'name'=>'Pedro Betancourt', 'slugged'=>str_slug('Pedro Betancourt'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>117, 'name'=>'Jagüey Grande', 'slugged'=>str_slug('Jagüey Grande'), 'province_id'=>11]);
        DB::table('municipios')->insert(['id'=>118, 'name'=>'Bejucal', 'slugged'=>str_slug('Bejucal'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>119, 'name'=>'Jaruco', 'slugged'=>str_slug('Jaruco'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>120, 'name'=>'Santa Cruz del Norte', 'slugged'=>str_slug('Santa Cruz del Norte'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>121, 'name'=>'Nueva Paz', 'slugged'=>str_slug('Nueva Paz'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>122, 'name'=>'Batabanó', 'slugged'=>str_slug('Batabanó'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>123, 'name'=>'Melena del Sur', 'slugged'=>str_slug('Melena del Sur'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>124, 'name'=>'Güines', 'slugged'=>str_slug('Güines'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>125, 'name'=>'Quivicán', 'slugged'=>str_slug('Quivicán'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>126, 'name'=>'San José de las Lajas', 'slugged'=>str_slug('San José de las Lajas'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>127, 'name'=>'San Nicolás', 'slugged'=>str_slug('San Nicolás'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>128, 'name'=>'Madruga', 'slugged'=>str_slug('Madruga'), 'province_id'=>12]);
        DB::table('municipios')->insert(['id'=>129, 'name'=>'Sandino', 'slugged'=>str_slug('Sandino'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>130, 'name'=>'San Juan y Martínez', 'slugged'=>str_slug('San Juan y Martínez'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>131, 'name'=>'Guane', 'slugged'=>str_slug('Guane'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>132, 'name'=>'Consolación del Sur', 'slugged'=>str_slug('Consolación del Sur'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>133, 'name'=>'Los Palacios', 'slugged'=>str_slug('Los Palacios'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>134, 'name'=>'San Luis', 'slugged'=>str_slug('San Luis'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>135, 'name'=>'Minas de Matahambre', 'slugged'=>str_slug('Minas de Matahambre'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>136, 'name'=>'Mantua', 'slugged'=>str_slug('Mantua'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>137, 'name'=>'Viñales', 'slugged'=>str_slug('Viñales'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>138, 'name'=>'Pinar del Río', 'slugged'=>str_slug('Pinar del Río'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>139, 'name'=>'La Palma', 'slugged'=>str_slug('La Palma'), 'province_id'=>13]);
        DB::table('municipios')->insert(['id'=>140, 'name'=>'Jatibonico', 'slugged'=>str_slug('Jatibonico'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>141, 'name'=>'Sancti Spíritus', 'slugged'=>str_slug('Sancti Spíritus'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>142, 'name'=>'Fomento', 'slugged'=>str_slug('Fomento'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>143, 'name'=>'Yaguajay', 'slugged'=>str_slug('Yaguajay'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>144, 'name'=>'La Sierpe', 'slugged'=>str_slug('La Sierpe'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>145, 'name'=>'Cabaiguán', 'slugged'=>str_slug('Cabaiguán'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>146, 'name'=>'Trinidad', 'slugged'=>str_slug('Trinidad'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>147, 'name'=>'Taguasco', 'slugged'=>str_slug('Taguasco'), 'province_id'=>14]);
        DB::table('municipios')->insert(['id'=>148, 'name'=>'Songo La Maya', 'slugged'=>str_slug('Songo La Maya'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>149, 'name'=>'Contramaestre', 'slugged'=>str_slug('Contramaestre'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>150, 'name'=>'Tercer Frente', 'slugged'=>str_slug('Tercer Frente'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>151, 'name'=>'Julio Antonio Mella', 'slugged'=>str_slug('Julio Antonio Mella'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>152, 'name'=>'San Luis', 'slugged'=>str_slug('San Luis Santiago de Cuba'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>153, 'name'=>'Segundo Frente', 'slugged'=>str_slug('Segundo Frente'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>154, 'name'=>'Santiago de Cuba', 'slugged'=>str_slug('Santiago de Cuba'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>155, 'name'=>'Palma Soriano', 'slugged'=>str_slug('Palma Soriano'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>156, 'name'=>'Guamá', 'slugged'=>str_slug('Guamá'), 'province_id'=>15]);
        DB::table('municipios')->insert(['id'=>157, 'name'=>'Ranchuelo', 'slugged'=>str_slug('Ranchuelo'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>158, 'name'=>'Caibarién', 'slugged'=>str_slug('Caibarién'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>159, 'name'=>'Santa Clara', 'slugged'=>str_slug('Santa Clara'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>160, 'name'=>'Quemado de Güines', 'slugged'=>str_slug('Quemado de Güines'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>161, 'name'=>'Placetas', 'slugged'=>str_slug('Placetas'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>162, 'name'=>'Camajuaní', 'slugged'=>str_slug('Camajuaní'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>163, 'name'=>'Sagua la Grande', 'slugged'=>str_slug('Sagua la Grande'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>164, 'name'=>'Santo Domingo', 'slugged'=>str_slug('Santo Domingo'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>165, 'name'=>'Remedios', 'slugged'=>str_slug('Remedios'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>166, 'name'=>'Corralillo', 'slugged'=>str_slug('Corralillo'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>167, 'name'=>'Cifuentes', 'slugged'=>str_slug('Cifuentes'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>168, 'name'=>'Manicaragua', 'slugged'=>str_slug('Manicaragua'), 'province_id'=>16]);
        DB::table('municipios')->insert(['id'=>169, 'name'=>'Encrucijada', 'slugged'=>str_slug('Encrucijada'), 'province_id'=>16]);

    }
}
