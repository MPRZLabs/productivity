var usedwords = [
    
];
var keywords = [
    "pro as heck",
    "dragonborn",
    "nuclear bomb",
    "adventure",
    "rebirth",
    "prequel",
    "disaster",
    "The Master",
    "minion",
    "raspberry",
    "pi",
    "penguin",
    "ninja",
    "life",
    "live",
    "two goals in the first seven minutes", //Poland - Ukraine football match on 2013-03-22
    "bats",
    "sheeps",
    "goats",
    "disaster",
    "music",
    "numb",
    "new day",
    "brand new",
    "ghosts and stuff",
    "fireflies",
    "muse",
    "parody",
    "onion",
    "monkey",
    "code monkey",
    "no antidote",
    "airplanes",
    "shooting stars",
    "night sky",
    "12 guns",
    "artificial brain",
    "epic fail",
    "epic win",
    "rap battles",
    "history",
    "something bad you should've left alone",
    "remote",
    "lost",
    "alone",
    "independence",
    "new age",
    "broken",
    "moon phases",
    "rain",
    "clock",
    "network",
    "communication breakdown",
    "<span class=\"muted\">Herobrine</span>"
];

function randomize()
{
	var target = document.getElementById('randomizer');
	targetint = Math.floor(Math.random()*(keywords.length-1));
        targettxt = keywords.splice(targetint,1);
        target.innerHTML = targettxt;
        if (keywords.length < 1)
        {
                keywords = usedwords;
                usedwords = [];
        }
        usedwords.push(targettxt);
}