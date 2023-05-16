const animal = document.getElementById('animal');
const animalVid = document.getElementById('animalVid');
const birds = document.getElementById('birds');
const birdsVid = document.getElementById('birdsVid');
const colours = document.getElementById('colours');
const coloursVid = document.getElementById('coloursVid');
const fruits = document.getElementById('fruits');
const fruitsVid = document.getElementById('fruitsVid');
const vegetables = document.getElementById('vegetables');
const vegetablesVid = document.getElementById('vegetablesVid');
const family = document.getElementById('family');
const familyVid = document.getElementById('familyVid');
const home = document.getElementById('home');
const homeVid = document.getElementById('homeVid');
const human = document.getElementById('human');
const humanVid = document.getElementById('humanVid');
const transport = document.getElementById('transport');
const transportVid = document.getElementById('transportVid');
var pausing = function () {
	var videos = document.querySelectorAll('iframe, video');
	Array.prototype.forEach.call(videos, function (video) {
		if (video.tagName.toLowerCase() === 'video') {
			video.pause();
		} else {
			var src = video.src;
			video.src = src;
		}
	});
};
animalVid.style.display = 'inline-block';
birdsVid.style.display = 'none';
coloursVid.style.display = 'none';
fruitsVid.style.display = 'none';
vegetablesVid.style.display = 'none';
familyVid.style.display = 'none';
homeVid.style.display = 'none';
humanVid.style.display = 'none';
transportVid.style.display = 'none';

animal.addEventListener('click', function () {
    animalVid.style.display = 'inline-block';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
});
birds.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'inline-block';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
colours.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'inline-block';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
fruits.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'inline-block';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
vegetables.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'inline-block';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
family.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'inline-block';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
home.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'inline-block';
    humanVid.style.display = 'none';
    transportVid.style.display = 'none';
    pausing();
})
human.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'inline-block';
    transportVid.style.display = 'none';
    pausing();
})
transport.addEventListener('click', function () {
    animalVid.style.display = 'none';
    birdsVid.style.display = 'none';
    coloursVid.style.display = 'none';
    fruitsVid.style.display = 'none';
    vegetablesVid.style.display = 'none';
    familyVid.style.display = 'none';
    homeVid.style.display = 'none';
    humanVid.style.display = 'none';
    transportVid.style.display = 'inline-block';
    pausing();
})