<xsl:transform version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
                
    <xsl:template match="/">

        <html>

            <body>
                <h2>menu dejeuner :</h2>
                <table border="3" align="center" >
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Calories</th>
                    </tr>

                        <xsl:for-each select="breakfast_menu/food">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="price"/></td>
                        <td><xsl:value-of select="description"/></td>
                        <td><xsl:value-of select="calories"/></td>
                    </tr>
                        </xsl:for-each>


                </table>
            </body>




        </html>

    </xsl:template>                
                

</xsl:transform>