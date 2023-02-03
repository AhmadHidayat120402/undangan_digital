let navActiveNow = "nav-invitation";
let music = document.getElementById('song');

function playAudio() {
    music.play();
}
document.getElementById('nav-invitation').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-invitation').classList.add('active');
    console.info('invitation');
    navActiveNow = "nav-invitation";
    document.getElementById('invitation').style.display = "inline";
    document.getElementById('bridge').style.display = "none";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "none";
});
document.getElementById('nav-bride').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-bride').classList.add('active');
    console.info('bride');
    navActiveNow = "nav-bride";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "inline";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "none";
});
document.getElementById('nav-moment').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-moment').classList.add('active');
    console.info('moment');
    navActiveNow = "nav-moment";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "none";
    document.getElementById('moment').style.display = "inline";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "none";
});
document.getElementById('nav-vanue').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-vanue').classList.add('active');
    console.info('vanue');
    navActiveNow = "nav-vanue";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "none";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "inline";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "none";
});
document.getElementById('nav-outfit').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-outfit').classList.add('active');
    console.info('outfit');
    navActiveNow = "nav-outfit";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "none";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "inline";
    document.getElementById('coming').style.display = "none";
});
document.getElementById('nav-coming').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-coming').classList.add('active');
    console.info('coming');
    navActiveNow = "nav-coming";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "none";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "inline";
})


document.getElementById('open-invitation').addEventListener('click', () => {
    console.info('info now ' + navActiveNow)
    document.getElementById(`${navActiveNow}`).classList.remove('active');
    document.getElementById('nav-bride').classList.add('active');
    console.info('bride');
    navActiveNow = "nav-bride";
    document.getElementById('invitation').style.display = "none";
    document.getElementById('bridge').style.display = "inline";
    document.getElementById('moment').style.display = "none";
    document.getElementById('vanue').style.display = "none";
    document.getElementById('outfits').style.display = "none";
    document.getElementById('coming').style.display = "none";
});
console.info('info now ' + navActiveNow)

document.getElementById('open-invitation-awal').addEventListener('click', () => {
    document.getElementById('popUp').style.display = "none";
    playAudio();
});