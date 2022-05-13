let allThumbnails = document.querySelectorAll(".img-thumbnail"); // all thumbnail buttons
let originalModal = document.getElementById("img-original");
allThumbnails.forEach(item => {
    let itm = item; // thumbnail
    itm.addEventListener('click', function (evt) {
        let srcPath = itm.getAttribute('src'); // get src attribute of thumbnail
        originalModal.setAttribute('src', srcPath); // assign thumbnail path to modal path
    });
});

let showCaptionsBtn = document.getElementById('show-captions');
let captions = document.querySelectorAll('.figure-caption');
captions.forEach(item => {
	item.classList.add('hidden');
});
showCaptionsBtn.addEventListener('click', function(evt) {
	captions.forEach(item => {
		item.classList.toggle('hidden');
	});
});