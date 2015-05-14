<html>
	<head>
		<title>StudioAnywhere</title>
		<style type="text/css">
			@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700,900);
			body
			{
				color: #330066;
				font-family: "Lato",sans-serif;
			}
			body.LandingPage
			{
				background-color: #330066;
				color: #EEEEEE;
				
				text-align: center;
				margin: 0px;
			}
			body.LandingPage ul
			{
				text-align: left;
			}
			body.LandingPage ul li
			{
				padding: 16px;
			}
			body.LandingPage input
			{
				padding: 8px;
				font-size: 16pt;
			}
			div.LandingPagePanel
			{
				padding: 64px;
			}
			div.LandingPagePanel.Inverse
			{
				background-color: #110033;
			}
			h1, h2, h3, h4, h5, h6
			{
				font-weight: 300;
			}
			div.ColumnLayout
			{
				box-sizing: border-box;
				display: table;
				width: 100%;
			}
			div.ColumnLayout > div.Column
			{
				display: table-cell;
			}
			div.ColumnLayout.TwoColumn > div.Column
			{
				width: 50%;
			}
		</style>
	</head>
	<body class="LandingPage">
		<div class="LandingPagePanel">
			<h1>Manipulate and visualize any document, anywhere</h1>
			<h3>Powered by Universal Editor technology</h3>
			<div class="ColumnLayout TwoColumn">
				<div class="Column">
					<ul>
						<li>Word processing, spreadsheet, presentation</li>
						<li>Archive and file system containers</li>
						<li>Music production, synthesized and waveform</li>
					</ul>
				</div>
				<div class="Column">
					<ul>
						<li>Graphics and image manipulation</li>
					</ul>
				</div>
			</div>
			<p>Anything that UniversalEditor can handle, StudioAnywhere can - anywhere</p>
		</div>
		<div class="LandingPagePanel Inverse">
			<h1>Let's get started</h1>
			<p>
				<table style="margin-right: auto; margin-left: auto;">
					<tr>
						<td>
							<label for="txtEmailAddress">What's your e-mail address?</label>
						</td>
						<td>
							<input type="text" id="txtEmailAddress" name="user_EmailAddress" />
						</td>
					</tr>
				</table>
			</p>
			<h1>Or if you just want to take it for a test run, <a href="//demo.studioanywhere.net/" target="_blank">visit the demo</a>.</h1>
		</div>
	</body>
</html>