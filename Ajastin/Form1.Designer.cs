
namespace Ajastin
{
    partial class AjastinForm
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
            this.components = new System.ComponentModel.Container();
            this.MinuutitLB = new System.Windows.Forms.Label();
            this.SekunnitLB = new System.Windows.Forms.Label();
            this.MinuutitCB = new System.Windows.Forms.ComboBox();
            this.SekunnitCB = new System.Windows.Forms.ComboBox();
            this.AikaLB = new System.Windows.Forms.Label();
            this.StartBT = new System.Windows.Forms.Button();
            this.StopBT = new System.Windows.Forms.Button();
            this.AjastinTM = new System.Windows.Forms.Timer(this.components);
            this.SuspendLayout();
            // 
            // MinuutitLB
            // 
            this.MinuutitLB.AutoSize = true;
            this.MinuutitLB.Location = new System.Drawing.Point(13, 13);
            this.MinuutitLB.Name = "MinuutitLB";
            this.MinuutitLB.Size = new System.Drawing.Size(67, 20);
            this.MinuutitLB.TabIndex = 0;
            this.MinuutitLB.Text = "Minuutit:";
            // 
            // SekunnitLB
            // 
            this.SekunnitLB.AutoSize = true;
            this.SekunnitLB.Location = new System.Drawing.Point(86, 13);
            this.SekunnitLB.Name = "SekunnitLB";
            this.SekunnitLB.Size = new System.Drawing.Size(68, 20);
            this.SekunnitLB.TabIndex = 1;
            this.SekunnitLB.Text = "Sekunnit:";
            // 
            // MinuutitCB
            // 
            this.MinuutitCB.FormattingEnabled = true;
            this.MinuutitCB.Location = new System.Drawing.Point(13, 37);
            this.MinuutitCB.Name = "MinuutitCB";
            this.MinuutitCB.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.MinuutitCB.Size = new System.Drawing.Size(67, 28);
            this.MinuutitCB.TabIndex = 2;
            this.MinuutitCB.SelectedIndexChanged += new System.EventHandler(this.MinuutitCB_SelectedIndexChanged);
            // 
            // SekunnitCB
            // 
            this.SekunnitCB.FormattingEnabled = true;
            this.SekunnitCB.Location = new System.Drawing.Point(86, 36);
            this.SekunnitCB.Name = "SekunnitCB";
            this.SekunnitCB.RightToLeft = System.Windows.Forms.RightToLeft.Yes;
            this.SekunnitCB.Size = new System.Drawing.Size(68, 28);
            this.SekunnitCB.TabIndex = 3;
            this.SekunnitCB.SelectedIndexChanged += new System.EventHandler(this.SekunnitCB_SelectedIndexChanged);
            // 
            // AikaLB
            // 
            this.AikaLB.AutoSize = true;
            this.AikaLB.Font = new System.Drawing.Font("Segoe UI", 28.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.AikaLB.Location = new System.Drawing.Point(13, 72);
            this.AikaLB.Name = "AikaLB";
            this.AikaLB.Size = new System.Drawing.Size(137, 62);
            this.AikaLB.TabIndex = 4;
            this.AikaLB.Text = "00:00";
            this.AikaLB.Click += new System.EventHandler(this.AikaLB_Click);
            // 
            // StartBT
            // 
            this.StartBT.Location = new System.Drawing.Point(13, 138);
            this.StartBT.Name = "StartBT";
            this.StartBT.Size = new System.Drawing.Size(67, 29);
            this.StartBT.TabIndex = 5;
            this.StartBT.Text = "Start";
            this.StartBT.UseVisualStyleBackColor = true;
            this.StartBT.Click += new System.EventHandler(this.StartBT_Click);
            // 
            // StopBT
            // 
            this.StopBT.Location = new System.Drawing.Point(86, 137);
            this.StopBT.Name = "StopBT";
            this.StopBT.Size = new System.Drawing.Size(67, 29);
            this.StopBT.TabIndex = 6;
            this.StopBT.Text = "Stop";
            this.StopBT.UseVisualStyleBackColor = true;
            this.StopBT.Click += new System.EventHandler(this.StopBT_Click);
            // 
            // AjastinTM
            // 
            this.AjastinTM.Interval = 1000;
            this.AjastinTM.Tick += new System.EventHandler(this.AjastinTM_Tick);
            // 
            // AjastinForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 20F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(165, 182);
            this.Controls.Add(this.StopBT);
            this.Controls.Add(this.StartBT);
            this.Controls.Add(this.AikaLB);
            this.Controls.Add(this.SekunnitCB);
            this.Controls.Add(this.MinuutitCB);
            this.Controls.Add(this.SekunnitLB);
            this.Controls.Add(this.MinuutitLB);
            this.Name = "AjastinForm";
            this.Text = "Ajastin";
            this.Load += new System.EventHandler(this.AjastinForm_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label MinuutitLB;
        private System.Windows.Forms.Label SekunnitLB;
        private System.Windows.Forms.ComboBox MinuutitCB;
        private System.Windows.Forms.ComboBox SekunnitCB;
        private System.Windows.Forms.Label AikaLB;
        private System.Windows.Forms.Button StartBT;
        private System.Windows.Forms.Button StopBT;
        private System.Windows.Forms.Timer AjastinTM;
    }
}

