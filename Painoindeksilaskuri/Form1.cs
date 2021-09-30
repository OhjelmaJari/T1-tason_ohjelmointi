using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Painoindeksilaskuri
{
    public partial class PainoindeksilaskuriForm : Form
    {
        public PainoindeksilaskuriForm()
        {
            InitializeComponent();
        }

        private void LaskeBT_Click(object sender, EventArgs e)
        {
            double paino = 0, pituus = 0;
            paino = Convert.ToDouble(PainoTB.Text);
            pituus = Convert.ToDouble(PituusTB.Text);
            double BMI = Math.Round(paino/(pituus*pituus),2);
            if(BMI < 18.5)
            {
                IndeksiLB.Text = "Painoindeksisi on: " + BMI;
                IndeksiLB.ForeColor = Color.YellowGreen;
                IndeksiLB.Visible = true;
                KuvausLB.Text = "Alipaino";
                KuvausLB.ForeColor = Color.YellowGreen;
                KuvausLB.Visible = true;
            }
            else if (BMI < 25)
            {
                IndeksiLB.Text = "Painoindeksisi on: " + BMI;
                IndeksiLB.ForeColor = Color.Green;
                IndeksiLB.Visible = true;
                KuvausLB.Text = "Normaalipaino";
                KuvausLB.ForeColor = Color.Green;
                KuvausLB.Visible = true;
            }
            else if (BMI < 40)
            {
                IndeksiLB.Text = "Painoindeksisi on: " + BMI;
                IndeksiLB.ForeColor = Color.DeepPink;
                IndeksiLB.Visible = true;
                KuvausLB.Text = "Ylipaino";
                KuvausLB.ForeColor = Color.DeepPink;
                KuvausLB.Visible = true;
            }
            else
            {
                IndeksiLB.Text = "Painoindeksisi on: " + BMI;
                IndeksiLB.ForeColor = Color.Red;
                IndeksiLB.Visible = true;
                KuvausLB.Text = "Huomattava ylipaino";
                KuvausLB.ForeColor = Color.Red;
                KuvausLB.Visible = true;
            }
        }
    }
}
