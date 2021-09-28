
namespace SalasananTarkastus
{
    partial class SalasanaForm
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.SalasanaPanel = new System.Windows.Forms.Panel();
            this.VirheviestiLB = new System.Windows.Forms.Label();
            this.TarkistaBT = new System.Windows.Forms.Button();
            this.SalasanaTB = new System.Windows.Forms.TextBox();
            this.KayttajaTB = new System.Windows.Forms.TextBox();
            this.SalasanaLB = new System.Windows.Forms.Label();
            this.KayttajaLB = new System.Windows.Forms.Label();
            this.SalasanaOikeinPanel = new System.Windows.Forms.Panel();
            this.label1 = new System.Windows.Forms.Label();
            this.SalasanaPanel.SuspendLayout();
            this.SalasanaOikeinPanel.SuspendLayout();
            this.SuspendLayout();
            // 
            // SalasanaPanel
            // 
            this.SalasanaPanel.BackColor = System.Drawing.Color.MidnightBlue;
            this.SalasanaPanel.Controls.Add(this.VirheviestiLB);
            this.SalasanaPanel.Controls.Add(this.TarkistaBT);
            this.SalasanaPanel.Controls.Add(this.SalasanaTB);
            this.SalasanaPanel.Controls.Add(this.KayttajaTB);
            this.SalasanaPanel.Controls.Add(this.SalasanaLB);
            this.SalasanaPanel.Controls.Add(this.KayttajaLB);
            this.SalasanaPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.SalasanaPanel.Font = new System.Drawing.Font("Segoe Script", 18F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.SalasanaPanel.ForeColor = System.Drawing.Color.Gold;
            this.SalasanaPanel.Location = new System.Drawing.Point(0, 0);
            this.SalasanaPanel.Name = "SalasanaPanel";
            this.SalasanaPanel.Size = new System.Drawing.Size(647, 268);
            this.SalasanaPanel.TabIndex = 0;
            // 
            // VirheviestiLB
            // 
            this.VirheviestiLB.AutoSize = true;
            this.VirheviestiLB.Location = new System.Drawing.Point(77, 153);
            this.VirheviestiLB.Name = "VirheviestiLB";
            this.VirheviestiLB.Size = new System.Drawing.Size(154, 40);
            this.VirheviestiLB.TabIndex = 5;
            this.VirheviestiLB.Text = "Virheviesti";
            this.VirheviestiLB.Visible = false;
            // 
            // TarkistaBT
            // 
            this.TarkistaBT.ForeColor = System.Drawing.Color.DarkGoldenrod;
            this.TarkistaBT.Location = new System.Drawing.Point(257, 199);
            this.TarkistaBT.Name = "TarkistaBT";
            this.TarkistaBT.Size = new System.Drawing.Size(149, 45);
            this.TarkistaBT.TabIndex = 4;
            this.TarkistaBT.Text = "Tarkista";
            this.TarkistaBT.UseVisualStyleBackColor = true;
            this.TarkistaBT.Click += new System.EventHandler(this.TarkistaBT_Click);
            // 
            // SalasanaTB
            // 
            this.SalasanaTB.Location = new System.Drawing.Point(257, 81);
            this.SalasanaTB.Name = "SalasanaTB";
            this.SalasanaTB.Size = new System.Drawing.Size(329, 46);
            this.SalasanaTB.TabIndex = 3;
            // 
            // KayttajaTB
            // 
            this.KayttajaTB.Location = new System.Drawing.Point(257, 26);
            this.KayttajaTB.Name = "KayttajaTB";
            this.KayttajaTB.Size = new System.Drawing.Size(329, 46);
            this.KayttajaTB.TabIndex = 2;
            // 
            // SalasanaLB
            // 
            this.SalasanaLB.AutoSize = true;
            this.SalasanaLB.Location = new System.Drawing.Point(93, 84);
            this.SalasanaLB.Name = "SalasanaLB";
            this.SalasanaLB.Size = new System.Drawing.Size(138, 40);
            this.SalasanaLB.TabIndex = 1;
            this.SalasanaLB.Text = "Salasana:";
            // 
            // KayttajaLB
            // 
            this.KayttajaLB.AutoSize = true;
            this.KayttajaLB.Location = new System.Drawing.Point(11, 29);
            this.KayttajaLB.Name = "KayttajaLB";
            this.KayttajaLB.Size = new System.Drawing.Size(220, 40);
            this.KayttajaLB.TabIndex = 0;
            this.KayttajaLB.Text = "Käyttäjätunnus:";
            // 
            // SalasanaOikeinPanel
            // 
            this.SalasanaOikeinPanel.BackColor = System.Drawing.Color.DarkRed;
            this.SalasanaOikeinPanel.Controls.Add(this.label1);
            this.SalasanaOikeinPanel.Dock = System.Windows.Forms.DockStyle.Fill;
            this.SalasanaOikeinPanel.Font = new System.Drawing.Font("Segoe Script", 36F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.SalasanaOikeinPanel.ForeColor = System.Drawing.Color.Snow;
            this.SalasanaOikeinPanel.Location = new System.Drawing.Point(0, 0);
            this.SalasanaOikeinPanel.Name = "SalasanaOikeinPanel";
            this.SalasanaOikeinPanel.Size = new System.Drawing.Size(647, 268);
            this.SalasanaOikeinPanel.TabIndex = 1;
            this.SalasanaOikeinPanel.Visible = false;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(60, 94);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(574, 80);
            this.label1.TabIndex = 0;
            this.label1.Text = "Tervetuloa sivuilleni";
            // 
            // SalasanaForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(13F, 31F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(647, 268);
            this.Controls.Add(this.SalasanaOikeinPanel);
            this.Controls.Add(this.SalasanaPanel);
            this.Font = new System.Drawing.Font("Segoe Script", 14.25F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Bold | System.Drawing.FontStyle.Italic))), System.Drawing.GraphicsUnit.Point);
            this.Margin = new System.Windows.Forms.Padding(6);
            this.Name = "SalasanaForm";
            this.Text = "SalasananTarkastus";
            this.SalasanaPanel.ResumeLayout(false);
            this.SalasanaPanel.PerformLayout();
            this.SalasanaOikeinPanel.ResumeLayout(false);
            this.SalasanaOikeinPanel.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel SalasanaPanel;
        private System.Windows.Forms.Label VirheviestiLB;
        private System.Windows.Forms.Button TarkistaBT;
        private System.Windows.Forms.TextBox SalasanaTB;
        private System.Windows.Forms.TextBox KayttajaTB;
        private System.Windows.Forms.Label SalasanaLB;
        private System.Windows.Forms.Label KayttajaLB;
        private System.Windows.Forms.Panel SalasanaOikeinPanel;
        private System.Windows.Forms.Label label1;
    }
}

