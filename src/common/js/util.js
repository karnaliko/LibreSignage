function get_GET_parameters() {
	/*
	*  Get the HTTP GET parameters in an associative array.
	*/
	var query_str = window.location.search.substr(1);
	var params_strs = [];
	var params = [];
	var tmp = [];

	if (!query_str.length) {
		return [];
	} else {
		params_strs = query_str.split('&');
	}

	for (var i in params_strs) {
		tmp = params_strs[i].split('=');
		params[decodeURIComponent(tmp[0])] =
			decodeURIComponent(tmp[1]);
	}
	return params;
}

function get_cookies() {
	var ret = {};
	var tmp = document.cookie.split('; ');
	for (let c of tmp) {
		ret[c.split('=')[0]] = c.split('=')[1];
	}
	return ret;
}

function sanitize_html(src) {
	// Sanitize HTML tags.
	return $("<div></div>").text(src).html();
}

function setup_defaults() {
	// Setup tooltips.
	$('[data-toggle="tooltip"]').tooltip({
		'delay': {
			'show': 800,
			'hide': 50
		},
		'trigger': 'hover'
	});
}

function datetime_to_tstamp(date, time) {
	var d = null;
	var t = null;

	if (date == null || date.length == 0) {
		throw new Error(
			`Invalid date string '${date}'.`
		);
	}
	if (time == null || time.length == 0) {
		throw new Error(
			`Invalid time '${time}'.`
		);
	}

	d = date.split('-');
	t = time.split(':');

	if (t.length == 2) {
		t[2] = '00';
	}

	return new Date(
		d[0], '0' + (parseInt(d[1]) - 1).toString(), d[2],
		t[0], t[1], t[2]
	).getTime()/1000;
}

function tstamp_to_datetime(tstamp) {
	var y, m, d, hour, min, sec;
	var ret = [];
	var date = null;
	if (tstamp == null || tstamp.length == 0) {
		throw new Error(
			`Invalid timestamp '${tstamp}'.`
		);
	}

	date = new Date(tstamp*1000);
	y = date.getFullYear();

	m = date.getMonth() + 1;
	if (m.toString().length == 1) {
		m = '0' + m;
	}
	d = date.getDate();
	if (d.toString().length == 1) {
		d = '0' + d;
	}
	hour = date.getHours();
	if (hour.toString().length == 1) {
		hour = '0' + hour;
	}
	min = date.getMinutes();
	if (min.toString().length == 1) {
		min = '0' + min;
	}
	sec = date.getSeconds();
	if (sec.toString().length == 1) {
		sec = '0' + sec;
	}

	ret[0] = y + '-' + m + '-' + d;
	ret[1] = hour + ':' + min + ':' + sec;

	return ret;
}
