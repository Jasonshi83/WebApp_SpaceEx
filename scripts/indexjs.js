
document.getElementById('sendbutton').addEventListener('click',
    async function() {
    let f = await fetch('info.php?address=' +
        document.getElementById('addressfield').value
        + '&subject=hello+world');
    let t = await f.text();
    alert(t);
});
