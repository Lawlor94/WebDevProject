<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <?xml version="1.0" encoding="UTF-8" ?>
        <rss version="2.0">
            <channel>
                <title>Counter Strike Players</title>
                <link>www.google.com</link>
                <description>A List of all Counter Strike players at our tournament</description>
                
                <xsl:for-each select="site/entry[game='League of Legends']">
                    <item>
                        <name><xsl:value-of select="name"/></name>
                        <country><xsl:value-of select="country"/></country>
                    </item>
                </xsl:for-each>
                
            </channel>
        </rss>
    </xsl:template>
</xsl:stylesheet>