<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*default*/
$route['default_controller'] = 'home';
$route['login'] = 'auth';
$route['registration'] = 'auth/registration';
$route['logout'] = 'auth/logout';
$route['profile'] = 'auth/profile';
$route['editProfile'] = 'auth/editProfile';
$route['homeKriteria'] = 'home/homeKriteria';
$route['homeAlternatif'] = 'home/homeAlternatif';
$route['homeNilaiAhir'] = 'home/homeNilaiAhir';
$route['notifError'] = 'home/notifError';

/*Admin*/
$route['admin'] = 'admin/adminDashboard';
$route['listUser'] = 'admin/listUser';
$route['detailUser/(:any)'] = 'admin/detailUser/$1';
$route['updateUser/(:any)'] = 'admin/updateUser/$1';
$route['deleteUser/(:any)'] = 'admin/deleteUser/$1';
$route['createUser'] = 'admin/createUser';
$route['listUsernew'] = 'admin/listUsernew';

/*User*/
$route['user'] = 'user/userDashboard';

/*Operator*/
$route['operator'] = 'operator/operatorDashboard';

/*kriteria*/
$route['kriteria'] = 'kriteria/listKriteria';
$route['createKriteria/(:any)'] = 'kriteria/createkriteria/$1';
$route['updateKriteria/(:any)'] = 'kriteria/updatekriteria/$1';
$route['deleteKriteria/(:any)'] = 'kriteria/deletekriteria/$1';

/*alternatif*/
$route['alternatif'] = 'alternatif/listAlternatif';
$route['createAlternatif'] = 'alternatif/createAlternatif';
$route['updateAlternatif/(:any)'] = 'alternatif/updateAlternatif/$1';
$route['deleteAlternatif/(:any)'] = 'alternatif/deleteAlternatif/$1';

/*Nilai*/
$route['nilai'] = 'nilai/listNilai';
$route['updateNilai/(:any)'] = 'nilai/updateNilai/$1';


/*hitung*/
$route['hitung'] = 'hitung/hitung';
$route['nilaiAhir'] = 'hitung/nilaiAhir';
$route['map'] = 'hitung/map';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
