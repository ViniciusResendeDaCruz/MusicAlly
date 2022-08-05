<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>MusicAlly</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>" />
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/owl-carousel-2/owl.carousel.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/owl-carousel-2/owl.theme.default.min.css') ?>" />
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/MusicAlly-mini.png') ?>" />

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<!-- DataTable -->
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/css/styles.less') ?>	" />
	<script src="https://cdn.jsdelivr.net/npm/less"></script>
	<script src="https://kit.fontawesome.com/79404fc081.js" crossorigin="anonymous"></script>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script> -->
</head>
<style>
	@charset "UTF-8";

	table.dataTable td.dt-control {
		text-align: center;
		cursor: pointer;
	}

	table.dataTable td.dt-control:before {
		height: 1em;
		width: 1em;
		margin-top: -9px;
		display: inline-block;
		color: white;
		border: 0.15em solid white;
		border-radius: 1em;
		box-shadow: 0 0 0.2em #444;
		box-sizing: content-box;
		text-align: center;
		text-indent: 0 !important;
		font-family: "Courier New", Courier, monospace;
		line-height: 1em;
		content: "+";
		background-color: #31b131;
	}

	table.dataTable tr.dt-hasChild td.dt-control:before {
		content: "-";
		background-color: #d33333;

	}

	table.dataTable thead>tr>th.sorting,
	table.dataTable thead>tr>th.sorting_asc,
	table.dataTable thead>tr>th.sorting_desc,
	table.dataTable thead>tr>th.sorting_asc_disabled,
	table.dataTable thead>tr>th.sorting_desc_disabled,
	table.dataTable thead>tr>td.sorting,
	table.dataTable thead>tr>td.sorting_asc,
	table.dataTable thead>tr>td.sorting_desc,
	table.dataTable thead>tr>td.sorting_asc_disabled,
	table.dataTable thead>tr>td.sorting_desc_disabled {
		cursor: pointer;
		position: relative;
		padding-right: 26px;
	}

	table.dataTable thead>tr>th.sorting:before,
	table.dataTable thead>tr>th.sorting:after,
	table.dataTable thead>tr>th.sorting_asc:before,
	table.dataTable thead>tr>th.sorting_asc:after,
	table.dataTable thead>tr>th.sorting_desc:before,
	table.dataTable thead>tr>th.sorting_desc:after,
	table.dataTable thead>tr>th.sorting_asc_disabled:before,
	table.dataTable thead>tr>th.sorting_asc_disabled:after,
	table.dataTable thead>tr>th.sorting_desc_disabled:before,
	table.dataTable thead>tr>th.sorting_desc_disabled:after,
	table.dataTable thead>tr>td.sorting:before,
	table.dataTable thead>tr>td.sorting:after,
	table.dataTable thead>tr>td.sorting_asc:before,
	table.dataTable thead>tr>td.sorting_asc:after,
	table.dataTable thead>tr>td.sorting_desc:before,
	table.dataTable thead>tr>td.sorting_desc:after,
	table.dataTable thead>tr>td.sorting_asc_disabled:before,
	table.dataTable thead>tr>td.sorting_asc_disabled:after,
	table.dataTable thead>tr>td.sorting_desc_disabled:before,
	table.dataTable thead>tr>td.sorting_desc_disabled:after {
		position: absolute;
		display: block;
		opacity: 0.125;
		right: 10px;
		line-height: 9px;
		font-size: 0.8em;
	}

	table.dataTable thead>tr>th.sorting:before,
	table.dataTable thead>tr>th.sorting_asc:before,
	table.dataTable thead>tr>th.sorting_desc:before,
	table.dataTable thead>tr>th.sorting_asc_disabled:before,
	table.dataTable thead>tr>th.sorting_desc_disabled:before,
	table.dataTable thead>tr>td.sorting:before,
	table.dataTable thead>tr>td.sorting_asc:before,
	table.dataTable thead>tr>td.sorting_desc:before,
	table.dataTable thead>tr>td.sorting_asc_disabled:before,
	table.dataTable thead>tr>td.sorting_desc_disabled:before {
		bottom: 50%;
		content: "▲";
	}

	table.dataTable thead>tr>th.sorting:after,
	table.dataTable thead>tr>th.sorting_asc:after,
	table.dataTable thead>tr>th.sorting_desc:after,
	table.dataTable thead>tr>th.sorting_asc_disabled:after,
	table.dataTable thead>tr>th.sorting_desc_disabled:after,
	table.dataTable thead>tr>td.sorting:after,
	table.dataTable thead>tr>td.sorting_asc:after,
	table.dataTable thead>tr>td.sorting_desc:after,
	table.dataTable thead>tr>td.sorting_asc_disabled:after,
	table.dataTable thead>tr>td.sorting_desc_disabled:after {
		top: 50%;
		content: "▼";
	}

	table.dataTable thead>tr>th.sorting_asc:before,
	table.dataTable thead>tr>th.sorting_desc:after,
	table.dataTable thead>tr>td.sorting_asc:before,
	table.dataTable thead>tr>td.sorting_desc:after {
		opacity: 0.6;
	}

	table.dataTable thead>tr>th.sorting_desc_disabled:after,
	table.dataTable thead>tr>th.sorting_asc_disabled:before,
	table.dataTable thead>tr>td.sorting_desc_disabled:after,
	table.dataTable thead>tr>td.sorting_asc_disabled:before {
		display: none;
	}

	table.dataTable thead>tr>th:active,
	table.dataTable thead>tr>td:active {
		outline: none;
	}

	div.dataTables_scrollBody table.dataTable thead>tr>th:before,
	div.dataTables_scrollBody table.dataTable thead>tr>th:after,
	div.dataTables_scrollBody table.dataTable thead>tr>td:before,
	div.dataTables_scrollBody table.dataTable thead>tr>td:after {
		display: none;
	}

	div.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 200px;
		margin-left: -100px;
		margin-top: -26px;
		text-align: center;
		padding: 2px;
	}

	div.dataTables_processing>div:last-child {
		position: relative;
		width: 80px;
		height: 15px;
		margin: 1em auto;
	}

	div.dataTables_processing>div:last-child>div {
		position: absolute;
		top: 0;
		width: 13px;
		height: 13px;
		border-radius: 50%;
		background: #a3a3a3;
		animation-timing-function: cubic-bezier(0, 1, 1, 0);
	}

	div.dataTables_processing>div:last-child>div:nth-child(1) {
		left: 8px;
		animation: datatables-loader-1 0.6s infinite;
	}

	div.dataTables_processing>div:last-child>div:nth-child(2) {
		left: 8px;
		animation: datatables-loader-2 0.6s infinite;
	}

	div.dataTables_processing>div:last-child>div:nth-child(3) {
		left: 32px;
		animation: datatables-loader-2 0.6s infinite;
	}

	div.dataTables_processing>div:last-child>div:nth-child(4) {
		left: 56px;
		animation: datatables-loader-3 0.6s infinite;
	}

	@keyframes datatables-loader-1 {
		0% {
			transform: scale(0);
		}

		100% {
			transform: scale(1);
		}
	}

	@keyframes datatables-loader-3 {
		0% {
			transform: scale(1);
		}

		100% {
			transform: scale(0);
		}
	}

	@keyframes datatables-loader-2 {
		0% {
			transform: translate(0, 0);
		}

		100% {
			transform: translate(24px, 0);
		}
	}

	table.dataTable.nowrap th,
	table.dataTable.nowrap td {
		white-space: nowrap;
	}

	table.dataTable th.dt-left,
	table.dataTable td.dt-left {
		text-align: left;
	}

	table.dataTable th.dt-center,
	table.dataTable td.dt-center,
	table.dataTable td.dataTables_empty {
		text-align: center;
	}

	table.dataTable th.dt-right,
	table.dataTable td.dt-right {
		text-align: right;
	}

	table.dataTable th.dt-justify,
	table.dataTable td.dt-justify {
		text-align: justify;
	}

	table.dataTable th.dt-nowrap,
	table.dataTable td.dt-nowrap {
		white-space: nowrap;
	}

	table.dataTable thead th,
	table.dataTable thead td,
	table.dataTable tfoot th,
	table.dataTable tfoot td {
		text-align: left;
	}

	table.dataTable thead th.dt-head-left,
	table.dataTable thead td.dt-head-left,
	table.dataTable tfoot th.dt-head-left,
	table.dataTable tfoot td.dt-head-left {
		text-align: left;
	}

	table.dataTable thead th.dt-head-center,
	table.dataTable thead td.dt-head-center,
	table.dataTable tfoot th.dt-head-center,
	table.dataTable tfoot td.dt-head-center {
		text-align: center;
	}

	table.dataTable thead th.dt-head-right,
	table.dataTable thead td.dt-head-right,
	table.dataTable tfoot th.dt-head-right,
	table.dataTable tfoot td.dt-head-right {
		text-align: right;
	}

	table.dataTable thead th.dt-head-justify,
	table.dataTable thead td.dt-head-justify,
	table.dataTable tfoot th.dt-head-justify,
	table.dataTable tfoot td.dt-head-justify {
		text-align: justify;
	}

	table.dataTable thead th.dt-head-nowrap,
	table.dataTable thead td.dt-head-nowrap,
	table.dataTable tfoot th.dt-head-nowrap,
	table.dataTable tfoot td.dt-head-nowrap {
		white-space: nowrap;
	}

	table.dataTable tbody th.dt-body-left,
	table.dataTable tbody td.dt-body-left {
		text-align: left;
	}

	table.dataTable tbody th.dt-body-center,
	table.dataTable tbody td.dt-body-center {
		text-align: center;
	}

	table.dataTable tbody th.dt-body-right,
	table.dataTable tbody td.dt-body-right {
		text-align: right;
	}

	table.dataTable tbody th.dt-body-justify,
	table.dataTable tbody td.dt-body-justify {
		text-align: justify;
	}

	table.dataTable tbody th.dt-body-nowrap,
	table.dataTable tbody td.dt-body-nowrap {
		white-space: nowrap;
	}

	/*
 * Table styles
 */
	table.dataTable {
		width: 100%;
		margin: 0 auto;
		clear: both;
		border-collapse: separate;
		border-spacing: 0;
		/*
   * Header and footer styles
   */
		/*
   * Body styles
   */
	}

	table.dataTable thead th,
	table.dataTable tfoot th {
		font-weight: bold;
	}

	table.dataTable thead th,
	table.dataTable thead td {
		background-color: #004573;
		padding: 10px;
		border-bottom: 1px solid #2b2b2b;
	}

	table.dataTable thead th:active,
	table.dataTable thead td:active {
		outline: none;
	}

	table.dataTable tfoot th,
	table.dataTable tfoot td {
		padding: 10px 10px 6px 10px;
		border-top: 1px solid #2b2b2b;
	}

	table.dataTable tbody tr {
		background-color: #1a1a1a;
		border-radius: 50px;
		/* cursor: pointer; */
	}

	table.dataTable tbody tr.selected>* {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
		color: white;
	}

	table.dataTable tbody tr.selected a {
		color: #090a0b;
	}

	table.dataTable tbody th,
	table.dataTable tbody td {
		padding: 8px 10px;
	}

	table.dataTable.row-border tbody th,
	table.dataTable.row-border tbody td,
	table.dataTable.display tbody th,
	table.dataTable.display tbody td {
		border-top: 1px solid #343434;
	}

	table.dataTable.row-border tbody tr:first-child th,
	table.dataTable.row-border tbody tr:first-child td,
	table.dataTable.display tbody tr:first-child th,
	table.dataTable.display tbody tr:first-child td {
		border-top: none;
	}

	table.dataTable.cell-border tbody th,
	table.dataTable.cell-border tbody td {
		border-top: 1px solid #343434;
		border-right: 1px solid #343434;
	}

	table.dataTable.cell-border tbody tr th:first-child,
	table.dataTable.cell-border tbody tr td:first-child {
		border-left: 1px solid #343434;
	}

	table.dataTable.cell-border tbody tr:first-child th,
	table.dataTable.cell-border tbody tr:first-child td {
		border-top: none;
	}

	table.dataTable.stripe>tbody>tr.odd>*,
	table.dataTable.display>tbody>tr.odd>* {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.023);
	}

	table.dataTable.stripe>tbody>tr.odd.selected>*,
	table.dataTable.display>tbody>tr.odd.selected>* {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.hover>tbody>tr:hover>*,
	table.dataTable.display>tbody>tr:hover>* {
		box-shadow: inset 0 0 0 9999px rgba(0, 50, 255, 0.035);
	}

	table.dataTable.hover>tbody>tr.selected:hover>*,
	table.dataTable.display>tbody>tr.selected:hover>* {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.order-column>tbody tr>.sorting_1,
	table.dataTable.order-column>tbody tr>.sorting_2,
	table.dataTable.order-column>tbody tr>.sorting_3,
	table.dataTable.display>tbody tr>.sorting_1,
	table.dataTable.display>tbody tr>.sorting_2,
	table.dataTable.display>tbody tr>.sorting_3 {
		box-shadow: inset 0 0 0 9999px rgba(0, 50, 255, 0.035);
	}

	table.dataTable.order-column>tbody tr.selected>.sorting_1,
	table.dataTable.order-column>tbody tr.selected>.sorting_2,
	table.dataTable.order-column>tbody tr.selected>.sorting_3,
	table.dataTable.display>tbody tr.selected>.sorting_1,
	table.dataTable.display>tbody tr.selected>.sorting_2,
	table.dataTable.display>tbody tr.selected>.sorting_3 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.odd>.sorting_1,
	table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.054);
	}

	table.dataTable.display>tbody>tr.odd>.sorting_2,
	table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_2 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.047);
	}

	table.dataTable.display>tbody>tr.odd>.sorting_3,
	table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_3 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.039);
	}

	table.dataTable.display>tbody>tr.odd.selected>.sorting_1,
	table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_1 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.odd.selected>.sorting_2,
	table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_2 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.odd.selected>.sorting_3,
	table.dataTable.order-column.stripe>tbody>tr.odd.selected>.sorting_3 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.even>.sorting_1,
	table.dataTable.order-column.stripe>tbody>tr.even>.sorting_1 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.019);
	}

	table.dataTable.display>tbody>tr.even>.sorting_2,
	table.dataTable.order-column.stripe>tbody>tr.even>.sorting_2 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.011);
	}

	table.dataTable.display>tbody>tr.even>.sorting_3,
	table.dataTable.order-column.stripe>tbody>tr.even>.sorting_3 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.003);
	}

	table.dataTable.display>tbody>tr.even.selected>.sorting_1,
	table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_1 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.even.selected>.sorting_2,
	table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_2 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display>tbody>tr.even.selected>.sorting_3,
	table.dataTable.order-column.stripe>tbody>tr.even.selected>.sorting_3 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display tbody tr:hover>.sorting_1,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
		box-shadow: inset 0 0 0 9999px rgba(0, 100, 255, 0.055);
	}

	table.dataTable.display tbody tr:hover>.sorting_2,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_2 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.074);
	}

	table.dataTable.display tbody tr:hover>.sorting_3,
	table.dataTable.order-column.hover tbody tr:hover>.sorting_3 {
		box-shadow: inset 0 0 0 9999px rgba(0, 0, 0, 0.062);
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_1,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_2,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.display tbody tr:hover.selected>.sorting_3,
	table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3 {
		box-shadow: inset 0 0 0 9999px #a3a3a3;
	}

	table.dataTable.no-footer {
		border-bottom: 1px solid #2b2b2b;
	}

	table.dataTable.compact thead th,
	table.dataTable.compact thead td {
		padding: 4px 17px;
	}

	table.dataTable.compact tfoot th,
	table.dataTable.compact tfoot td {
		padding: 4px;
	}

	table.dataTable.compact tbody th,
	table.dataTable.compact tbody td {
		padding: 4px;
	}

	table.dataTable th,
	table.dataTable td {
		box-sizing: content-box;
	}

	/*
 * Control feature layout
 */
	.dataTables_wrapper {
		position: relative;
		clear: both;
	}

	.dataTables_wrapper .dataTables_length {
		float: left;
	}

	.dataTables_wrapper .dataTables_length select {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		padding: 4px;
	}

	.dataTables_wrapper .dataTables_filter {
		float: right;
		text-align: right;
	}

	.dataTables_wrapper .dataTables_filter input {
		border: 1px solid #aaa;
		border-radius: 3px;
		padding: 5px;
		background-color: transparent;
		margin-left: 3px;
	}

	.dataTables_wrapper .dataTables_info {
		clear: both;
		float: left;
		padding-top: 0.755em;
	}

	.dataTables_wrapper .dataTables_paginate {
		float: right;
		text-align: right;
		padding-top: 0.25em;
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button {
		box-sizing: border-box;
		display: inline-block;
		min-width: 1.5em;
		padding: 0.5em 1em;
		margin-left: 2px;
		text-align: center;
		text-decoration: none !important;
		cursor: pointer;
		color: #ffffff !important;
		border: 1px solid transparent;
		border-radius: 2px;
		/* background-color: #ffffff; */
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button.current,
	.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
		color: #ffffff !important;
		border: 1px solid #2b2b2b;
		background-color: rgba(230, 230, 230, 0.1);
		/* background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(230, 230, 230, 0.1)), color-stop(100%, rgba(0, 0, 0, 0.1))); */
		/* Chrome,Safari4+ */
		/* background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
		/* Chrome10+,Safari5.1+ */
		background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
		/* FF3.6+ */
		/* background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
		/* IE10+ */
		/* background: -o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
		/* Opera 11.10+ */
		/* background: linear-gradient(to bottom, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%); */
		/* W3C */
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
		cursor: default;
		color: #666 !important;
		border: 1px solid transparent;
		background: transparent;
		box-shadow: none;
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
		color: black !important;
		border: 1px solid #000;
		background-color: white;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #ffffff));
		/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, white 0%, #ffffff 100%);
		/* Chrome10+,Safari5.1+ */
		background: -moz-linear-gradient(top, white 0%, #ffffff 100%);
		/* FF3.6+ */
		background: -ms-linear-gradient(top, white 0%, #ffffff 100%);
		/* IE10+ */
		background: -o-linear-gradient(top, white 0%, #ffffff 100%);
		/* Opera 11.10+ */
		background: linear-gradient(to bottom, white 0%, #ffffff 100%);
		/* W3C */
	}

	.dataTables_wrapper .dataTables_paginate .paginate_button:active {
		outline: none;
		background-color: white;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #fafafa));
		/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, white 0%, #fafafa 100%);
		/* Chrome10+,Safari5.1+ */
		background: -moz-linear-gradient(top, white 0%, #fafafa 100%);
		/* FF3.6+ */
		background: -ms-linear-gradient(top, white 0%, #fafafa 100%);
		/* IE10+ */
		background: -o-linear-gradient(top, white 0%, #fafafa 100%);
		/* Opera 11.10+ */
		background: linear-gradient(to bottom, white 0%, #fafafa 100%);
		/* W3C */
		box-shadow: inset 0 0 3px #111;
	}

	.dataTables_wrapper .dataTables_paginate .ellipsis {
		padding: 0 1em;
	}

	.dataTables_wrapper .dataTables_length,
	.dataTables_wrapper .dataTables_filter,
	.dataTables_wrapper .dataTables_info,
	.dataTables_wrapper .dataTables_processing,
	.dataTables_wrapper .dataTables_paginate {
		color: #ffffff;
	}

	.dataTables_wrapper .dataTables_scroll {
		clear: both;
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
		-webkit-overflow-scrolling: touch;
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td {
		vertical-align: middle;
	}

	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>th>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>thead>tr>td>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>th>div.dataTables_sizing,
	.dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody>table>tbody>tr>td>div.dataTables_sizing {
		height: 0;
		overflow: hidden;
		margin: 0 !important;
		padding: 0 !important;
	}

	.dataTables_wrapper.no-footer .dataTables_scrollBody {
		border-bottom: 1px solid #2b2b2b;
	}

	.dataTables_wrapper.no-footer div.dataTables_scrollHead table.dataTable,
	.dataTables_wrapper.no-footer div.dataTables_scrollBody>table {
		border-bottom: none;
	}

	.dataTables_wrapper:after {
		visibility: hidden;
		display: block;
		content: "";
		clear: both;
		height: 0;
	}

	@media screen and (max-width: 767px) {

		.dataTables_wrapper .dataTables_info,
		.dataTables_wrapper .dataTables_paginate {
			float: none;
			text-align: center;
		}

		.dataTables_wrapper .dataTables_paginate {
			margin-top: 0.5em;
		}
	}

	@media screen and (max-width: 640px) {

		.dataTables_wrapper .dataTables_length,
		.dataTables_wrapper .dataTables_filter {
			float: none;
			text-align: center;
		}

		.dataTables_wrapper .dataTables_filter {
			margin-top: 0.5em;
		}
	}
</style>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
				<a class="sidebar-brand brand-logo" href="<?php base_url('home') ?>"><img style="width: 100px;height: 60px;" src="<?php echo base_url('assets/images/MusicAlly.png') ?>" alt="logo" /></a>
				<a class="sidebar-brand brand-logo-mini" href="<?php echo base_url('home') ?>"><img style="width: 80px;height: 40px;" src="<?php echo base_url('assets/images/MusicAlly-mini.png') ?>" alt="logo" /></a>
			</div>
			<ul class="nav">
				<li class="nav-item profile">
					<div class="profile-desc">
						<div class="profile-pic">
							<div class="count-indicator">
								<img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/face15.jpg') ?>" alt="" />
								<span class="count bg-success"></span>
							</div>
							<div class="profile-name">
								<h5 class="mb-0 font-weight-normal">
									<?php echo $user['nome'] ?>
								</h5>
								<span><?php echo $user['tipo'] == 'P' ? 'Produtor' : 'Membro Comum' ?></span>
							</div>
						</div>
						<a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
							<a href="<?php echo base_url('perfil') ?>" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-settings text-primary"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">
										Minha Conta
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url('playlist') ?>" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-onepassword text-info"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">
										Minhas Playlists
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
						</div>
					</div>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Navegação</span>
				</li>
				<!-- Itens do menu lateral -->

				<li class="nav-item menu-items">
					<a class="nav-link" href="<?php echo base_url('home') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-speedometer"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>

				<li class="nav-item menu-items">
					<a class="nav-link" href="<?php echo base_url('playlist') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-playlist-play"></i>
						</span>
						<span class="menu-title">Minhas Playlists</span>
					</a>
				</li>
				<?php if ($user['tipo'] == 'P') : ?>
					<li class="nav-item menu-items">
						<a class="nav-link" href="<?php echo base_url('musica') ?>">
							<span class="menu-icon">
								<i class="mdi mdi-music-note"></i>
							</span>
							<span class="menu-title">Minhas Músicas</span>
						</a>
					</li>
				<?php endif ?>


				<li class="nav-item menu-items">
					<a class="nav-link" href="<?php echo base_url('relatorio') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-chart-bar"></i>
						</span>
						<span class="menu-title">Relatórios</span>
					</a>
				</li>

				<li class="nav-item menu-items">
					<a class="nav-link" href="<?php echo base_url('perfil') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-contacts"></i>
						</span>
						<span class="menu-title">Minha conta</span>
					</a>
				</li>

				<!-- Fim Itens do menu lateral -->
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar p-0 fixed-top d-flex flex-row">
				<div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
					<a class="navbar-brand brand-logo-mini" href="<?php echo base_url('home') ?>"><img style="width: 50px;height: 50px;" src="<?php echo base_url('assets/images/MusicAlly-mini.png') ?>" alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-menu"></span>
					</button>
					<ul class="navbar-nav w-100">
						<li class="nav-item w-100">
							<!-- <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search products" />
              </form> -->
						</li>
					</ul>
					<ul class="navbar-nav navbar-nav-right">
						<!-- <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown"
                aria-expanded="false" href="#">+ Create New Project</a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="createbuttonDropdown">
                <h6 class="p-3 mb-0">Projects</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-file-outline text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      Software Development
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-web text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      UI Development
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-layers text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      Software Testing
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">
                  See all projects
                </p>
              </div>
            </li> -->
						<!-- <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-view-grid"></i>
              </a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
                aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic" />
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      Mark send you a message
                    </p>
                    <p class="text-muted mb-0">
                      1 Minutes ago
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic" />
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      Cregh send you a message
                    </p>
                    <p class="text-muted mb-0">
                      15 Minutes ago
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic" />
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">
                      Profile picture updated
                    </p>
                    <p class="text-muted mb-0">
                      18 Minutes ago
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">
                  4 new messages
                </p>
              </div>
            </li> -->
						<!-- <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                data-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">
                      Event today
                    </p>
                    <p class="text-muted ellipsis mb-0">
                      Just a reminder that you have an
                      event today
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">
                      Settings
                    </p>
                    <p class="text-muted ellipsis mb-0">
                      Update dashboard
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">
                      Launch Admin
                    </p>
                    <p class="text-muted ellipsis mb-0">
                      New admin wow!
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">
                  See all notifications
                </p>
              </div>
            </li> -->

						<li class="nav-item dropdown">
							<a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
								<div class="navbar-profile">
									<img class="img-xs rounded-circle" src="<?php base_url('assets/images/faces/face15.jpg') ?>" alt="" />
									<p class="mb-0 d-none d-sm-block navbar-profile-name">
										<?php echo $user['nome'] ?>
									</p>
									<i class="mdi mdi-menu-down d-none d-sm-block"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
								<h6 class="p-3 mb-0">Perfil</h6>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-settings text-success"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">
											Configurações
										</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?php echo base_url('home/deslog') ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-logout text-danger"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">
											Log out
										</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<p class="p-3 mb-0 text-center">
									Configurações Avançadas
								</p>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-format-line-spacing"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<?php $this->renderSection('content') ?>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
							2022</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
							Criado por
							<a href="https://www.linkedin.com/in/vinicius-resende/" target="_blank">Vinicius Resende</a>, Luiz Carlos e Raynner
							para a disciplina de Engenharia de Software - Universidade Federal de Lavras</span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/progressbar.js/progressbar.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
	<script src="<?php echo base_url('assets/vendors/owl-carousel-2/owl.carousel.min.js') ?>"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> -->
	<!-- <link rel="stylesheet" href="<?php //echo base_url('assets/datatable.css') 
										?>"> -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
	<!-- End custom js for this page -->
	<script>
		var baseUrl = "<?php echo base_url() ?>"
	</script>
</body>

</html>