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
            
            if (Request.QueryString["cakeid"] != null)
            {
                insertBolo();
                Response.Redirect("~/checkout.aspx");
            }

            try
            {
                HttpCookie myCookie = Request.Cookies["myCookie"];
                
                cmd.CommandText = "select id, name, price, cakeid, carrinho.email, imagepath, quant,id_bolo, description from carrinho" +
                    " inner join tipos_bolos on cakeid = id_bolo where carrinho.email = '" 
                    + myCookie.Values["email"] + "' and id not in (select id_kart from compra)";
                dr = cmd.ExecuteReader();

                float totalcart = 0;
                while (dr.Read())
                {
                    float price = float.Parse(dr["quant"].ToString()) * float.Parse(dr["price"].ToString());
                    addToCart.Append("<img style='float:left; width:150px; height:auto; margin-right:10px;' src='" + dr["ImagePath"].ToString() + "' alt=''>");
                    addToCart.Append("<h5>" + dr["quant"].ToString()+ " unidades de " + dr["name"].ToString() + " por "
                        + price.ToString() + "€"
                        + "<br><div style='width:80%; word-wrap:break-word;'>Descrição:" + dr["description"].ToString() + "</div>"
                        + "</h5><form style='display:inline;' action = 'buy.aspx' method = 'GET' >" 
                        + "<input style='display:none;' type='text' name = 'id' value = '"+dr["id"].ToString() +"'/><input class = 'new_input' type='submit' value = 'Comprar'></form>"
                        + "&nbsp&nbsp<form style='display:inline;' action = 'remove.aspx' method = 'GET' ><input style='display:none;' type='text' name = 'id' value = '" + dr["id"].ToString() + "'/><input type='submit' class = 'new_input' value = 'Remover Pedido'></form><br><br>");
                    totalcart += price;
                }

                build.Append("<p><span class='cart'></span>Carrinho<label>" + totalcart + "€</label></p>");
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