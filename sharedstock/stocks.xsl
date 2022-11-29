<?xml version='1.0'?>
<!-- LOCAPPLY - this file has been localized for LocApply -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/TR/WD-xsl">
  <xsl:template match=".">
     <table width="100%">
         <tr>
             <td>
             </td>
             <td align="left">
               <b>Symbol</b>
             </td>
             <td align="right">
               <b>Last</b>
             </td>
             <td align="right">
               <b>Change</b>
             </td>
             <td>
             </td>
          </tr>
       <xsl:for-each select="quote">
          <tr>
             <td valign="center" align="center" width="10%">
                <xsl:choose>
                   <xsl:when test=".[@news $eq$ 'y']">
                      <a title="News has been received today for this symbol">
                         <xsl:attribute name="href">
                            http://moneycentral.msn.com/partner/redir/mars.asp?iPage=news&amp;Symbol=<xsl:value-of select="@ticker"/>
                         </xsl:attribute>
                         <img src="msn://theme/stocknews.jpg" border="0" />
                      </a>
                   </xsl:when>
                   <xsl:otherwise></xsl:otherwise>
                </xsl:choose>
             </td>
             <td valign="center" align="left">
                <a>
                   <xsl:attribute name="href">
                      http://moneycentral.msn.com/partner/redir/mars.asp?iPage=qd&amp;Symbol=<xsl:value-of select="@ticker"/>
                   </xsl:attribute>
                   <xsl:value-of select="@ticker"/>
                </a>
             </td>
             <td valign="center" align="right">
                <xsl:eval>formatNumber(this.getAttribute('last'), '#########0.000')</xsl:eval>
             </td>
             <td valign="center" align="right">
                <xsl:choose>
                   <xsl:when test=".[@direction $eq$ 'down']">
                      <xsl:attribute name="style">color:red</xsl:attribute>
                   </xsl:when><xsl:when test=".[@direction $eq$ 'up']">
                      <xsl:attribute name="style">color:green</xsl:attribute>+</xsl:when>
                   <xsl:otherwise></xsl:otherwise>
                </xsl:choose>
                <xsl:eval>formatNumber(this.getAttribute('change'), '#########0.000')</xsl:eval>
             </td>
             <td width="5%">
             </td>
          </tr>
          <tr>
             <td height="1">
             </td>
             <td id="idSep" colSpan="4" height="1">
             </td>
          </tr>
          
        </xsl:for-each>
          <tr>
            <td>
            </td>
            <td colspan="2" align="left">
                <b><a id="idExtraLinks" href="http://moneycentral.msn.com/partner/redir/mars.asp?iPage=qd">Get a stock quote</a></b>
            </td>
            <td align="right">
                <b><a id="idExtraLinks" href="msn://@ui.mar@/redir.htm?editstocks">Edit</a></b>
            </td>
            <td>
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td colspan="4">
               <div id="idSupplier">Quotes by <a href="http://www.spcomstock.com/">S&amp;P</a>, delayed 20 min.
               </div>
            </td>
          </tr>
     </table>
  </xsl:template>
</xsl:stylesheet>