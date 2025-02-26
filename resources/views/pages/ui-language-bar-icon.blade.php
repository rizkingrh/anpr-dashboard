@extends('layouts.default', ['appHeaderLanguageBar' => true])

@section('title', 'Language Bar & Icon')

@push('css')
  <link href="/assets/plugins/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">UI Language Bar & Icon</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">UI Language Bar & Icon <small>header small text goes here...</small></h1>
	<!-- END page-header -->

	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Installation</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- END panel-heading -->
		<!-- BEGIN panel-body -->
		<div class="panel-body">
			<!-- BEGIN row -->
			<div class="row">
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ad h1 rounded mb-0" title="ad" id="ad"></div> <div class="ps-2 fw-bold">AD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ae h1 rounded mb-0" title="ae" id="ae"></div> <div class="ps-2 fw-bold">AE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-af h1 rounded mb-0" title="af" id="af"></div> <div class="ps-2 fw-bold">AF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ag h1 rounded mb-0" title="ag" id="ag"></div> <div class="ps-2 fw-bold">AG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ai h1 rounded mb-0" title="ai" id="ai"></div> <div class="ps-2 fw-bold">AU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-al h1 rounded mb-0" title="al" id="al"></div> <div class="ps-2 fw-bold">AL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-am h1 rounded mb-0" title="am" id="am"></div> <div class="ps-2 fw-bold">AM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ao h1 rounded mb-0" title="ao" id="ao"></div> <div class="ps-2 fw-bold">AO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-aq h1 rounded mb-0" title="aq" id="aq"></div> <div class="ps-2 fw-bold">AQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ar h1 rounded mb-0" title="ar" id="ar"></div> <div class="ps-2 fw-bold">AR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-as h1 rounded mb-0" title="as" id="as"></div> <div class="ps-2 fw-bold">AS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-at h1 rounded mb-0" title="at" id="at"></div> <div class="ps-2 fw-bold">AT</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-au h1 rounded mb-0" title="au" id="au"></div> <div class="ps-2 fw-bold">AU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-aw h1 rounded mb-0" title="aw" id="aw"></div> <div class="ps-2 fw-bold">AW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ax h1 rounded mb-0" title="ax" id="ax"></div> <div class="ps-2 fw-bold">AX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-az h1 rounded mb-0" title="az" id="az"></div> <div class="ps-2 fw-bold">AZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ba h1 rounded mb-0" title="ba" id="ba"></div> <div class="ps-2 fw-bold">BA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bb h1 rounded mb-0" title="bb" id="bb"></div> <div class="ps-2 fw-bold">BB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bd h1 rounded mb-0" title="bd" id="bd"></div> <div class="ps-2 fw-bold">BD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-be h1 rounded mb-0" title="be" id="be"></div> <div class="ps-2 fw-bold">BE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bf h1 rounded mb-0" title="bf" id="bf"></div> <div class="ps-2 fw-bold">BF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bg h1 rounded mb-0" title="bg" id="bg"></div> <div class="ps-2 fw-bold">BG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bh h1 rounded mb-0" title="bh" id="bh"></div> <div class="ps-2 fw-bold">BH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bi h1 rounded mb-0" title="bi" id="bi"></div> <div class="ps-2 fw-bold">BI</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bj h1 rounded mb-0" title="bj" id="bj"></div> <div class="ps-2 fw-bold">BJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bl h1 rounded mb-0" title="bl" id="bl"></div> <div class="ps-2 fw-bold">BL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bm h1 rounded mb-0" title="bm" id="bm"></div> <div class="ps-2 fw-bold">BM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bn h1 rounded mb-0" title="bn" id="bn"></div> <div class="ps-2 fw-bold">BN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bo h1 rounded mb-0" title="bo" id="bo"></div> <div class="ps-2 fw-bold">BO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bq h1 rounded mb-0" title="bq" id="bq"></div> <div class="ps-2 fw-bold">BQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-br h1 rounded mb-0" title="br" id="br"></div> <div class="ps-2 fw-bold">BR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bs h1 rounded mb-0" title="bs" id="bs"></div> <div class="ps-2 fw-bold">BS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bt h1 rounded mb-0" title="bt" id="bt"></div> <div class="ps-2 fw-bold">BT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bv h1 rounded mb-0" title="bv" id="bv"></div> <div class="ps-2 fw-bold">BV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bw h1 rounded mb-0" title="bw" id="bw"></div> <div class="ps-2 fw-bold">BW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-by h1 rounded mb-0" title="by" id="by"></div> <div class="ps-2 fw-bold">BY</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-bz h1 rounded mb-0" title="bz" id="bz"></div> <div class="ps-2 fw-bold">BZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ca h1 rounded mb-0" title="ca" id="ca"></div> <div class="ps-2 fw-bold">CA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cc h1 rounded mb-0" title="cc" id="cc"></div> <div class="ps-2 fw-bold">CC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cd h1 rounded mb-0" title="cd" id="cd"></div> <div class="ps-2 fw-bold">CD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cf h1 rounded mb-0" title="cf" id="cf"></div> <div class="ps-2 fw-bold">CF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cg h1 rounded mb-0" title="cg" id="cg"></div> <div class="ps-2 fw-bold">CG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ch h1 rounded mb-0" title="ch" id="ch"></div> <div class="ps-2 fw-bold">CH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ci h1 rounded mb-0" title="ci" id="ci"></div> <div class="ps-2 fw-bold">CI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ck h1 rounded mb-0" title="ck" id="ck"></div> <div class="ps-2 fw-bold">CK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cl h1 rounded mb-0" title="cl" id="cl"></div> <div class="ps-2 fw-bold">CL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cm h1 rounded mb-0" title="cm" id="cm"></div> <div class="ps-2 fw-bold">CM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cn h1 rounded mb-0" title="cn" id="cn"></div> <div class="ps-2 fw-bold">CN</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-co h1 rounded mb-0" title="co" id="co"></div> <div class="ps-2 fw-bold">CO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cr h1 rounded mb-0" title="cr" id="cr"></div> <div class="ps-2 fw-bold">CR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cu h1 rounded mb-0" title="cu" id="cu"></div> <div class="ps-2 fw-bold">CU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cv h1 rounded mb-0" title="cv" id="cv"></div> <div class="ps-2 fw-bold">CV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cw h1 rounded mb-0" title="cw" id="cw"></div> <div class="ps-2 fw-bold">CW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cx h1 rounded mb-0" title="cx" id="cx"></div> <div class="ps-2 fw-bold">CX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cy h1 rounded mb-0" title="cy" id="cy"></div> <div class="ps-2 fw-bold">CY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-cz h1 rounded mb-0" title="cz" id="cz"></div> <div class="ps-2 fw-bold">CZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-de h1 rounded mb-0" title="de" id="de"></div> <div class="ps-2 fw-bold">DE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-dj h1 rounded mb-0" title="dj" id="dj"></div> <div class="ps-2 fw-bold">DJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-dk h1 rounded mb-0" title="dk" id="dk"></div> <div class="ps-2 fw-bold">DK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-dm h1 rounded mb-0" title="dm" id="dm"></div> <div class="ps-2 fw-bold">DM</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-do h1 rounded mb-0" title="do" id="do"></div> <div class="ps-2 fw-bold">DO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-dz h1 rounded mb-0" title="dz" id="dz"></div> <div class="ps-2 fw-bold">DZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ec h1 rounded mb-0" title="ec" id="ec"></div> <div class="ps-2 fw-bold">EC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ee h1 rounded mb-0" title="ee" id="ee"></div> <div class="ps-2 fw-bold">EE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-eg h1 rounded mb-0" title="eg" id="eg"></div> <div class="ps-2 fw-bold">EG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-eh h1 rounded mb-0" title="eh" id="eh"></div> <div class="ps-2 fw-bold">EH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-er h1 rounded mb-0" title="er" id="er"></div> <div class="ps-2 fw-bold">ER</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-es h1 rounded mb-0" title="es" id="es"></div> <div class="ps-2 fw-bold">ES</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-et h1 rounded mb-0" title="et" id="et"></div> <div class="ps-2 fw-bold">ET</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fi h1 rounded mb-0" title="fi" id="fi"></div> <div class="ps-2 fw-bold">FI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fj h1 rounded mb-0" title="fj" id="fj"></div> <div class="ps-2 fw-bold">FJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fk h1 rounded mb-0" title="fk" id="fk"></div> <div class="ps-2 fw-bold">FK</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fm h1 rounded mb-0" title="fm" id="fm"></div> <div class="ps-2 fw-bold">FM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fo h1 rounded mb-0" title="fo" id="fo"></div> <div class="ps-2 fw-bold">FO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-fr h1 rounded mb-0" title="fr" id="fr"></div> <div class="ps-2 fw-bold">FR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ga h1 rounded mb-0" title="ga" id="ga"></div> <div class="ps-2 fw-bold">GA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gb h1 rounded mb-0" title="gb" id="gb"></div> <div class="ps-2 fw-bold">GB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gd h1 rounded mb-0" title="gd" id="gd"></div> <div class="ps-2 fw-bold">GD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ge h1 rounded mb-0" title="ge" id="ge"></div> <div class="ps-2 fw-bold">GE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gf h1 rounded mb-0" title="gf" id="gf"></div> <div class="ps-2 fw-bold">GF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gg h1 rounded mb-0" title="gg" id="gg"></div> <div class="ps-2 fw-bold">GG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gh h1 rounded mb-0" title="gh" id="gh"></div> <div class="ps-2 fw-bold">GH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gi h1 rounded mb-0" title="gi" id="gi"></div> <div class="ps-2 fw-bold">GI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gl h1 rounded mb-0" title="gl" id="gl"></div> <div class="ps-2 fw-bold">GL</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gm h1 rounded mb-0" title="gm" id="gm"></div> <div class="ps-2 fw-bold">GM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gn h1 rounded mb-0" title="gn" id="gn"></div> <div class="ps-2 fw-bold">GN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gp h1 rounded mb-0" title="gp" id="gp"></div> <div class="ps-2 fw-bold">GP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gq h1 rounded mb-0" title="gq" id="gq"></div> <div class="ps-2 fw-bold">GQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gr h1 rounded mb-0" title="gr" id="gr"></div> <div class="ps-2 fw-bold">GR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gs h1 rounded mb-0" title="gs" id="gs"></div> <div class="ps-2 fw-bold">GS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gt h1 rounded mb-0" title="gt" id="gt"></div> <div class="ps-2 fw-bold">GT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gu h1 rounded mb-0" title="gu" id="gu"></div> <div class="ps-2 fw-bold">GU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gw h1 rounded mb-0" title="gw" id="gw"></div> <div class="ps-2 fw-bold">GW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-gy h1 rounded mb-0" title="gy" id="gy"></div> <div class="ps-2 fw-bold">GY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-hk h1 rounded mb-0" title="hk" id="hk"></div> <div class="ps-2 fw-bold">HK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-hm h1 rounded mb-0" title="hm" id="hm"></div> <div class="ps-2 fw-bold">HM</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-hn h1 rounded mb-0" title="hn" id="hn"></div> <div class="ps-2 fw-bold">HN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-hr h1 rounded mb-0" title="hr" id="hr"></div> <div class="ps-2 fw-bold">HR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ht h1 rounded mb-0" title="ht" id="ht"></div> <div class="ps-2 fw-bold">HT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-hu h1 rounded mb-0" title="hu" id="hu"></div> <div class="ps-2 fw-bold">HU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-id h1 rounded mb-0" title="id" id="id"></div> <div class="ps-2 fw-bold">ID</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ie h1 rounded mb-0" title="ie" id="ie"></div> <div class="ps-2 fw-bold">IE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-il h1 rounded mb-0" title="il" id="il"></div> <div class="ps-2 fw-bold">IL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-im h1 rounded mb-0" title="im" id="im"></div> <div class="ps-2 fw-bold">IM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-in h1 rounded mb-0" title="in" id="in"></div> <div class="ps-2 fw-bold">IN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-io h1 rounded mb-0" title="io" id="io"></div> <div class="ps-2 fw-bold">IO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-iq h1 rounded mb-0" title="iq" id="iq"></div> <div class="ps-2 fw-bold">IQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ir h1 rounded mb-0" title="ir" id="ir"></div> <div class="ps-2 fw-bold">IR</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-is h1 rounded mb-0" title="is" id="is"></div> <div class="ps-2 fw-bold">IS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-it h1 rounded mb-0" title="it" id="it"></div> <div class="ps-2 fw-bold">IT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-je h1 rounded mb-0" title="je" id="je"></div> <div class="ps-2 fw-bold">JE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-jm h1 rounded mb-0" title="jm" id="jm"></div> <div class="ps-2 fw-bold">JM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-jo h1 rounded mb-0" title="jo" id="jo"></div> <div class="ps-2 fw-bold">JO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-jp h1 rounded mb-0" title="jp" id="jp"></div> <div class="ps-2 fw-bold">JP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ke h1 rounded mb-0" title="ke" id="ke"></div> <div class="ps-2 fw-bold">KE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kg h1 rounded mb-0" title="kg" id="kg"></div> <div class="ps-2 fw-bold">KG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kh h1 rounded mb-0" title="kh" id="kh"></div> <div class="ps-2 fw-bold">KH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ki h1 rounded mb-0" title="ki" id="ki"></div> <div class="ps-2 fw-bold">KI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-km h1 rounded mb-0" title="km" id="km"></div> <div class="ps-2 fw-bold">KM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kn h1 rounded mb-0" title="kn" id="kn"></div> <div class="ps-2 fw-bold">KN</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kp h1 rounded mb-0" title="kp" id="kp"></div> <div class="ps-2 fw-bold">KP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kr h1 rounded mb-0" title="kr" id="kr"></div> <div class="ps-2 fw-bold">KR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kw h1 rounded mb-0" title="kw" id="kw"></div> <div class="ps-2 fw-bold">KW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ky h1 rounded mb-0" title="ky" id="ky"></div> <div class="ps-2 fw-bold">KY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-kz h1 rounded mb-0" title="kz" id="kz"></div> <div class="ps-2 fw-bold">KZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-la h1 rounded mb-0" title="la" id="la"></div> <div class="ps-2 fw-bold">LA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lb h1 rounded mb-0" title="lb" id="lb"></div> <div class="ps-2 fw-bold">LB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lc h1 rounded mb-0" title="lc" id="lc"></div> <div class="ps-2 fw-bold">LC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-li h1 rounded mb-0" title="li" id="li"></div> <div class="ps-2 fw-bold">LI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lk h1 rounded mb-0" title="lk" id="lk"></div> <div class="ps-2 fw-bold">LK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lr h1 rounded mb-0" title="lr" id="lr"></div> <div class="ps-2 fw-bold">LR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ls h1 rounded mb-0" title="ls" id="ls"></div> <div class="ps-2 fw-bold">LS</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lt h1 rounded mb-0" title="lt" id="lt"></div> <div class="ps-2 fw-bold">LT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lu h1 rounded mb-0" title="lu" id="lu"></div> <div class="ps-2 fw-bold">LU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-lv h1 rounded mb-0" title="lv" id="lv"></div> <div class="ps-2 fw-bold">LV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ly h1 rounded mb-0" title="ly" id="ly"></div> <div class="ps-2 fw-bold">LY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ma h1 rounded mb-0" title="ma" id="ma"></div> <div class="ps-2 fw-bold">MA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mc h1 rounded mb-0" title="mc" id="mc"></div> <div class="ps-2 fw-bold">MC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-md h1 rounded mb-0" title="md" id="md"></div> <div class="ps-2 fw-bold">MD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-me h1 rounded mb-0" title="me" id="me"></div> <div class="ps-2 fw-bold">ME</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mf h1 rounded mb-0" title="mf" id="mf"></div> <div class="ps-2 fw-bold">MF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mg h1 rounded mb-0" title="mg" id="mg"></div> <div class="ps-2 fw-bold">MG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mh h1 rounded mb-0" title="mh" id="mh"></div> <div class="ps-2 fw-bold">MH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mk h1 rounded mb-0" title="mk" id="mk"></div> <div class="ps-2 fw-bold">MK</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ml h1 rounded mb-0" title="ml" id="ml"></div> <div class="ps-2 fw-bold">ML</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mm h1 rounded mb-0" title="mm" id="mm"></div> <div class="ps-2 fw-bold">MM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mn h1 rounded mb-0" title="mn" id="mn"></div> <div class="ps-2 fw-bold">MN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mo h1 rounded mb-0" title="mo" id="mo"></div> <div class="ps-2 fw-bold">MO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mp h1 rounded mb-0" title="mp" id="mp"></div> <div class="ps-2 fw-bold">MP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mq h1 rounded mb-0" title="mq" id="mq"></div> <div class="ps-2 fw-bold">MQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mr h1 rounded mb-0" title="mr" id="mr"></div> <div class="ps-2 fw-bold">MR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ms h1 rounded mb-0" title="ms" id="ms"></div> <div class="ps-2 fw-bold">MS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mt h1 rounded mb-0" title="mt" id="mt"></div> <div class="ps-2 fw-bold">MT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mu h1 rounded mb-0" title="mu" id="mu"></div> <div class="ps-2 fw-bold">MU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mv h1 rounded mb-0" title="mv" id="mv"></div> <div class="ps-2 fw-bold">MV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mw h1 rounded mb-0" title="mw" id="mw"></div> <div class="ps-2 fw-bold">MW</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mx h1 rounded mb-0" title="mx" id="mx"></div> <div class="ps-2 fw-bold">MX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-my h1 rounded mb-0" title="my" id="my"></div> <div class="ps-2 fw-bold">MY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-mz h1 rounded mb-0" title="mz" id="mz"></div> <div class="ps-2 fw-bold">MZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-na h1 rounded mb-0" title="na" id="na"></div> <div class="ps-2 fw-bold">NA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nc h1 rounded mb-0" title="nc" id="nc"></div> <div class="ps-2 fw-bold">NC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ne h1 rounded mb-0" title="ne" id="ne"></div> <div class="ps-2 fw-bold">NE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nf h1 rounded mb-0" title="nf" id="nf"></div> <div class="ps-2 fw-bold">NF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ng h1 rounded mb-0" title="ng" id="ng"></div> <div class="ps-2 fw-bold">NG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ni h1 rounded mb-0" title="ni" id="ni"></div> <div class="ps-2 fw-bold">NI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nl h1 rounded mb-0" title="nl" id="nl"></div> <div class="ps-2 fw-bold">NL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-no h1 rounded mb-0" title="no" id="no"></div> <div class="ps-2 fw-bold">NO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-np h1 rounded mb-0" title="np" id="np"></div> <div class="ps-2 fw-bold">NP</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nr h1 rounded mb-0" title="nr" id="nr"></div> <div class="ps-2 fw-bold">NR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nu h1 rounded mb-0" title="nu" id="nu"></div> <div class="ps-2 fw-bold">NU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-nz h1 rounded mb-0" title="nz" id="nz"></div> <div class="ps-2 fw-bold">NZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-om h1 rounded mb-0" title="om" id="om"></div> <div class="ps-2 fw-bold">OM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pa h1 rounded mb-0" title="pa" id="pa"></div> <div class="ps-2 fw-bold">PA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pe h1 rounded mb-0" title="pe" id="pe"></div> <div class="ps-2 fw-bold">PE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pf h1 rounded mb-0" title="pf" id="pf"></div> <div class="ps-2 fw-bold">PF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pg h1 rounded mb-0" title="pg" id="pg"></div> <div class="ps-2 fw-bold">PG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ph h1 rounded mb-0" title="ph" id="ph"></div> <div class="ps-2 fw-bold">PH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pk h1 rounded mb-0" title="pk" id="pk"></div> <div class="ps-2 fw-bold">PK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pl h1 rounded mb-0" title="pl" id="pl"></div> <div class="ps-2 fw-bold">PL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pm h1 rounded mb-0" title="pm" id="pm"></div> <div class="ps-2 fw-bold">PM</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pn h1 rounded mb-0" title="pn" id="pn"></div> <div class="ps-2 fw-bold">PN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pr h1 rounded mb-0" title="pr" id="pr"></div> <div class="ps-2 fw-bold">PR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ps h1 rounded mb-0" title="ps" id="ps"></div> <div class="ps-2 fw-bold">PS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pt h1 rounded mb-0" title="pt" id="pt"></div> <div class="ps-2 fw-bold">PT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-pw h1 rounded mb-0" title="pw" id="pw"></div> <div class="ps-2 fw-bold">PW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-py h1 rounded mb-0" title="py" id="py"></div> <div class="ps-2 fw-bold">PY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-qa h1 rounded mb-0" title="qa" id="qa"></div> <div class="ps-2 fw-bold">QA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-re h1 rounded mb-0" title="re" id="re"></div> <div class="ps-2 fw-bold">RE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ro h1 rounded mb-0" title="ro" id="ro"></div> <div class="ps-2 fw-bold">RO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-rs h1 rounded mb-0" title="rs" id="rs"></div> <div class="ps-2 fw-bold">RS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ru h1 rounded mb-0" title="ru" id="ru"></div> <div class="ps-2 fw-bold">RU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-rw h1 rounded mb-0" title="rw" id="rw"></div> <div class="ps-2 fw-bold">RW</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sa h1 rounded mb-0" title="sa" id="sa"></div> <div class="ps-2 fw-bold">SA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sb h1 rounded mb-0" title="sb" id="sb"></div> <div class="ps-2 fw-bold">SB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sc h1 rounded mb-0" title="sc" id="sc"></div> <div class="ps-2 fw-bold">SC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sd h1 rounded mb-0" title="sd" id="sd"></div> <div class="ps-2 fw-bold">SD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-se h1 rounded mb-0" title="se" id="se"></div> <div class="ps-2 fw-bold">SE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sg h1 rounded mb-0" title="sg" id="sg"></div> <div class="ps-2 fw-bold">SG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sh h1 rounded mb-0" title="sh" id="sh"></div> <div class="ps-2 fw-bold">SH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-si h1 rounded mb-0" title="si" id="si"></div> <div class="ps-2 fw-bold">SI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sj h1 rounded mb-0" title="sj" id="sj"></div> <div class="ps-2 fw-bold">SJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sk h1 rounded mb-0" title="sk" id="sk"></div> <div class="ps-2 fw-bold">SK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sl h1 rounded mb-0" title="sl" id="sl"></div> <div class="ps-2 fw-bold">SL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sm h1 rounded mb-0" title="sm" id="sm"></div> <div class="ps-2 fw-bold">SM</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sn h1 rounded mb-0" title="sn" id="sn"></div> <div class="ps-2 fw-bold">SN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-so h1 rounded mb-0" title="so" id="so"></div> <div class="ps-2 fw-bold">SO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sr h1 rounded mb-0" title="sr" id="sr"></div> <div class="ps-2 fw-bold">SR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ss h1 rounded mb-0" title="ss" id="ss"></div> <div class="ps-2 fw-bold">SS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-st h1 rounded mb-0" title="st" id="st"></div> <div class="ps-2 fw-bold">ST</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sv h1 rounded mb-0" title="sv" id="sv"></div> <div class="ps-2 fw-bold">SV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sx h1 rounded mb-0" title="sx" id="sx"></div> <div class="ps-2 fw-bold">SX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sy h1 rounded mb-0" title="sy" id="sy"></div> <div class="ps-2 fw-bold">SY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-sz h1 rounded mb-0" title="sz" id="sz"></div> <div class="ps-2 fw-bold">SZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tc h1 rounded mb-0" title="tc" id="tc"></div> <div class="ps-2 fw-bold">TC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-td h1 rounded mb-0" title="td" id="td"></div> <div class="ps-2 fw-bold">TD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tf h1 rounded mb-0" title="tf" id="tf"></div> <div class="ps-2 fw-bold">TF</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tg h1 rounded mb-0" title="tg" id="tg"></div> <div class="ps-2 fw-bold">TG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-th h1 rounded mb-0" title="th" id="th"></div> <div class="ps-2 fw-bold">TH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tj h1 rounded mb-0" title="tj" id="tj"></div> <div class="ps-2 fw-bold">TJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tk h1 rounded mb-0" title="tk" id="tk"></div> <div class="ps-2 fw-bold">TK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tl h1 rounded mb-0" title="tl" id="tl"></div> <div class="ps-2 fw-bold">TL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tm h1 rounded mb-0" title="tm" id="tm"></div> <div class="ps-2 fw-bold">TM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tn h1 rounded mb-0" title="tn" id="tn"></div> <div class="ps-2 fw-bold">TN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-to h1 rounded mb-0" title="to" id="to"></div> <div class="ps-2 fw-bold">TO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tr h1 rounded mb-0" title="tr" id="tr"></div> <div class="ps-2 fw-bold">TR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tt h1 rounded mb-0" title="tt" id="tt"></div> <div class="ps-2 fw-bold">TT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tv h1 rounded mb-0" title="tv" id="tv"></div> <div class="ps-2 fw-bold">TV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tw h1 rounded mb-0" title="tw" id="tw"></div> <div class="ps-2 fw-bold">TW</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-tz h1 rounded mb-0" title="tz" id="tz"></div> <div class="ps-2 fw-bold">TZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ua h1 rounded mb-0" title="ua" id="ua"></div> <div class="ps-2 fw-bold">UA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ug h1 rounded mb-0" title="ug" id="ug"></div> <div class="ps-2 fw-bold">UG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-um h1 rounded mb-0" title="um" id="um"></div> <div class="ps-2 fw-bold">UM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-us h1 rounded mb-0" title="us" id="us"></div> <div class="ps-2 fw-bold">US</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-uy h1 rounded mb-0" title="uy" id="uy"></div> <div class="ps-2 fw-bold">UY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-uz h1 rounded mb-0" title="uz" id="uz"></div> <div class="ps-2 fw-bold">UZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-va h1 rounded mb-0" title="va" id="va"></div> <div class="ps-2 fw-bold">VA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-vc h1 rounded mb-0" title="vc" id="vc"></div> <div class="ps-2 fw-bold">VC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ve h1 rounded mb-0" title="ve" id="ve"></div> <div class="ps-2 fw-bold">VE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-vg h1 rounded mb-0" title="vg" id="vg"></div> <div class="ps-2 fw-bold">VG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-vi h1 rounded mb-0" title="vi" id="vi"></div> <div class="ps-2 fw-bold">VI</div></div>
			
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-vn h1 rounded mb-0" title="vn" id="vn"></div> <div class="ps-2 fw-bold">VN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-vu h1 rounded mb-0" title="vu" id="vu"></div> <div class="ps-2 fw-bold">VU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-wf h1 rounded mb-0" title="wf" id="wf"></div> <div class="ps-2 fw-bold">WF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ws h1 rounded mb-0" title="ws" id="ws"></div> <div class="ps-2 fw-bold">WS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-ye h1 rounded mb-0" title="ye" id="ye"></div> <div class="ps-2 fw-bold">YE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-yt h1 rounded mb-0" title="yt" id="yt"></div> <div class="ps-2 fw-bold">YT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-za h1 rounded mb-0" title="za" id="za"></div> <div class="ps-2 fw-bold">ZA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-zm h1 rounded mb-0" title="zm" id="zm"></div> <div class="ps-2 fw-bold">ZM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="fi fi-zw h1 rounded mb-0" title="zw" id="zw"></div> <div class="ps-2 fw-bold">ZW</div></div>
				</div>
			</div>
			<!-- END row -->
		</div>
		<!-- END panel-body -->
		<!-- BEGIN hljs-wrapper -->
		<div class="hljs-wrapper">
			<pre><code class="html" data-url="/assets/data/ui-language-bar-icon/code-1.json"></code></pre>
		</div>
		<!-- END hljs-wrapper -->
	</div>
	<!-- END panel -->
@endsection
