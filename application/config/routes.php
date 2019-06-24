<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'analisisratio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['cash-ratio'] = 'analisisratio/cashRatio/';
$route['quick-ratio-acid-test-ratio'] = 'analisisratio/quickRatio/';
$route['working-capital-to-assets-ratio'] = 'analisisratio/workingCapital/';

$route['total-debt-to-equity-ratio'] = 'analisisratio/totalDebttoEquity/';
$route['total-debt-to-total-capital-assets'] = 'analisisratio/totalDebttoCapitalAssets/';
$route['long-term-debt-to-equity-ratio'] = 'analisisratio/longTermDebttoEquityRatio/';
$route['tangible-assets-debt-coverage'] = 'analisisratio/tangibleAssetsDebtCoverage/';
$route['time-interest-earned-ratio'] = 'analisisratio/timeInterestEarnedRatio/';

$route['total-assets-turn-over'] = 'analisisratio/totalAssetsTurnOver/';
$route['receivable-turn-over'] = 'analisisratio/receivableTurnOver/';
$route['average-collection-period'] = 'analisisratio/averageCollectionPeriod/';
$route['inventory-turn-over'] = 'analisisratio/inventoryTurnOver/';
$route['average-days-inventory'] = 'analisisratio/averageDaysInventory/';
$route['working-capital-turn-over'] = 'analisisratio/workingCapitalTurnOver/';

$route['gross-profit-margin'] = 'analisisratio/grossProfitMargin/';
$route['operating-income-ratio-operating-profit-margin'] = 'analisisratio/operatingIncomeRatioOperatingProfitMargin/';
$route['operating-ratio'] = 'analisisratio/operatingRatio/';
$route['net-profit-margin'] = 'analisisratio/netProfitMargin/';
$route['earning-power-of-total-investment'] = 'analisisratio/earningPowerofTotalInvestment/';
$route['net-earning-power-ratio-return-on-investment'] = 'analisisratio/netEarningPowerRatioReturnonInvestment/';
$route['rate-of-return-for-the-owners'] = 'analisisratio/rateofReturnfortheOwners/';

$route['kinerja-laba-operasi'] = 'analisisratio/kinerjaLabaOperasi/';
$route['hasil-pengembalian-atas-total-aktiva-roi'] = 'analisisratio/hasilPengembalianAtasTotalAktivaRoi/';
$route['laba-operasi-bersih-terhadap-total-modal'] = 'analisisratio/labaOperasiBersihTerhadapTotalModal/';
$route['laba-bersih-terhadap-penjualan'] = 'analisisratio/labaBersihTerhadapPenjualan/';
$route['hasil-pengembalian-atas-equitas'] = 'analisisratio/hasilPengembalianAtasEquitas/';
$route['tingkat-profitabilitas-marjinal'] = 'analisisratio/tingkatProfitabilitasMarjinal/';
$route['hasil-pengembalian-marginal-atas-equitas'] = 'analisisratio/hasilPengembalianMarginalAtasEquitas/';

$route['rasio-harga-laba'] = 'analisisratio/rasioHargaLaba/';
$route['rasio-harga-pasar-terhadap-nilai-buku'] = 'analisisratio/rasioHargaPasarTerhadapNilaiBuku/';

$route['ukuran-efisiensi-operasi'] = 'analisisratio/ukuranEfisiensiOperasi/';

$route['ukuran-kebijakan-keuangan'] = 'analisisratio/ukuranKebijakanKeuangan/';