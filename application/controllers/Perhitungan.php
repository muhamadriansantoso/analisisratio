<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {
	public function currentratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$aktivalancar = $this->input->post('aktivalancar');
			$hutanglancar = $this->input->post('hutanglancar');

			$hasil = $aktivalancar / $hutanglancar;
			$hasil_number_format = number_format($hasil,2);

			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Aktiva Lancar : ' .$aktivalancar. '<br>';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Hasil Current Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('/');
	    }
	}

	public function cashratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$kas = $this->input->post('kas');
			$efek = $this->input->post('efek');
			$hutanglancar = $this->input->post('hutanglancar');

			$hasil = ($kas + $efek) / $hutanglancar;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Kas : ' .$kas. '<br>';
			$html.='Efek : ' .$efek. '<br>';
			$html.='Hasil Cash Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('cash-ratio');
	    }
	}

	public function quickratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$kas = $this->input->post('kas');
			$efek = $this->input->post('efek');
			$hutang = $this->input->post('hutang');
			$hutanglancar = $this->input->post('hutanglancar');

			$hasil = ($kas + $efek + $hutang) / $hutanglancar;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Kas : ' .$kas. '<br>';
			$html.='Efek : ' .$efek. '<br>';
			$html.='Hutang : ' .$hutang. '<br>';
			$html.='Hutang Lancar : ' .$hutang. '<br>';
			$html.='Hasil Quick Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('quick-ratio');
	    }
	}

	public function workingcapital()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$aktivalancar = $this->input->post('aktivalancar');
			$hutanglancar = $this->input->post('hutanglancar');
			$jumlahaktiva = $this->input->post('jumlahaktiva');

			$hasil = ($aktivalancar - $hutanglancar) / $jumlahaktiva;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Aktiva Lancar : ' .$aktivalancar. '<br>';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Hasil Working Capital to Total Assets Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('working-capital-to-assets-ratio');
	    }
	}

	public function totaldebttoequity()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$hutanglancar = $this->input->post('hutanglancar');
			$hutangjangkapanjang = $this->input->post('hutangjangkapanjang');
			$jumlahmodalsendiri = $this->input->post('jumlahmodalsendiri');

			$hasil = ($hutanglancar + $hutangjangkapanjang) / $jumlahmodalsendiri;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Hutang Jangka Panjang : ' .$hutangjangkapanjang. '<br>';
			$html.='Jumlah Modal Sendiri : ' .$jumlahmodalsendiri. '<br>';
			$html.='Hasil Total Debt to Equity Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('total-debt-to-equity-ratio');
	    }
	}

	public function totaldebttototalcapitalassets()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$hutanglancar = $this->input->post('hutanglancar');
			$hutangjangkapanjang = $this->input->post('hutangjangkapanjang');
			$jumlahaktiva = $this->input->post('jumlahaktiva');

			$hasil = ($hutanglancar + $hutangjangkapanjang) / $jumlahaktiva;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Hutang Jangka Panjang : ' .$hutangjangkapanjang. '<br>';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Hasil Total Debt to Total Capital Assets : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('total-debt-to-total-capital-assets');
	    }
	}

	public function longtermdebttoequityratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$hutangjangkapanjang = $this->input->post('hutangjangkapanjang');
			$modalsendiri = $this->input->post('modalsendiri');

			$hasil = $hutangjangkapanjang / $modalsendiri;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Hutang Jangka Panjang : ' .$hutangjangkapanjang. '<br>';
			$html.='Modal Sendiri : ' .$modalsendiri. '<br>';
			$html.='Hasil Long Term Debt to Equity Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('long-term-debt-to-equity-ratio');
	    }
	}

	public function tangibleassetsdebtcoverage()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$jumlahaktiva = $this->input->post('jumlahaktiva');
			$intangibles = $this->input->post('intangibles');
			$hutanglancar = $this->input->post('hutanglancar');
			$hutangjangkapanjang = $this->input->post('hutangjangkapanjang');

			$hasil = ($jumlahaktiva - $intangibles - $hutanglancar) / $hutangjangkapanjang;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Intangibles : ' .$intangibles. '<br>';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Hutang Jangka Panjang : ' .$hutangjangkapanjang. '<br>';
			$html.='Hasil Tangible Assets Debt Coverage : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('tangible-assets-debt-coverage');
	    }
	}

	public function timeinterestearnedratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$ebit = $this->input->post('ebit');
			$bungahutangjangkapanjang = $this->input->post('bungahutangjangkapanjang');

			$hasil = $ebit / $bungahutangjangkapanjang;
			$hasil_number_format = number_format($hasil,1);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='EBIT : ' .$ebit. '<br>';
			$html.='Bunga Hutang Jangka Panjang : ' .$bungahutangjangkapanjang. '<br>';
			$html.='Hasil Times Interest Earned Ratio : ' .$hasil_number_format. 'X</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('time-interest-earned-ratio');
	    }
	}

	public function totalassetsturnover()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualanneto = $this->input->post('penjualanneto');
			$jumlahaktiva = $this->input->post('jumlahaktiva');

			$hasil = $penjualanneto / $jumlahaktiva;
			$hasil_number_format = number_format($hasil,2);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Neto : ' .$penjualanneto. '<br>';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Hasil Total Assets Turn Over : ' .$hasil_number_format. '</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('total-assets-turn-over');
	    }
	}

	public function receivableturnover()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualankredit = $this->input->post('penjualankredit');
			$piutangratarata = $this->input->post('piutangratarata');

			$hasil = $penjualankredit / $piutangratarata;
			$hasil_number_format = number_format($hasil,0);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Kredit : ' .$penjualankredit. '<br>';
			$html.='Piutang Rata-rata : ' .$piutangratarata. '<br>';
			$html.='Hasil Receivable Turn Over : ' .$hasil_number_format. 'X</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('receivable-turn-over');
	    }
	}

	public function averagecollectionperiod()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$piutangratarata = $this->input->post('piutangratarata');
			$penjualankredit = $this->input->post('penjualankredit');

			$hasil = ($piutangratarata * 360) / $penjualankredit;
			$hasil_number_format = number_format($hasil,1);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Piutang Rata-rata : ' .$piutangratarata. '<br>';
			$html.='Penjualan Kredit : ' .$penjualankredit. '<br>';
			$html.='Hasil Average Collection Period : ' .$hasil_number_format. ' hari</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('average-collection-period');
	    }
	}

	public function inventoryturnover()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$hargapokokpenjualan = $this->input->post('hargapokokpenjualan');
			$inventoryratarata = $this->input->post('inventoryratarata');

			$hasil = $hargapokokpenjualan / $inventoryratarata;
			$hasil_number_format = number_format($hasil,1);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
			$html.='Inventory Rata-rata : ' .$inventoryratarata. '<br>';
			$html.='Hasil Inventory Turn Over : ' .$hasil_number_format. 'X</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('inventory-turn-over');
	    }
	}

	public function averagedaysinventory()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$inventoryratarata = $this->input->post('inventoryratarata');
			$hargapokokpenjualan = $this->input->post('hargapokokpenjualan');

			$hasil = ($inventoryratarata * 360) / $hargapokokpenjualan ;
			$hasil_number_format = number_format($hasil,0);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Inventory Rata-rata : ' .$inventoryratarata. '<br>';
			$html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
			$html.='Hasil Average Days Inventory : ' .$hasil_number_format. ' hari</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('average-days-inventory');
	    }
	}

	public function workingcapitalturnover()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualannetto = $this->input->post('penjualannetto');
			$aktivalancar = $this->input->post('aktivalancar');
			$hutanglancar = $this->input->post('hutanglancar');

			$hasil = $penjualannetto / ($aktivalancar - $hutanglancar);
			$hasil_number_format = number_format($hasil,1);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Netto : ' .$penjualannetto. '<br>';
			$html.='Aktiva Lancar : ' .$aktivalancar. '<br>';
			$html.='Hutang Lancar : ' .$hutanglancar. '<br>';
			$html.='Hasil Working Capital Turn Over : ' .$hasil_number_format. 'X</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('working-capital-turn-over');
	    }
	}

	public function grossprofitmargin()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualanneto = $this->input->post('penjualanneto');
			$hargapokokpenjualan = $this->input->post('hargapokokpenjualan');

			$hasil = ($penjualanneto - $hargapokokpenjualan) / $penjualanneto;
			$hasil_number_format = number_format($hasil,4);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Neto : ' .$penjualanneto. '<br>';
			$html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
			$html.='Hasil Gross Profit Margin : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('gross-profit-margin');
	    }
	}

	public function operatingincomeratiooperatingprofitmargin()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualanneto = $this->input->post('penjualanneto');
			$hargapokokpenjualan = $this->input->post('hargapokokpenjualan');
			$biayaadmindanumum = $this->input->post('biayaadmindanumum');

			$hasil = ($penjualanneto - $hargapokokpenjualan - $biayaadmindanumum) / $penjualanneto;
			$hasil_number_format = number_format($hasil, 4);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Neto : ' .$penjualanneto. '<br>';
			$html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
			$html.='Biaya Admin dan Umum : ' .$biayaadmindanumum. '<br>';
			$html.='Hasil Operating Income Ratio (Operating Profit Margin) : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('operating-income-ratio-operating-profit-margin');
	    }
	}

	public function operatingratio()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$penjualanneto = $this->input->post('penjualanneto');
			$hargapokokpenjualan = $this->input->post('hargapokokpenjualan');
			$biayaadmindanumum = $this->input->post('biayaadmindanumum');

			$hasil = ($hargapokokpenjualan + $biayaadmindanumum) / $penjualanneto;
			$hasil_number_format = number_format($hasil,4);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Penjualan Neto : ' .$penjualanneto. '<br>';
			$html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
			$html.='Biaya Admin dan Umum : ' .$biayaadmindanumum. '<br>';
			$html.='Hasil Operating Ratio : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('operating-ratio');
	    }
	}

	public function netprofitmargin()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$keuntungannetosesudahpajak = $this->input->post('keuntungannetosesudahpajak');
			$penjualanneto = $this->input->post('penjualanneto');

			$hasil = $keuntungannetosesudahpajak / $penjualanneto;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Keuntungan Sesudah Pajak : ' .$keuntungannetosesudahpajak. '<br>';
			$html.='Penjualan Neto : ' .$penjualanneto. '<br>';
			$html.='Hasil Net Profit Margin : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('net-profit-margin');
	    }
	}

	public function earningpoweroftotalinvestment()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$ebit = $this->input->post('ebit');
			$jumlahaktiva = $this->input->post('jumlahaktiva');

			$hasil = $ebit / $jumlahaktiva;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='EBIT : ' .$ebit. '<br>';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Hasil Earning Power of Total Investment (Rate of Return of Total Assets) : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('earning-power-of-total-investment');
	    }
	}

	public function netearningpowerratioreturnoninvestment()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$earningaftertax = $this->input->post('earningaftertax');
			$jumlahaktiva = $this->input->post('jumlahaktiva');

			$hasil = $earningaftertax / $jumlahaktiva;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Earning After Tax : ' .$earningaftertax. '<br>';
			$html.='Jumlah Aktiva : ' .$jumlahaktiva. '<br>';
			$html.='Hasil Net Earning Power Ratio Return On Investment (ROI) : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('net-earning-power-ratio-return-on-investment');
	    }
	}

	public function rateofreturnfortheowners()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$earningaftertax = $this->input->post('earningaftertax');
			$mlmodalsendiri = $this->input->post('mlmodalsendiri');

			$hasil = $earningaftertax / $mlmodalsendiri;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Earning After Tax : ' .$earningaftertax. '<br>';
			$html.='ML Modal Sendiri : ' .$mlmodalsendiri. '<br>';
			$html.='Hasil Rate of Return for the Owners : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('net-earning-power-ratio-return-on-investment');
	    }
	}

	public function kinerjalabaoperasi()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$labaoperasibersih = $this->input->post('labaoperasibersih');
			$penjualan = $this->input->post('penjualan');

			$hasil = $labaoperasibersih / $penjualan;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Laba Operasi Bersih : ' .$labaoperasibersih. '<br>';
			$html.='Penjualan : ' .$penjualan. '<br>';
			$html.='Hasil Kinerja Laba Operasi : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('kinerja-laba-operasi');
	    }
	}

	public function hasilpengembalianatastotalaktivaroi()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$labaoperasibersih = $this->input->post('labaoperasibersih');
			$aktiva = $this->input->post('aktiva');

			$hasil = $labaoperasibersih / $aktiva;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Laba Operasi Bersih : ' .$labaoperasibersih. '<br>';
			$html.='Aktiva : ' .$aktiva. '<br>';
			$html.='Hasil Pengembalian Atas Total Aktiva (ROI) : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('hasil-pengembalian-atas-total-aktiva-roi');
	    }
	}

	public function labaoperasibersihterhadaptotalmodal()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$labaoperasibersih = $this->input->post('labaoperasibersih');
			$totalmodal = $this->input->post('totalmodal');

			$hasil = $labaoperasibersih / $totalmodal;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Laba Operasi Bersih : ' .$labaoperasibersih. '<br>';
			$html.='Total Modal : ' .$totalmodal. '<br>';
			$html.='Hasil Laba Operasi Bersih Terhadap Total Modal : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('laba-operasi-bersih-terhadap-total-modal');
	    }
	}

	public function lababersihterhadappenjualan()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$lababersih = $this->input->post('lababersih');
			$penjualan = $this->input->post('penjualan');

			$hasil = $lababersih / $penjualan;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Laba Bersih : ' .$lababersih. '<br>';
			$html.='Penjualan : ' .$penjualan. '<br>';
			$html.='Hasil Laba bersih Terhadap Penjualan / Marjin Laba Atas Penjualan : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('laba-bersih-terhadap-penjualan');
	    }
	}

    public function hasilpengembalianatasequitas()
    {
        if (!empty($_POST)){
            $dataHtml=array();
            $lababersih = $this->input->post('lababersih');
            $equitaspemegangsaham = $this->input->post('equitaspemegangsaham');

            $hasil = $lababersih / $equitaspemegangsaham;
            $hasil_number_format = number_format($hasil,2);
            $convertpersen = $hasil_number_format * 100;

            $html='';
            $html.='Laba Bersih : ' .$lababersih. '<br>';
            $html.='Equitas Pemegegang Saham : ' .$equitaspemegangsaham. '<br>';
            $html.='Hasil Pengembalian Atas Equitas / Return on Equity Hasil Pengembalian Atas Equitas : ' .$convertpersen. '%</br>';
            $html.='<p>';
            $dataHtml['ACK']=1;
            $dataHtml['HTML']=$html;
            echo json_encode($dataHtml); exit;
        } else {
            redirect('hasil-pengembalian-atas-equitas');
        }
    }

	public function tingkatprofitabilitasmarjinal()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$perubahannoi = $this->input->post('perubahannoi');
			$perubahantotalmodal = $this->input->post('perubahantotalmodal');

			$hasil = $perubahannoi / $perubahantotalmodal;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Perubahan NOI : ' .$perubahannoi. '<br>';
			$html.='Perubahan Total Modal : ' .$perubahantotalmodal. '<br>';
			$html.='Hasil Tingkat Profitabilitas Marjinal : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('tingkat-profitabilitas-marjinal');
	    }
	}

	public function hasilpengembalianmarginalatasequitas()
	{
		if (!empty($_POST)){
			$dataHtml=array();
			$perubahanni = $this->input->post('perubahanni');
			$perubahanequitas = $this->input->post('perubahanequitas');

			$hasil = $perubahanni / $perubahanequitas;
			$hasil_number_format = number_format($hasil,3);
			$convertpersen = $hasil_number_format * 100;

			$html='';
			$html.='Perubahan NI : ' .$perubahanni. '<br>';
			$html.='Perubahan Equitas : ' .$perubahanequitas. '<br>';
			$html.='Hasil Pengembalian Marginal Atas Equitas / Marginal (Return to Equity) : ' .$convertpersen. '%</br>';
			$html.='<p>';
	        $dataHtml['ACK']=1;
	        $dataHtml['HTML']=$html;
	        echo json_encode($dataHtml); exit;
	    } else {
	    	redirect('hasil-pengembalian-marginal-atas-equitas');
	    }
	}

    public function rasiohargalaba()
    {
        if (!empty($_POST)){
            $dataHtml=array();
            $hargapasarpersaham = $this->input->post('hargapasarpersaham');
            $labapersaham = $this->input->post('labapersaham');

            $hasil = $hargapasarpersaham / $labapersaham;
            $hasil_number_format = number_format($hasil,1);
            $convertpersen = $hasil_number_format * 100;

            $html='';
            $html.='Harga Pasar per Saham : ' .$hargapasarpersaham. '<br>';
            $html.='Laba per Saham : ' .$labapersaham. '<br>';
            $html.='Hasil Rasio Harga/Laba Harga Pasar per Saham Terhadap Laba per Saham (Price/Earning Ratio atau P/E Ratio) : ' .$hasil_number_format. '%</br>';
            $html.='<p>';
            $dataHtml['ACK']=1;
            $dataHtml['HTML']=$html;
            echo json_encode($dataHtml); exit;
        } else {
            redirect('rasio-harga-laba');
        }
    }

    public function rasiohargapasarterhadapnilaibuku()
    {
        if (!empty($_POST)){
            $dataHtml=array();
            $hargapasarpersaham = $this->input->post('hargapasarpersaham');
            $nilaibukuequitas = $this->input->post('nilaibukuequitas');

            $hasil = $hargapasarpersaham / $nilaibukuequitas;
            $hasil_number_format = number_format($hasil,1);
            $convertpersen = $hasil_number_format * 100;

            $html='';
            $html.='Harga Pasar per Saham : ' .$hargapasarpersaham. '<br>';
            $html.='Nilai Buku Equitas : ' .$nilaibukuequitas. '<br>';
            $html.='Hasil Rasio Harga Pasar Terhadap Nilai Buku (Market to Book Value) : ' .$hasil_number_format. '%</br>';
            $html.='<p>';
            $dataHtml['ACK']=1;
            $dataHtml['HTML']=$html;
            echo json_encode($dataHtml); exit;
        } else {
            redirect('rasio-harga-pasar-terhadap-nilai-buku');
        }
    }

    public function ukuranefisiensioperasi()
    {
        if (!empty($_POST)){
            $dataHtml=array();
            $hargapokokpenjualan = $this->input->post('hargapokokpenjualan');
            $persediaan = $this->input->post('persediaan');

            $hasil = $hargapokokpenjualan / $persediaan;
            $hasil_number_format = number_format($hasil,3);
            $convertpersen = $hasil_number_format * 100;

            $html='';
            $html.='Harga Pokok Penjualan : ' .$hargapokokpenjualan. '<br>';
            $html.='Persediaan : ' .$persediaan. '<br>';
            $html.='Hasil Ukuran Efisiensi Operasi : ' .$convertpersen. '%</br>';
            $html.='<p>';
            $dataHtml['ACK']=1;
            $dataHtml['HTML']=$html;
            echo json_encode($dataHtml); exit;
        } else {
            redirect('ukuran-efisiensi-operasi');
        }
    }

    public function ukurankebijakankeuangan()
    {
        if (!empty($_POST)){
            $dataHtml=array();
            $totalaktiva = $this->input->post('totalaktiva');
            $ekuitas = $this->input->post('ekuitas');

            $hasil = $totalaktiva / $ekuitas;
            $hasil_number_format = number_format($hasil,2);
            $convertpersen = $hasil_number_format * 100;

            $html='';
            $html.='Total Aktiva : ' .$totalaktiva. '<br>';
            $html.='Ekuitas : ' .$ekuitas. '<br>';
            $html.='Hasil Ukuran Kebijakan Keuangan : ' .$hasil_number_format. '</br>';
            $html.='<p>';
            $dataHtml['ACK']=1;
            $dataHtml['HTML']=$html;
            echo json_encode($dataHtml); exit;
        } else {
            redirect('ukuran-kebijakan-keuangan');
        }
    }
}
