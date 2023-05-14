<xsl:transform version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>

            <body>
                <h2>LIVRES ORDONNES PAR CATEGORIES :</h2>
                <table border="3" align="center" >
                    <tr>
                        <th>category</th>
                        <th>title</th>
                        <th>author</th>
                        <th>year</th>
                        <th>price</th>
                    </tr>

                    <xsl:for-each select="bookstore/book">
                    <xsl:sort select="category" order="ascending" />
                        <tr>
                            <td><xsl:value-of select="category"/></td>
                            <td><xsl:value-of select="title"/></td>
                            <td><xsl:value-of select="author"/></td>
                            <td><xsl:value-of select="year"/></td>
                            <td><xsl:value-of select="price"/></td>

                        </tr>
                    </xsl:for-each>


                </table>
            </body>




        </html>



    </xsl:template>

</xsl:transform>