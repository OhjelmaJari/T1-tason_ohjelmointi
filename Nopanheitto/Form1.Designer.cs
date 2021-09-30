
namespace Nopanheitto
{
    partial class NopanheittoForm
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
            this.label1 = new System.Windows.Forms.Label();
            this.Noppa2PB = new System.Windows.Forms.PictureBox();
            this.Noppa1PB = new System.Windows.Forms.PictureBox();
            this.HeitaBT = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.Noppa2PB)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.Noppa1PB)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Script MT Bold", 48F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.label1.Location = new System.Drawing.Point(177, 9);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(367, 77);
            this.label1.TabIndex = 0;
            this.label1.Text = "Nopan heitto";
            // 
            // Noppa2PB
            // 
            this.Noppa2PB.Image = global::Nopanheitto.Properties.Resources.Noppa61;
            this.Noppa2PB.Location = new System.Drawing.Point(365, 118);
            this.Noppa2PB.Name = "Noppa2PB";
            this.Noppa2PB.Size = new System.Drawing.Size(283, 286);
            this.Noppa2PB.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.Noppa2PB.TabIndex = 2;
            this.Noppa2PB.TabStop = false;
            // 
            // Noppa1PB
            // 
            this.Noppa1PB.Image = global::Nopanheitto.Properties.Resources.Noppa1;
            this.Noppa1PB.Location = new System.Drawing.Point(60, 118);
            this.Noppa1PB.Name = "Noppa1PB";
            this.Noppa1PB.Size = new System.Drawing.Size(286, 286);
            this.Noppa1PB.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.Noppa1PB.TabIndex = 3;
            this.Noppa1PB.TabStop = false;
            // 
            // HeitaBT
            // 
            this.HeitaBT.Font = new System.Drawing.Font("Script MT Bold", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.HeitaBT.Location = new System.Drawing.Point(60, 445);
            this.HeitaBT.Name = "HeitaBT";
            this.HeitaBT.Size = new System.Drawing.Size(588, 60);
            this.HeitaBT.TabIndex = 4;
            this.HeitaBT.Text = "Heitä";
            this.HeitaBT.UseVisualStyleBackColor = true;
            this.HeitaBT.Click += new System.EventHandler(this.HeitaBT_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(36, 554);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(302, 25);
            this.label2.TabIndex = 5;
            this.label2.Text = "Vastaus kysymykseen: 3 uutta riviä.";
            // 
            // NopanheittoForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(11F, 25F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(740, 607);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.HeitaBT);
            this.Controls.Add(this.Noppa1PB);
            this.Controls.Add(this.Noppa2PB);
            this.Controls.Add(this.label1);
            this.Font = new System.Drawing.Font("Segoe UI", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.Margin = new System.Windows.Forms.Padding(5, 5, 5, 5);
            this.Name = "NopanheittoForm";
            this.Text = "Heitä Noppaa";
            ((System.ComponentModel.ISupportInitialize)(this.Noppa2PB)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.Noppa1PB)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.PictureBox Noppa2PB;
        private System.Windows.Forms.PictureBox Noppa1PB;
        private System.Windows.Forms.Button HeitaBT;
        private System.Windows.Forms.Label label2;
    }
}

