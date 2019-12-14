using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data.MySqlClient;

namespace PDWProject
{
    public partial class buy : System.Web.UI.Page
    {

        MySqlConnection con = new MySqlConnection();
        MySqlCommand cmd = new MySqlCommand();
        MySqlDataReader dr;

        void connectionString()
        {
            con.ConnectionString = "Server=localhost;Database=pdw;UID=root;Password=123;";
        }
        protected void Page_Load(object sender, EventArgs e)
        {

            connectionString();
            con.Open();
            cmd.Connection = con;
            try
            {
                HttpCookie myCookie = Request.Cookies["myCookie"];
                var dateAsString = DateTime.Now.Date.ToString("yyyy-MM-dd");
                cmd.CommandText = "insert into compra(Date, email, id_kart) values('" + dateAsString + "','" + myCookie.Values["email"] + "','" + Request.QueryString["id"] + "')";
                dr = cmd.ExecuteReader();
            }
            catch
            {
                con.Close();
            }
        }
    }
}