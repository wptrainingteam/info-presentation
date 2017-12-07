<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Sidetrack Studio presents</title>

	<meta name="description" content="Reveal.js Demo">
	<meta name="author" content="Paul Barthmaier (pbrocks)">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="css/reveal.css">
	<link rel="stylesheet" href="css/theme/sky.css" id="theme">

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<!-- <link rel="stylesheet" href="css/pbrx.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Theme used for syntax highlighting of code -->
	<link rel="stylesheet" href="lib/css/zenburn.css">

	<!-- Printing and PDF exports -->
	<script>
		var link = document.createElement( 'link' );
		link.rel = 'stylesheet';
		link.type = 'text/css';
		link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
		document.getElementsByTagName( 'head' )[0].appendChild( link );
	</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

		<!-- Any section element inside of this container is displayed as a slide -->
		<div class="slides">
			
		<?php include( 'sections/presentation-sections.php' ); ?>	
		<?php include( 'sections/sample-sections.php' ); ?>	

		</div>

	</div>

<script src="lib/js/head.min.js"></script>
<script src="js/reveal.js"></script>
<script>

			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
				{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
				{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
				{ src: 'plugin/zoom-js/zoom.js', async: true },
				{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
	</html>