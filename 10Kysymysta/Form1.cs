using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace _10Kysymysta
{
    public partial class VastauslomakeForm : Form
    {
        int Laskuri = 0;
        int Oikein = 0;
        string[] OikeatVastaukset = new string[] { "B", "D", "A", "A", "C", "A", "B", "A", "C", "D" };
        string[] Vastaukset = new string[10];
        string Annetut="", Oikeat="";

        public VastauslomakeForm()
        {
            InitializeComponent();
            VastausARB.CheckedChanged += new EventHandler(RadioButton_CheckedChanged);
            VastausBRB.CheckedChanged += new EventHandler(RadioButton_CheckedChanged);
            VastausCRB.CheckedChanged += new EventHandler(RadioButton_CheckedChanged);
            VastausDRB.CheckedChanged += new EventHandler(RadioButton_CheckedChanged);
        }

        private void VastauslomakeForm_Load(object sender, EventArgs e)
        {
            Luettele();
        }

        private void RadioButton_CheckedChanged(Object sender, EventArgs e)
        {
            TyhjaaVastaus();
            if (sender is RadioButton && Laskuri < 10)
            {
                RadioButton radioButton = (RadioButton)sender;
                Vastaukset[Laskuri] = radioButton.Text;
                Laskuri++;
                KysymysLB.Text = "Vastaus " + Laskuri + ". kysymykseen:";
            }
            else
            {
                VastausLB.Text = "";
                VastausARB.Enabled = false;
                VastausBRB.Enabled = false;
                VastausCRB.Enabled = false;
                VastausDRB.Enabled = false;
                for (int i = 0; i < 10; i++)
                {
                    if (Vastaukset[i] == OikeatVastaukset[i]) Oikein++;
                }
                VastausLB.Text = "Oikeita vastauksia oli: " + Oikein;
                VastausLB.Visible = true;
                VLB1.Visible = true;
                Annetut = Vastaukset[0] + ", ";
                Annetut += Vastaukset[1] + ", ";
                Annetut += Vastaukset[2] + ", ";
                Annetut += Vastaukset[3] + ", ";
                Annetut += Vastaukset[4] + ", ";
                Annetut += Vastaukset[5] + ", ";
                Annetut += Vastaukset[6] + ", ";
                Annetut += Vastaukset[7] + ", ";
                Annetut += Vastaukset[8] + ", ";
                Annetut += Vastaukset[9];
                VLB2.Text = Annetut;
                VLB2.Visible = true;
            }
            // TyhjaaVastaus();
        }

        private void TyhjaaVastaus()
        {
            if (VastausARB.Checked == true)
            {
                VastausARB.Checked = false;
                Laskuri--;
            }
            if (VastausBRB.Checked == true)
            {
                VastausBRB.Checked = false;
                Laskuri--;
            }
            if (VastausCRB.Checked == true)
            {
                VastausCRB.Checked = false;
                Laskuri--;
            }
            if (VastausDRB.Checked == true)
            {
                VastausDRB.Checked = false;
                Laskuri--;
            }
        }

        private void Luettele()
        {
            Oikeat = OikeatVastaukset[0] + ", ";
            Oikeat += OikeatVastaukset[1] + ", ";
            Oikeat += OikeatVastaukset[2] + ", ";
            Oikeat += OikeatVastaukset[3] + ", ";
            Oikeat += OikeatVastaukset[4] + ", ";
            Oikeat += OikeatVastaukset[5] + ", ";
            Oikeat += OikeatVastaukset[6] + ", ";
            Oikeat += OikeatVastaukset[7] + ", ";
            Oikeat += OikeatVastaukset[8] + ", ";
            Oikeat += OikeatVastaukset[9];
            LB2.Text = Oikeat;
        }
    }
}
