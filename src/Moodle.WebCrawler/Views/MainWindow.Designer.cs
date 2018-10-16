namespace Moodle.WebCrawler.Views
{
    partial class MainWindow
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.lbxCourses = new System.Windows.Forms.ListBox();
            this.btnParse = new System.Windows.Forms.Button();
            this.btnParseAll = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.lblName = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // lbxCourses
            // 
            this.lbxCourses.FormattingEnabled = true;
            this.lbxCourses.Location = new System.Drawing.Point(56, 83);
            this.lbxCourses.Name = "lbxCourses";
            this.lbxCourses.Size = new System.Drawing.Size(258, 277);
            this.lbxCourses.TabIndex = 0;
            this.lbxCourses.DoubleClick += new System.EventHandler(this.lbxCourses_DoubleClick);
            // 
            // btnParse
            // 
            this.btnParse.Location = new System.Drawing.Point(89, 366);
            this.btnParse.Name = "btnParse";
            this.btnParse.Size = new System.Drawing.Size(189, 23);
            this.btnParse.TabIndex = 1;
            this.btnParse.Text = "Parse Selected Course Data";
            this.btnParse.UseVisualStyleBackColor = true;
            this.btnParse.Click += new System.EventHandler(this.btnParse_Click);
            // 
            // btnParseAll
            // 
            this.btnParseAll.Location = new System.Drawing.Point(89, 395);
            this.btnParseAll.Name = "btnParseAll";
            this.btnParseAll.Size = new System.Drawing.Size(189, 23);
            this.btnParseAll.TabIndex = 2;
            this.btnParseAll.Text = "Parse All Courses Data";
            this.btnParseAll.UseVisualStyleBackColor = true;
            this.btnParseAll.Click += new System.EventHandler(this.btnParseAll_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(82, 51);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(207, 29);
            this.label1.TabIndex = 2;
            this.label1.Text = "Available Courses";
            // 
            // lblName
            // 
            this.lblName.AutoSize = true;
            this.lblName.Location = new System.Drawing.Point(4, 13);
            this.lblName.Name = "lblName";
            this.lblName.Size = new System.Drawing.Size(86, 13);
            this.lblName.TabIndex = 3;
            this.lblName.Text = "Welcome Name!";
            // 
            // MainWindow
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(372, 433);
            this.Controls.Add(this.lblName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnParseAll);
            this.Controls.Add(this.btnParse);
            this.Controls.Add(this.lbxCourses);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedToolWindow;
            this.Name = "MainWindow";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Moodle Courses";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.MainWindow_FormClosing);
            this.Load += new System.EventHandler(this.MainWindow_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox lbxCourses;
        private System.Windows.Forms.Button btnParse;
        private System.Windows.Forms.Button btnParseAll;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblName;
    }
}

