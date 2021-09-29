using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Autokululaskuri
{
    public partial class KustannusForm : Form
    {
        public KustannusForm()
        {
            InitializeComponent();
        }

        private void label7_Click(object sender, EventArgs e)
        {

        }

        private void KilometritCB_SelectedIndexChanged(object sender, EventArgs e)
        {
            double laina, nesteet, vakuutus, pesut, huollot, renkaat, muut, kilometrit, energia, kustannukset;
            laina = Convert.ToDouble(LainaTB.Text);
            nesteet = Convert.ToDouble(NesteetTB.Text);
            vakuutus = Convert.ToDouble(VakuutuksetTB.Text);
            pesut = Convert.ToDouble(PesutTB.Text);
            huollot = Convert.ToDouble(HuollotTB.Text);
            renkaat = Convert.ToDouble(RenkaatTB.Text);
            muut = Convert.ToDouble(MuutKulutTB.Text);
            kilometrit = Convert.ToDouble(KilometritCB.Text);
            energia = Convert.ToDouble(PolttonesteTB.Text);
            kustannukset = (laina + nesteet + vakuutus + pesut + huollot + renkaat + muut + energia) / (kilometrit /12);
            VastausLB.Text = "Kustannukset kilometriä kohti ovat: " + kustannukset;
            VastausLB.Visible = true;
        }
    }
}
