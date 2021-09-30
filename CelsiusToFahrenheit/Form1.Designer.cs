
namespace CelsiusToFahrenheit
{
    partial class AstemuuunninForm
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
            this.AsteetLB = new System.Windows.Forms.Label();
            this.AsteetBT = new System.Windows.Forms.TextBox();
            this.CelsiusRB = new System.Windows.Forms.RadioButton();
            this.FahrenheitRB = new System.Windows.Forms.RadioButton();
            this.MuunnaBT = new System.Windows.Forms.Button();
            this.VastausLB = new System.Windows.Forms.Label();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // AsteetLB
            // 
            this.AsteetLB.AutoSize = true;
            this.AsteetLB.Location = new System.Drawing.Point(20, 76);
            this.AsteetLB.Name = "AsteetLB";
            this.AsteetLB.Size = new System.Drawing.Size(115, 25);
            this.AsteetLB.TabIndex = 0;
            this.AsteetLB.Text = "Anna asteet:";
            // 
            // AsteetBT
            // 
            this.AsteetBT.Location = new System.Drawing.Point(190, 72);
            this.AsteetBT.Name = "AsteetBT";
            this.AsteetBT.Size = new System.Drawing.Size(73, 33);
            this.AsteetBT.TabIndex = 1;
            // 
            // CelsiusRB
            // 
            this.CelsiusRB.AutoSize = true;
            this.CelsiusRB.Font = new System.Drawing.Font("Segoe UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.CelsiusRB.Location = new System.Drawing.Point(6, 32);
            this.CelsiusRB.Name = "CelsiusRB";
            this.CelsiusRB.Size = new System.Drawing.Size(90, 29);
            this.CelsiusRB.TabIndex = 3;
            this.CelsiusRB.TabStop = true;
            this.CelsiusRB.Text = "Celsius";
            this.CelsiusRB.UseVisualStyleBackColor = true;
            // 
            // FahrenheitRB
            // 
            this.FahrenheitRB.AutoSize = true;
            this.FahrenheitRB.Font = new System.Drawing.Font("Segoe UI", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.FahrenheitRB.Location = new System.Drawing.Point(6, 68);
            this.FahrenheitRB.Name = "FahrenheitRB";
            this.FahrenheitRB.Size = new System.Drawing.Size(123, 29);
            this.FahrenheitRB.TabIndex = 4;
            this.FahrenheitRB.TabStop = true;
            this.FahrenheitRB.Text = "Fahrenheit";
            this.FahrenheitRB.UseVisualStyleBackColor = true;
            // 
            // MuunnaBT
            // 
            this.MuunnaBT.Location = new System.Drawing.Point(455, 71);
            this.MuunnaBT.Name = "MuunnaBT";
            this.MuunnaBT.Size = new System.Drawing.Size(99, 35);
            this.MuunnaBT.TabIndex = 5;
            this.MuunnaBT.Text = "Muunna";
            this.MuunnaBT.UseVisualStyleBackColor = true;
            this.MuunnaBT.Click += new System.EventHandler(this.MuunnaBT_Click);
            // 
            // VastausLB
            // 
            this.VastausLB.AutoSize = true;
            this.VastausLB.Location = new System.Drawing.Point(20, 170);
            this.VastausLB.Name = "VastausLB";
            this.VastausLB.Size = new System.Drawing.Size(76, 25);
            this.VastausLB.TabIndex = 6;
            this.VastausLB.Text = "Vastaus";
            this.VastausLB.Visible = false;
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.CelsiusRB);
            this.groupBox1.Controls.Add(this.FahrenheitRB);
            this.groupBox1.Location = new System.Drawing.Point(269, 21);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(166, 100);
            this.groupBox1.TabIndex = 7;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Miten muunnat?";
            // 
            // AstemuuunninForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(11F, 25F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(614, 235);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.VastausLB);
            this.Controls.Add(this.MuunnaBT);
            this.Controls.Add(this.AsteetBT);
            this.Controls.Add(this.AsteetLB);
            this.Font = new System.Drawing.Font("Segoe UI", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.Margin = new System.Windows.Forms.Padding(5, 5, 5, 5);
            this.Name = "AstemuuunninForm";
            this.Text = "Astemuuunnin";
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label AsteetLB;
        private System.Windows.Forms.TextBox AsteetBT;
        private System.Windows.Forms.RadioButton CelsiusRB;
        private System.Windows.Forms.RadioButton FahrenheitRB;
        private System.Windows.Forms.Button MuunnaBT;
        private System.Windows.Forms.Label VastausLB;
        private System.Windows.Forms.GroupBox groupBox1;
    }
}

