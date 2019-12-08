using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls;
using MySql.Data.MySqlClient;
using System.Text;

namespace PDWProject
{

    public partial class CakeInfo : System.Web.UI.Page
    {

        protected static List<String> intList = new List<String>();
        MySqlConnection con = new MySqlConnection();
        MySqlCommand cmd = new MySqlCommand();
        MySqlDataReader dr;

        void connectionString()
        {
            con.ConnectionString = "Server=localhost;Database=pdw;UID=root;Password=123;";
        }

        StringBuilder table = new StringBuilder();

        public string getID()
        {
            string test = Request.QueryString["cakeid"].ToString();
            return test;
        }


        StringBuilder info = new StringBuilder();
        StringBuilder img = new StringBuilder();
        StringBuilder cake = new StringBuilder();
        protected void Page_Load(object sender, EventArgs e)
        {
            connectionString();
            con.Open();
            cmd.Connection = con;
            try
            {
                cmd.CommandText = "select name, price, cakeid, imagepath, ListaIngrediente from tipos_bolos where cakeid = "+ getID();
                dr = cmd.ExecuteReader();

                while (dr.Read())
                {
                    info.Append("<h3>" + dr["name"].ToString() + "</h3>");
                    info.Append("<p>"+dr["price"].ToString() + "€ <font color='#aaa' size='4'>/unidade</font></p>");
                    img.Append("<li><img class='etalage_thumb_image' style='height:50px;' src=" + dr["imagepath"].ToString() + " class='img-responsive'/>");
                    img.Append("<li><img class='etalage_source_image' style='height:50px;' src=" + dr["imagepath"].ToString() + " class='img-responsive'/>");
                    cake.Append("<input type = 'text' name = 'cakeid' style='display:none' value='" + getID()+"' />");
                    img.Append("</li><div class='clearfix'> </div></ul><div class = 'det_nav'><h4>Ingredientes:</h4><h5>" + dr["ListaIngrediente"].ToString() + "</h5></div>");
                }
                con.Close();
                PlaceHolder.Controls.Add(new Literal { Text = info.ToString() });
                ImageCake.Controls.Add(new Literal { Text = img.ToString() });
                sendcake.Controls.Add(new Literal { Text = cake.ToString() });
            }
            catch
            {
                con.Close();
            }
        }
    }
}