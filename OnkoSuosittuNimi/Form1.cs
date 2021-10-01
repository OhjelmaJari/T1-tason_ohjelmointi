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

namespace OnkoSuosittuNimi
{
    public partial class SuositutForm : Form
    {
        public SuositutForm()
        {
            InitializeComponent();
        }

        private void TarkastaBT_Click(object sender, EventArgs e)
        {
            VastausLB.Text = "";
            VastausLB.Visible = false;
            string[] pojat = File.ReadAllLines("F:\\T1-Ohjelmointi\\Harjoitus 13-14\\OnkoSuosittuNimi\\pojat.txt");
            string[] tytot = File.ReadAllLines("F:\\T1-Ohjelmointi\\Harjoitus 13-14\\OnkoSuosittuNimi\\tytot.txt");
            string nimi = NimiTB.Text;
            int laskurip = 1;
            int laskurit = 1;
            foreach(string poika in pojat)
            {
                if(nimi == poika)
                {
                    VastausLB.Text = "Nimesi on " + laskurip + ". suosituin poikien nimi vuonna 2020";
                    VastausLB.Visible = true;
                }
                laskurip++;
            }
            foreach (string tytto in tytot)
            {
                if (nimi == tytto)
                {
                    VastausLB.Text = "Nimesi on " + laskurit + ". suosituin tyttöjen nimi vuonna 2020";
                    VastausLB.Visible = true;
                }
                laskurit++;
            }
            if(VastausLB.Visible == false)
            {
                VastausLB.Text = "Nimesi ei löytynyt vuoden 2020 suosittujen nimien joukosta.";
                VastausLB.Visible = true;
            }
        }
    }
}
