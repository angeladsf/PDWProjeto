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
        MySqlCommand cmd3 = new MySqlCommand();
        MySqlCommand cmd5 = new MySqlCommand();
        MySqlDataReader dr;
        MySqlDataReader dr1;
        MySqlDataReader dr2;
        MySqlDataReader dr3;
        MySqlDataReader dr5;

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


        bool isit = false;

        protected static List<String> items = new List<String>();
        StringBuilder build = new StringBuilder();
        StringBuilder addToCart = new StringBuilder();
        StringBuilder ifisadmin = new StringBuilder();

        protected void Page_Load(object sender, EventArgs e)
        {
            connectionString();
            con.Open();
            cmd.Connection = con;
            cmd2.Connection = con;


        


            if (Request.QueryString["cakeid"] != null)
            {
                insertBolo();
                Response.Redirect("~/checkout.aspx");
            }


            if (Request.QueryString["concluirCompra"] != null)
            {
                cmd2.CommandText = "Delete from compra where id_kart = " + Request.QueryString["concluirCompra"].ToString();
                dr2 = cmd2.ExecuteReader();
                Response.Redirect("~/checkout.aspx");
            }

            if (Request.QueryString["cancelarCompra"] != null)
            {
                cmd2.CommandText = "Delete from compra where id_kart = " + Request.QueryString["cancelarCompra"].ToString();
                dr2 = cmd2.ExecuteReader();
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

            try {
                con.Open();
                
                cmd3.Connection = con;
                
                
                HttpCookie myCookie = Request.Cookies["myCookie"];

                cmd3.CommandText = "select date, compra.email as emailc, address, cliente.email, id_kart, cakeid, id,id_bolo, quant, tipos_bolos.name as nameb, " +
                    "price, description from compra inner join carrinho on id = id_kart inner join tipos_bolos on carrinho.id_bolo = tipos_bolos.cakeid" +
                    " inner join cliente on compra.email = cliente.email";
                dr3 = cmd3.ExecuteReader();

                

                ifisadmin.Append("<br><br><h2 class='title'>Compras</h2><br>");
                ifisadmin.Append("<table class = 'admintable'>");
                ifisadmin.Append("<thead><tr><th>Data</th><th>Email</th><th>Morada</th><th>Bolo</th><th>Quantidade</th><th>Descrição</th><th>Preço</th></tr></thead>");

                while (dr3.Read())
                {
                    ifisadmin.Append("<tbody><tr>");
                    ifisadmin.Append("<td>" + dr3["date"].ToString().Split(' ')[0] + "</td>");
                    ifisadmin.Append("<td>" + dr3["emailc"].ToString() + "</td>");
                    ifisadmin.Append("<td>" + dr3["address"].ToString() + "</td>");
                    ifisadmin.Append("<td>" + dr3["nameb"].ToString() + "</td>");
                    ifisadmin.Append("<td>" + dr3["quant"].ToString() + "</td>");
                    ifisadmin.Append("<td>" + dr3["description"].ToString() + "</td>");
                    ifisadmin.Append("<td>" + (float.Parse(dr3["quant"].ToString()) * float.Parse(dr3["price"].ToString())).ToString() + "</td>");
                ifisadmin.Append("</tr>" +
                    "<tr><td colspan = '7' align='center' id = 'sp'>" +
                    "<form style='display:inline;' action = 'checkout.aspx' method = 'GET' >"
                + "<input style='display:none;' type='text' name = 'concluircompra' value = '" + dr3["id_kart"].ToString() + "'/><input class = 'new_input' type='submit' value = 'Concluir Compra'></form>"
                + "&nbsp&nbsp<form style='display:inline;' action = 'checkout.aspx' method = 'GET'><input style='display:none;' type='text' name = 'cancelarcompra' value = '" + dr3["id_kart"].ToString() + "'/><input type='submit' class = 'new_input' value = 'Cancelar Compra'></form>" +
                    "</td>");
                    ifisadmin.Append("</tr>");

                }
                ifisadmin.Append("</tbody></table>");

                
                if (myCookie.Values["Admin"] == "1") {
                    cart_items.Controls.Add(new Literal { Text = ifisadmin.ToString() });
                }

                con.Close();
                

            }
            catch (Exception exception){
                Console.WriteLine(exception.ToString());
                con.Close();
            }

        }
    }
}