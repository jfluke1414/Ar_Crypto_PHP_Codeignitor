<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Pdf Viwer</title>
    <script type="text/javascript" src="/assets/js/pdfobject.js"></script>
	<style>
		.pdfobject-container { height: 950px;}
		.pdfobject { border: 1px solid #666; }
	</style>
 
</head>
<body>
	<div id="viewer"></div>
	<script>PDFObject.embed("<?=$path?>", "#viewer");</script>        
</body>
</html>