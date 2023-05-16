const b_1 = document.getElementById('b_1');
const Vid_1b = document.getElementById('Vid_1b');
const b_2 = document.getElementById('b_2');
const Vid_2b = document.getElementById('Vid_2b');
const b_3 = document.getElementById('b_3');
const Vid_3b = document.getElementById('Vid_3b');
const b_4 = document.getElementById('b_4');
const Vid_4b = document.getElementById('Vid_4b');
const b_5 = document.getElementById('b_5');
const Vid_5b = document.getElementById('Vid_5b');
const b_6 = document.getElementById('b_6');
const Vid_6b = document.getElementById('Vid_6b');
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
Vid_1b.style.display = 'inline-block';
Vid_2b.style.display = 'none';
Vid_3b.style.display = 'none';
Vid_4b.style.display = 'none';
Vid_5b.style.display = 'none';
Vid_6b.style.display = 'none';

b_1.addEventListener('click', function () {
    Vid_1b.style.display = 'inline-block';
    Vid_2b.style.display = 'none';
    Vid_3b.style.display = 'none';
    Vid_4b.style.display = 'none';
    Vid_5b.style.display = 'none';
    Vid_6b.style.display = 'none'; 
    pausing();
});
b_2.addEventListener('click', function () {
    Vid_1b.style.display = 'none';
    Vid_2b.style.display = 'inline-block';
    Vid_3b.style.display = 'none';
    Vid_4b.style.display = 'none';
    Vid_5b.style.display = 'none';
    Vid_6b.style.display = 'none';
    pausing();
})
b_3.addEventListener('click', function () {
    Vid_1b.style.display = 'none';
    Vid_2b.style.display = 'none';
    Vid_3b.style.display = 'inline-block';
    Vid_4b.style.display = 'none';
    Vid_5b.style.display = 'none';
    Vid_6b.style.display = 'none';
    pausing();
})
b_4.addEventListener('click', function () {
    Vid_1b.style.display = 'none';
    Vid_2b.style.display = 'none';
    Vid_3b.style.display = 'none';
    Vid_4b.style.display = 'inline-block';
    Vid_5b.style.display = 'none';
    Vid_6b.style.display = 'none';
    pausing();
})
b_5.addEventListener('click', function () {
    Vid_1b.style.display = 'none';
    Vid_2b.style.display = 'none';
    Vid_3b.style.display = 'none';
    Vid_4b.style.display = 'none';
    Vid_5b.style.display = 'inline-block';
    Vid_6b.style.display = 'none';
    pausing();
})
b_6.addEventListener('click', function () {
    Vid_1b.style.display = 'none';
    Vid_2b.style.display = 'none';
    Vid_3b.style.display = 'none';
    Vid_4b.style.display = 'none';
    Vid_5b.style.display = 'none';
    Vid_6b.style.display = 'inline-block';
    pausing();
})