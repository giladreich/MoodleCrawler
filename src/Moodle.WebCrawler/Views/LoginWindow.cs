using System;
using System.Windows.Forms;
using Moodle.WebCrawler.Models;

namespace Moodle.WebCrawler.Views
{
    public partial class LoginWindow : Form
    {
        public LoginWindow()
        {
            InitializeComponent();
        }

        private void btnLogin_Click(object sender, EventArgs e)
        {
            User user = new User(tbxUser.Text, tbxPass.Text);

            if (String.IsNullOrEmpty(user.Username) || String.IsNullOrEmpty(user.Password) ||
                !Program.NetworkClient.Authenticate(user))
            {
                MessageBox.Show("Invalid Username or Password", "Authentication Error", MessageBoxButtons.OK,
                    MessageBoxIcon.Error);
                return;
            }

            new MainWindow(user).Show(this);
        }

        private void LoginWindow_KeyPress(object sender, KeyPressEventArgs e)
        {
            Keys pressedKey = (Keys) e.KeyChar;
            switch (pressedKey)
            {
                case Keys.Return:
                    btnLogin.PerformClick();
                    break;
            }
        }

        private void tbx_TextChanged(object sender, EventArgs e)
        {
            btnLogin.Enabled = tbxUser.Text.Length > 3 && tbxPass.Text.Length > 3;
        }
    }
}
