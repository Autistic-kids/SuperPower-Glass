const a_1 = document.getElementById('a_1');
const Vid_1 = document.getElementById('Vid_1');
const a_2 = document.getElementById('a_2');
const Vid_2 = document.getElementById('Vid_2');
const a_3 = document.getElementById('a_3');
const Vid_3 = document.getElementById('Vid_3');
const a_4 = document.getElementById('a_4');
const Vid_4 = document.getElementById('Vid_4');
const a_5 = document.getElementById('a_5');
const Vid_5 = document.getElementById('Vid_5');
const a_6 = document.getElementById('a_6');
const Vid_6 = document.getElementById('Vid_6');
const a_7 = document.getElementById('a_7');
const Vid_7 = document.getElementById('Vid_7');
const a_8 = document.getElementById('a_8');
const Vid_8 = document.getElementById('Vid_8');
const a_9 = document.getElementById('a_9');
const Vid_9 = document.getElementById('Vid_9');
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
Vid_1.style.display = 'inline-block';
Vid_2.style.display = 'none';
Vid_3.style.display = 'none';
Vid_4.style.display = 'none';
Vid_5.style.display = 'none';
Vid_6.style.display = 'none';
Vid_7.style.display = 'none';
Vid_8.style.display = 'none';
Vid_9.style.display = 'none';
a_1.addEventListener('click', function () {
    Vid_1.style.display = 'inline-block';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
});
a_2.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'inline-block';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_3.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'inline-block';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_4.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'inline-block';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_5.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'inline-block';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_6.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'inline-block';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_7.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'inline-block';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'none';
    pausing();
})
a_8.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'inline-block';
    Vid_9.style.display = 'none';
    pausing();
})
a_9.addEventListener('click', function () {
    Vid_1.style.display = 'none';
    Vid_2.style.display = 'none';
    Vid_3.style.display = 'none';
    Vid_4.style.display = 'none';
    Vid_5.style.display = 'none';
    Vid_6.style.display = 'none';
    Vid_7.style.display = 'none';
    Vid_8.style.display = 'none';
    Vid_9.style.display = 'inline-block';
    pausing();
})