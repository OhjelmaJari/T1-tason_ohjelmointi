using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace PVKirja
{
    public partial class PVKirjaForm : Form
    {
        public PVKirjaForm()
        {
            InitializeComponent();
        }

        private void TallennaBT_Click(object sender, EventArgs e)
        {
            string teksti = File.ReadAllText(@"F:\\T1-Ohjelmointi\\Harjoitus 13-14\\PVKirja\\PvKirja.txt");
            teksti += SyottoTB.Text;
            teksti += " " + DateTime.Now.ToString("dd.MM.yyyy HH:mm") + "\n";
            TextWriter txt = new StreamWriter("F:\\T1-Ohjelmointi\\Harjoitus 13-14\\PVKirja\\PvKirja.txt");
            txt.Write(teksti);
            txt.Close();
            Application.Exit();
        }
    }
}
