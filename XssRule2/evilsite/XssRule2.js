document.getElementById('content').setAttribute("href", '<script>attack()</script>');
function attack() {
	alert("YOU HAVE BEEN HACKED !!!!");
}