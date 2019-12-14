using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Data.SqlClient;
using PDWProject.Models;
using MySql.Data.MySqlClient;
using System.Web.Security;


namespace PDWProject.Controllers
{
    public class AccountController : Controller
    {
        MySqlConnection con = new MySqlConnection();
        MySqlCommand cmd = new MySqlCommand();
        MySqlDataReader dr;

        [HttpGet]
        public ActionResult Index()
        {
            return View();
        }
        [HttpGet]
        public ActionResult Login()
        {
            return View();
        }
        [HttpGet]
        public ActionResult Register()
        {
            return View();
        }
        void connectionString() {
            con.ConnectionString = "Server=localhost;Database=pdw;UID=root;Password=123;";
        }
        [HttpPost]
        public ActionResult Verify(Account acc){
            connectionString();
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "select name, password, Admin, address, email from cliente where email = '" + acc.Email + "' and password = '" + acc.Password + "'";
            dr = cmd.ExecuteReader();
            if (dr.Read())
            {

                if (Request.Cookies["email"] != null)
                {
                    Response.Cookies["email"].Expires = DateTime.Now.AddDays(-1);

                }
                HttpCookie myCookie = new HttpCookie("myCookie");
                myCookie.Values.Add("email", acc.Email);
                myCookie.Values.Add("Admin", dr["Admin"].ToString());
                myCookie.Expires = DateTime.Now.AddHours(12);
                Response.Cookies.Add(myCookie);
                con.Close();
                return View("Index");
            }
            else {
                con.Close();
                return View("Error");
            }
            
        }

        public ActionResult VerifyRegister(Account acc)
        {
            connectionString();
            con.Open();
            cmd.Connection = con;
            try
            {
                cmd.CommandText = "insert into cliente(name, password, email, address)  values('" + acc.Username + "', '" + acc.Password + "', '" + acc.Email + "', '" + acc.Address + "');";
                dr = cmd.ExecuteReader();
                con.Close();
                return View("Login");

            }
            catch{
                con.Close();
                return View("Error");
            }

        }

        protected void Logout(object sender, EventArgs e)
        {
            FormsAuthentication.SignOut();
            Response.Redirect("/Account/Login");
        }

        [HttpGet]
        public ActionResult Products()
        {
            return View();
        }

    }
}