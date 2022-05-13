let savings = 228.57;

let currentDate = new Date();
currentDate = currentDate.get;
let endOfSummer = new Date(2022, 09, 01);

console.log('Date: ' + currentDate);

let weeksLeftOfSummer = parseInt((endOfSummer - currentDate) / 86400000);


function calculateWeeklyBudget() {
	console.log('Savings: $' + savings);
	console.log('Days left of Summer: ' + weeksLeftOfSummer);
}
calculateWeeklyBudget();