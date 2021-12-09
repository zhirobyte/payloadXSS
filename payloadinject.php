
<marquee>
<h1>Stored XSS js and HTML Injection</h1>
<h1>by faiz hanafi</h1>
</marquee>

<script>
	function unsafe(t){
		document.getElementById("result").innerText = eval(t);
	}
</script>
	<a href='javascript:alert(123);'>[Alert pop]</a><br>

	<a href='javascript:alert(document.location);'>[Location]</a><br>

	<a href='javascript:document.write(document.cookie);'>[Cookies]</a><br>

<br>
	<textarea id="script" onchange="unsafe(this.value)"></textarea>

	<button>[test]</button>
<h3>output<h3>
<div id="result"></div>
