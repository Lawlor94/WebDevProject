<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <channel>
        <title>Counter Strike Players</title>
        <link>www.google.com</link>
        <description>A List of all Counter Strike players at our tournament</description>
        
        <xsl:for-each select="site/entry[game='Hearthstone']">
            <item>
                <name><xsl:value-of select="name"/></name>
                <country><xsl:value-of select="country"/></country>
            </item>
        </xsl:for-each>
        
        </channel>
    </xsl:template>
</xsl:stylesheet>