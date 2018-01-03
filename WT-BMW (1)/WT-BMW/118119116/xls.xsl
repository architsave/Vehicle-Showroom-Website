<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:18pt; background-color:#FFFFCC">
<xsl:for-each select="founder_info/founder">
  <div style="background-color:	#FF7519;color:white;padding:4px">
    <span style="font-weight:bold"><xsl:value-of select="name"/> - </span>
    <xsl:value-of select="rollno"/>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:12pt">
    <p>
    <xsl:value-of select="description"/>
    </p>
  </div>
</xsl:for-each>
</body>
</html>
