let s4Vol1Countdown = document.getElementById('s4-vol1-countdown');
let daysUntilS4Vol1 = document.getElementById('days-until-s4-vol1');
let currentDate = new Date();
const s4Vol1 = new Date(2022, 04, 27);
const one_day = 1000 * 60 * 60 * 24;

let s4Vol2Countdown = document.getElementById('s4-vol2-countdown');
let daysUntilS4Vol2 = document.getElementById('days-until-s4-vol2');
const s4Vol2 = new Date(2022, 06, 01);

if (currentDate < s4Vol1) {
	s4Vol1Countdown.classList.remove('hidden');
	let days = (s4Vol1 - currentDate) / one_day;
	daysUntilS4Vol1.textContent = parseInt(days);
}

if (currentDate >= s4Vol1 && currentDate < s4Vol2) {
	s4Vol2Countdown.classList.remove('hidden');
	let days = (s4Vol2 - currentDate) / one_day;
	daysUntilS4Vol2.textContent = parseInt(days);
}