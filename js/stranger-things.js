let s4Vol1Countdown = $('#s4-vol1-countdown');
let daysUntilS4Vol1 = $('#days-until-s4-vol1');
let currentDate = new Date();
const s4Vol1 = new Date(2022, 04, 27);
const one_day = 1000 * 60 * 60 * 24;

let s4Vol2Countdown = $('#s4-vol2-countdown');
let daysUntilS4Vol2 = $('#days-until-s4-vol2');
const s4Vol2 = new Date(2022, 06, 01);

if (currentDate < s4Vol1) {
	s4Vol1Countdown.show();
	let days = (s4Vol1 - currentDate) / one_day;
	daysUntilS4Vol1.text(parseInt(days));
}

if (currentDate >= s4Vol1 && currentDate < s4Vol2) {
	s4Vol2Countdown.show();
	let days = (s4Vol2 - currentDate) / one_day;
	daysUntilS4Vol2.text(parseInt(days));
}