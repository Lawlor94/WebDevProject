<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <?xml version="1.0" encoding="UTF-8" ?>
        <rss version="2.0">
            <channel>
                <title>Dota 2 Players</title>
                <link>www.google.com</link>
                <description>A List of all Dota 2 players at our tournament</description>
                
                <xsl:for-each select="site/entry[game='Dota 2']">
                    <item>
                        <name><xsl:value-of select="name"/></name>
                        <country><xsl:value-of select="country"/></country>
                    </item>
                </xsl:for-each>
                
            </channel>
        </rss>
    </xsl:template>
</xsl:stylesheet>