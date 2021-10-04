using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Ajastin
{
    public partial class AjastinForm : System.Windows.Forms.Form
    {
        private int kokonaisaika;
        public AjastinForm()
        {
            InitializeComponent();
        }

        private void AjastinTM_Tick(object sender, EventArgs e)
        {
            if(kokonaisaika > 0)
            {
                kokonaisaika--;
                int mins = kokonaisaika / 60;
                int seks = kokonaisaika - ( mins * 60 );
                AikaLB.Text = mins + ":" + seks;
            }
            else
            {
                AjastinTM.Stop();
                MessageBox.Show("Aika loppui!");
            }
        }

        private void AjastinForm_Load(object sender, EventArgs e)
        {
            StopBT.Enabled = false;
            for(int i = 0; i < 60; i++)
            {
                MinuutitCB.Items.Add(i.ToString());
                SekunnitCB.Items.Add(i.ToString());
            }
            MinuutitCB.SelectedIndex = 0;
            SekunnitCB.SelectedIndex = 0;
        }

        private void MinuutitCB_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void SekunnitCB_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void AikaLB_Click(object sender, EventArgs e)
        {

        }

        private void StartBT_Click(object sender, EventArgs e)
        {
            StartBT.Enabled = false;
            StopBT.Enabled = true;
            int minuutit = int.Parse(MinuutitCB.SelectedItem.ToString());
            int sekunnit = int.Parse(SekunnitCB.SelectedItem.ToString());
            kokonaisaika = (minuutit * 60) + sekunnit;
            AjastinTM.Enabled = true;
        }

        private void StopBT_Click(object sender, EventArgs e)
        {
            StartBT.Enabled = true;
            StopBT.Enabled = false;
            kokonaisaika = 0;
            AjastinTM.Enabled = false;
            AikaLB.Text = "00:00";
        }
    }
}
