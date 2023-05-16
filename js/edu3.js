const Situations = document.getElementById('Situations');
const Situation_1_Vid = document.getElementById('Situation_1_Vid');
const story_1 = document.getElementById('story_1');
const story_1_Vid = document.getElementById('story_1_Vid');
const story_2 = document.getElementById('story_2');
const story_2_Vid = document.getElementById('story_2_Vid');
const story_3 = document.getElementById('story_3');
const story_3_Vid = document.getElementById('story_3_Vid');
const story_4 = document.getElementById('story_4');
const story_4_Vid = document.getElementById('story_4_Vid');
const story_5 = document.getElementById('story_5');
const story_5_Vid = document.getElementById('story_5_Vid');
const Emotions = document.getElementById('Emotions');
const Emotions_Vid = document.getElementById('Emotions_Vid');
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
Situation_1_Vid.style.display = 'inline-block';
story_1_Vid.style.display = 'none';
story_2_Vid.style.display = 'none';
story_3_Vid.style.display = 'none';
story_4_Vid.style.display = 'none';
story_5_Vid.style.display = 'none';
Emotions_Vid.style.display = 'none';

Situations.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'inline-block';
    story_1_Vid.style.display = 'none';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'none';
    pausing();
});

story_1.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'inline-block';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'none';
    pausing();
})
story_2.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'noen';
    story_2_Vid.style.display = 'inline-block';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'none';
    pausing();
})
story_3.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'none';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'inline-block';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'none';
    pausing();
})
story_4.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'none';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'inline-block';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'none';
    pausing();
})
story_5.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'none';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'inline-block';
    Emotions_Vid.style.display = 'none';
    pausing();
})
Emotions.addEventListener('click', function () {
    Situation_1_Vid.style.display = 'none';
    story_1_Vid.style.display = 'none';
    story_2_Vid.style.display = 'none';
    story_3_Vid.style.display = 'none';
    story_4_Vid.style.display = 'none';
    story_5_Vid.style.display = 'none';
    Emotions_Vid.style.display = 'inline-block';
    pausing();
})