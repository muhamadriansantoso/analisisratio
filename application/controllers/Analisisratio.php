<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisisratio extends CI_Controller {
	public function index()
	{
		$this->load->view('currentratio');
	}

	public function cashRatio()
	{
		$this->load->view('cashratio');
	}

	public function quickRatio()
	{
		$this->load->view('quickratio');
	}

	public function workingCapital()
	{
		$this->load->view('workingcapital');
	}

	public function totalDebttoEquity()
	{
		$this->load->view('totaldebttoequity');
	}

	public function totalDebttoCapitalAssets()
	{
		$this->load->view('totaldebttocapitalassets');
	}

	public function longTermDebttoEquityRatio()
	{
		$this->load->view('longtermdebttoequityratio');
	}

	public function tangibleAssetsDebtCoverage()
	{
		$this->load->view('tangibleassetsdebtcoverage');
	}

	public function timeInterestEarnedRatio()
	{
		$this->load->view('timeinterestearnedratio');
	}

	public function totalAssetsTurnOver()
	{
		$this->load->view('totalassetsturnover');
	}

	public function receivableTurnOver()
	{
		$this->load->view('receivableturnover');
	}

	public function averageCollectionPeriod()
	{
		$this->load->view('averagecollectionperiod');
	}

	public function inventoryTurnOver()
	{
		$this->load->view('inventoryturnover');
	}

	public function averageDaysInventory()
	{
		$this->load->view('averagedaysinventory');
	}

	public function workingCapitalTurnOver()
	{
		$this->load->view('workingcapitalturnover');
	}

	public function grossProfitMargin()
	{
		$this->load->view('grossprofitmargin');
	}

	public function operatingIncomeRatioOperatingProfitMargin()
	{
		$this->load->view('operatingincomeratiooperatingprofitmargin');
	}

	public function operatingRatio()
	{
		$this->load->view('operatingratio');
	}

	public function netProfitMargin()
	{
		$this->load->view('netprofitmargin');
	}

	public function earningPowerofTotalInvestment()
	{
		$this->load->view('earningpoweroftotalinvestment');
	}

	public function netEarningPowerRatioReturnonInvestment()
	{
		$this->load->view('netearningpowerratioreturnoninvestment');
	}

	public function rateofReturnfortheOwners()
	{
		$this->load->view('rateofreturnfortheowners');
	}

	public function kinerjaLabaOperasi()
	{
		$this->load->view('kinerjalabaoperasi');
	}

	public function hasilPengembalianAtasTotalAktivaRoi()
	{
		$this->load->view('hasilpengembalianatastotalaktivaroi');
	}

	public function labaOperasiBersihTerhadapTotalModal()
	{
		$this->load->view('labaoperasibersihterhadaptotalmodal');
	}

	public function labaBersihTerhadapPenjualan()
	{
		$this->load->view('lababersihterhadappenjualan');
	}

	public function hasilPengembalianAtasEquitas()
	{
		$this->load->view('hasilpengembalianatasequitas');
	}

	public function tingkatProfitabilitasMarjinal()
	{
		$this->load->view('tingkatprofitabilitasmarjinal');
	}

	public function hasilPengembalianMarginalAtasEquitas()
	{
		$this->load->view('hasilpengembalianmarginalatasequitas');
	}

    public function rasioHargaLaba()
    {
        $this->load->view('rasiohargalaba');
    }

    public function rasioHargaPasarTerhadapNilaiBuku()
    {
        $this->load->view('rasiohargapasarterhadapnilaibuku');
    }

    public function ukuranEfisiensiOperasi()
    {
        $this->load->view('ukuranefisiensioperasi');
    }

    public function ukuranKebijakanKeuangan()
    {
        $this->load->view('ukurankebijakankeuangan');
    }
}
