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
    public partial class Checkout : System.Web.UI.Page
    {

        MySqlConnection con = new MySqlConnection();
        MySqlCommand cmd = new MySqlCommand();
        MySqlCommand cmd1 = new MySqlCommand();
        MySqlCommand cmd2 = new MySqlCommand();
        MySqlDataReader dr;
        MySqlDataReader dr1;
        MySqlDataReader dr2;

        void connectionString()
        {
            con.ConnectionString = "Server=localhost;Database=pdw;UID=root;Password=123;";
        }

        public string getID()
        {
            string test = Request.QueryString["cakeid"].ToString();
            return test;
        }

        public string getQuant()
        {
            string test = Request.QueryString["quantidade"].ToString();
            return test;
        }

        public string getDes()
        {
            string test = Request.QueryString["description"].ToString();
            return test;
        }

        public void insertBolo() {
            cmd1.Connection = con;
            HttpCookie myCookie = Request.Cookies["myCookie"];
            if (!string.IsNullOrEmpty(myCookie.Values["email"]))
            {
                string email = myCookie.Values["email"].ToString();
                cmd1.CommandText = "insert into carrinho(id_bolo, email, quant, description)  values('" + getID() + "', '" + email + "', '" + getQuant() + "', '" + getDes()  + "');";
                dr1 = cmd1.ExecuteReader();
            }
            
        }

        protected static List<String> items = new List<String>();
        StringBuilder build = new StringBuilder();
        StringBuilder addToCart = new StringBuilder();

        protected void Page_Load(object sender, EventArgs e)
        {
            connectionString();
            con.Open();
            cmd.Connection = con;
            
            if (Request.QueryString.GetValues(null)?.Contains("cakeid")??true)
            {
                insertBolo();
            }

            try
            {
                cmd.CommandText = "select * from carrinho, tipos_bolos where email = " + Request.Cookies["myCookie"];
                dr = cmd.ExecuteReader();

                while (dr.Read())
                {
                    addToCart.Append("<h5>" + dr["quant"].ToString()+ " unidades de " + dr["name"].ToString() + " por "
                        + dr["carrinho.Price"].ToString() + "€"
                        + "<br>Descrição:" + dr["description"].ToString()
                        + "</h5><br><br><form action = 'buy.aspx' method = 'GET' >" 
                        + "<input type='submit' value = 'Comprar'></form>"
                        + "<form action = 'remove.aspx' method = 'GET' ><input type='submit' value = 'Remover Pedido'></form>");
                }

                float totalcart = 0;
                for (int i = 0; i < items.Count; i++) {
                    string[] a = items[i].Split(',');
                    totalcart += float.Parse(a[2]);
                }

                build.Append("<p><span class='cart'></span>Cart<label>" + totalcart + "€</label></p>");
                con.Close();
                cart.Controls.Add(new Literal { Text = build.ToString() });
                cart_items.Controls.Add(new Literal { Text = addToCart.ToString() });


            }
            catch
            {
                con.Close();
            }

        }
    }
}