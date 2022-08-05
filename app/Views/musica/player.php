<?php $this->extend('_common/layout') ?>
<?php $this->section('content') ?>

<style>
	@import url("https://fonts.googleapis.com/css?family=Roboto+Slab:400");

	/*
	* General styles.
	* Not necessary for the component to work
	*/
	/* body {
		width: 100vw;
		height: 100vh;
		font-family: "Roboto Slab", serif;
		text-align: center;
		background: linear-gradient(to bottom, #de6262, #ffb88c);
	} */

	.wrapperr {
		position: relative;
		top: 100%;
		left: 70%;
		width: 700px;
		/* transform: translate(-50%, -50%); */
	}

	.wrapperr h1 {
		margin-bottom: 75px;
		font-size: 56px;
		font-weight: 400;
		color: #fff;
	}

	.rating-holder {
		display: inline-block;
		padding: 0.625em 1.875em;
		margin: 0 10px;
		background-color: #fff;
		border-radius: 1.5625em;
		box-sizing: border-box;
	}

	.c-rating button {
		display: inline-block;
		float: left;
		width: 1.25em;
		height: 1.25em;
		border: 0;
		text-indent: -9999px;
		outline: none;
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
		cursor: pointer;
		transition: background 0.25s ease;
	}

	.c-rating button:hover,
	.c-rating button:hover~button {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat !important;
	}

	.c-rating:hover button {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22grey%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat !important;
	}

	.c-rating[data-rating-value="0"] button:nth-child(-n+0) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.25"] button:nth-child(-n+1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.25"] button:nth-child(1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M196.208 415.2v-224.8l-139.504 20.272 100.944 98.384-23.84 138.928z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.5"] button:nth-child(-n+1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.5"] button:nth-child(1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M258.672 64l-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6v-318.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.75"] button:nth-child(-n+1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="0.75"] button:nth-child(1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M321.616 190.496l-0.656-0.096-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 63.024 33.136z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1"] button:nth-child(-n+1) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.25"] button:nth-child(-n+2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.25"] button:nth-child(2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M196.208 415.2v-224.8l-139.504 20.272 100.944 98.384-23.84 138.928z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.5"] button:nth-child(-n+2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.5"] button:nth-child(2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M258.672 64l-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6v-318.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.75"] button:nth-child(-n+2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="1.75"] button:nth-child(2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M321.616 190.496l-0.656-0.096-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 63.024 33.136z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2"] button:nth-child(-n+2) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.25"] button:nth-child(-n+3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.25"] button:nth-child(3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M196.208 415.2v-224.8l-139.504 20.272 100.944 98.384-23.84 138.928z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.5"] button:nth-child(-n+3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.5"] button:nth-child(3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M258.672 64l-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6v-318.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.75"] button:nth-child(-n+3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="2.75"] button:nth-child(3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M321.616 190.496l-0.656-0.096-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 63.024 33.136z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3"] button:nth-child(-n+3) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.25"] button:nth-child(-n+4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.25"] button:nth-child(4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M196.208 415.2v-224.8l-139.504 20.272 100.944 98.384-23.84 138.928z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.5"] button:nth-child(-n+4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.5"] button:nth-child(4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M258.672 64l-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6v-318.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.75"] button:nth-child(-n+4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="3.75"] button:nth-child(4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M321.616 190.496l-0.656-0.096-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 63.024 33.136z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4"] button:nth-child(-n+4) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.25"] button:nth-child(-n+5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.25"] button:nth-child(5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M196.208 415.2v-224.8l-139.504 20.272 100.944 98.384-23.84 138.928z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.5"] button:nth-child(-n+5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.5"] button:nth-child(5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M258.672 64l-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6v-318.4z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.75"] button:nth-child(-n+5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="4.75"] button:nth-child(5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M321.616 190.496l-0.656-0.096-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 63.024 33.136z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat, url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22%23ddd%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating[data-rating-value="5"] button:nth-child(-n+5) {
		background: url("data:image/svg+xml;utf8,%3Csvg%20version%3D%221.1%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%22512%22%20height%3D%22512%22%20viewBox%3D%220%200%20512%20512%22%3E%3Cpath%20fill%3D%22gold%22%20d%3D%22M457.888 210.672l-139.504-20.272-62.384-126.4-62.384 126.4-139.504 20.272 100.944 98.384-23.84 138.928 124.768-65.6 124.768 65.6-23.84-138.928c0 0 100.944-98.384 100.944-98.384z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E") center/cover no-repeat;
	}

	.c-rating--small {
		font-size: 50%;
	}

	.c-rating--big {
		font-size: 150%;
	}
</style>

<div class=" containerPlayer">
	<header>
		<div class="playlist">
			<i class="fa fa-bars"></i>
		</div>
		<div class="setting">
			<i class="fa fa-cog"></i>
		</div>
	</header>
	<main>
		<div class="album-art">
			<img src="https://upload.wikimedia.org/wikipedia/en/0/00/TheVines_WinningDays.jpg" alt="" />
		</div>
		<div class="player">
			<i class="fa fa-repeat"></i>
			<i class="fa fa-fast-backward"></i>
			<i onclick="playBtn()" class="fa fa-play"></i>
			<i class="fa fa-fast-forward"></i>
			<i class="fa fa-random"></i>
		</div>
	</main>
	<footer>

		<div class="title"><?php echo $musica['nome'] ?>
		</div>
		<div class="time-tracker">
			<div class="timer">
				<div id="Slider" class="bg">
				</div>
			</div>
			<div class="time"><?php echo $musica['duracao'] ?>:00</div>
		</div>
	</footer>


</div>

<div>
	<div class="wrapperr">
		<div class="rating-holder">
			<div id="rating" class="c-rating c-rating--big" data-rating-value="0">
				<button onclick="newRating(1)">1</button>
				<button onclick="newRating(2)">2</button>
				<button onclick="newRating(3)">3</button>
				<button onclick="newRating(4)">4</button>
				<button onclick="newRating(5)">5</button>
			</div>
		</div>
	</div>
</div>

<script>
	var timeout = false

	function newRating(n) {
		$.ajax({
			type: "POST",
			url: baseUrl + `/ajax/musica/newRating/<?php echo $musica['registro'] ?>/${n}`,
			success: function(response) {
				$("#rating").attr('data-rating-value', n)
			}
		});

	}

	function playBtn() {
		if (timeout) {
			window.alert("aguarde um pouco")
			return
		}
		$.ajax({
			type: "POST",
			url: baseUrl + `/ajax/musica/newPlay/<?php echo $musica['registro'] ?>`,
			success: function(response) {
				timeout = true
				window.alert('Play')
				setTimeout(function() {
					timeout = false
				}, 5000);
			}
		});
	}
</script>
<?php $this->endSection('content') ?>