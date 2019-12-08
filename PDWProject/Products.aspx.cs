using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data.MySqlClient;
using System.Text;

namespace PDWProject
{
    public partial class Products1 : System.Web.UI.Page
    {
        MySqlConnection con = new MySqlConnection();
        MySqlCommand cmd = new MySqlCommand();
        MySqlDataReader dr;

        void connectionString()
        {
            con.ConnectionString = "Server=localhost;Database=pdw;UID=root;Password=123;";
        }

        StringBuilder table = new StringBuilder();
        protected void Page_Load(object sender, EventArgs e)
        {
            connectionString();
            con.Open();
            cmd.Connection = con;
            try
            {
                cmd.CommandText = "select name, price, cakeid, imagepath from tipos_bolos";
                dr = cmd.ExecuteReader();
                string nomes = "";
                string precos = "";
                string ids = "";

                table.Append("<div class='best-seller'><div class='container'><div class='biseller-info'><h3 class='new-models'>Variedades</h3><ul id = 'flexiselDemo1' >");
                while (dr.Read())
                { 
                    table.Append("<li><div class='biseller-column'>");
                    table.Append("<img src = '" + dr["imagepath"] + "' alt = '' class = 'produto'>");
                    table.Append("<div class='biseller-name'><h4>");
                    table.Append(dr["name"].ToString());
                    table.Append("</h4><p>");
                    table.Append(dr["price"].ToString());
                    table.Append("</p></div>");
                    table.Append("<a href ='cakeinfo.aspx?cakeid=" + dr["cakeid"] + "'><button class='add2cart'><span>Adicionar ao Carrinho</span></button></a></div></li>");
                }
                table.Append("</ul></div></div>");
                con.Close();
                PlaceHolder1.Controls.Add(new Literal {Text = table.ToString() });

            }
            catch
            {
                con.Close();
            }
        }
    }
}